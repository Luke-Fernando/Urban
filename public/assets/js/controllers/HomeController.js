import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Dropdown from "../helpers/Dropdown.js";
import Generate from "../helpers/Generate.js";
import TriggerEnter from "../helpers/TriggerEnter.js";
import HomeModel from "../models/HomeModel.js";

class HomeController extends Controller {

    constructor() {
        super();
        let triggerEnter = new TriggerEnter();
        triggerEnter.triggerInputEnter();
        this.homeModel = new HomeModel();
        this.perPage = 5;
        this.currentPage = 0;
    }

    home() {
        this.initializeJobs();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        let dropdown = new Dropdown();
        dropdown.triggerDropdowns();
        this.triggerFilter();
        this.loadJobs();
    }

    generateUniqueId() {
        let timestamp = new Date().getTime();
        let randomNum = Math.floor(Math.random() * 1000000);
        return `${timestamp}-${randomNum}`;
    }

    showFilter(filterMenu, filterBg) {
        filterBg.classList.remove("hidden");
        filterMenu.classList.remove("invisible");
        filterMenu.classList.add("max-h-[100vh]");
        filterMenu.classList.remove("max-h-0");
        filterMenu.setAttribute("data-show", "true");
        document.querySelector("body").style.overflow = "hidden";
    }

    hideFilter(filterMenu, filterBg) {
        filterBg.classList.add("hidden");
        filterMenu.classList.add("invisible");
        filterMenu.classList.remove("max-h-[100vh]");
        filterMenu.classList.add("max-h-0");
        filterMenu.setAttribute("data-show", "false");
        document.querySelector("body").style.overflow = "auto";
    }

    toggleFilter(filterMenu, filterBg) {
        let menuStat = filterMenu.getAttribute("data-show");
        if (menuStat == "true") {
            this.hideFilter(filterMenu, filterBg);
        } else {
            this.showFilter(filterMenu, filterBg);
        }
    }

    triggerFilter() {
        const triggers = document.querySelectorAll("[data-filter-trigger]");

        triggers.forEach(trigger => {
            if (trigger != null) {
                let filterId = trigger.getAttribute("data-filter-trigger");
                let closeTrigger = document.querySelector(`[data-filter-close="${filterId}"]`);
                let filterMenu = document.querySelector(`[data-filter-menu="${filterId}"]`);
                let filterBg = document.querySelector(`[data-filter-bg="${filterId}"]`);
                trigger.addEventListener("click", () => {
                    this.toggleFilter(filterMenu, filterBg);
                });
                document.addEventListener("click", (event) => {
                    if (!filterMenu.contains(event.target) && !trigger.contains(event.target)) {
                        this.hideFilter(filterMenu, filterBg);
                    }
                });
                closeTrigger.addEventListener("click", () => {
                    this.hideFilter(filterMenu, filterBg);
                });
            }
        });
    }

    getJobs(response) {
        console.log(response);
        let roundApplications = (count) => {
            let applicationCount = Number(count);
            let roundedCount = Math.floor(applicationCount / 5) * 5
            let lastCount = "";
            if (roundedCount < applicationCount) {
                lastCount = `${roundedCount}+`;
            } else {
                lastCount = roundedCount;
            }

            return lastCount;
        }

        this.currentPage += this.perPage;

        response.forEach(async (item) => {
            const jobsContainer = document.getElementById("jobs-container");
            let generate = new Generate();
            let id = this.generateUniqueId();
            let job = await generate.generateElement("/assets/js/views/home/job.php");
            let jobLink = `/job/?id=${item.id}`
            job.setAttribute("data-job", id);
            job.querySelector("[data-job-header]").setAttribute("data-job-header", id);
            job.querySelector("[data-job-header]").setAttribute("href", jobLink);
            job.querySelector("[data-job-date]").setAttribute("data-job-date", id);
            job.querySelector("[data-job-date]").textContent = item.date.split(' ')[0];
            job.querySelector("[data-job-title]").setAttribute("data-job-title", id);
            job.querySelector("[data-job-title]").textContent = item.title;
            job.querySelector("[data-job-budget]").setAttribute("data-job-budget", id);
            job.querySelector("[data-job-budget]").textContent = `${item.payment_type}: $${item.budget}`;
            job.querySelector("[data-job-save]").setAttribute("data-job-save", id);
            if (item.saved) {
                job.querySelector("[data-job-save]").classList.remove("text-[var(--main-font-color-30)]");
                job.querySelector("[data-job-save]").classList.add("text-[var(--active-color-brown)]");
            } else {
                job.querySelector("[data-job-save]").classList.add("text-[var(--main-font-color-30)]");
                job.querySelector("[data-job-save]").classList.remove("text-[var(--active-color-brown)]");
            }
            job.querySelector("[data-job-save]").addEventListener("click", async (event) => {
                this.processLoader.appendProcessLoadSpinner();
                this.homeModel.addValue("job_id", item.id);
                let responseJSON = await this.homeModel.saveJobs();
                console.log(responseJSON);


                this.processLoader.removeProcessLoadSpinner(1000, async () => {
                    // 
                    let response = JSON.parse(responseJSON);
                    // do something!
                    if (response.status == "success") {
                        if (response.message == "success") {
                            event.target.classList.toggle("text-[var(--main-font-color-30)]");
                            event.target.classList.toggle("text-[var(--active-color-brown)]");
                        } else {
                            this.alert.alert(response.message, 3000);
                        }
                    } else {
                        this.alert.alert("Something went wrong", 3000);
                    }
                    // 
                });
            });
            job.querySelector("[data-job-description]").setAttribute("data-job-description", id);
            job.querySelector("[data-job-description]").textContent = item.description;
            job.querySelector("[data-job-description]").setAttribute("href", jobLink);
            job.querySelector("[data-job-applications]").setAttribute("data-job-applications", id);
            job.querySelector("[data-job-applications]").setAttribute("href", jobLink);
            job.querySelector("[data-job-applications]").textContent = `${roundApplications(item.total_applications)} applications`;
            job.querySelector("[data-job-skills]").setAttribute("data-job-skills", id);
            item.skills.forEach(async (skill) => {
                let skillEle = await generate.generateElement("/assets/js/views/home/job-skill.php");
                skillEle.setAttribute("data-job-skill", skill.skill_id);
                skillEle.setAttribute("href", `/search/?skill=${skill.skill_id}`);
                skillEle.textContent = skill.skill;
                job.querySelector("[data-job-skills]").appendChild(skillEle);
            });
            job.querySelector("[data-job-author]").setAttribute("data-job-author", id);
            job.querySelector("[data-job-author]").textContent = item.author;
            job.querySelector("[data-job-author]").setAttribute("href", `/user/?id=${item.author_id}`);
            job.querySelector("[data-job-review]").setAttribute("data-job-review", id);
            let review = Number(item.review);
            for (let i = 0; i < 5; i++) {
                let star;
                if (i < review) {
                    star = await generate.generateElement("/assets/js/views/home/job-star-active.php");
                } else {
                    star = await generate.generateElement("/assets/js/views/home/job-star.php");
                }
                job.querySelector("[data-job-review]").appendChild(star);
            }

            jobsContainer.appendChild(job);
        });
    }

    loadJobs() {
        const loadMoreButton = document.getElementById("load-jobs-button");
        loadMoreButton.addEventListener("click", async () => {
            this.processLoader.appendProcessLoadSpinner();
            this.homeModel.addValue("limit", this.perPage);
            this.homeModel.addValue("offset", this.currentPage);
            let responseJSON = await this.homeModel.loadJobs();



            this.processLoader.removeProcessLoadSpinner(1000, async () => {
                // 
                let response = JSON.parse(responseJSON);
                this.getJobs(response);
                // 
            });
        })
    }

    async initializeJobs() {
        let stat = document.querySelector("[data-display-stat]").getAttribute("data-display-stat");

        this.homeModel.addValue("limit", this.perPage);
        this.homeModel.addValue("offset", this.currentPage);
        this.homeModel.addValue("stat", stat);
        let responseJSON = await this.homeModel.loadJobs();
        console.log(responseJSON);

        let response = JSON.parse(responseJSON);
        this.getJobs(response);
    }
}

export default HomeController;