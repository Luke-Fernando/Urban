import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Confirm from "../helpers/Confirm.js";
import Dropdown from "../helpers/Dropdown.js";
import TriggerEnter from "../helpers/TriggerEnter.js";
import Select from "../helpers/Select.js";
import Generate from "../helpers/Generate.js";
import JobModel from "../models/JobModel.js";

class JobController extends Controller {
    constructor() {
        super();
        this.jobModel = new JobModel();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        let dropdown = new Dropdown();
        dropdown.triggerDropdowns();
        let triggerEnter = new TriggerEnter();
        triggerEnter.triggerInputEnter();
        this.confirmation = new Confirm();
        let select = new Select();
        select.triggerDropdowns();
        this.data = {
            "title": "",
            "category": "",
            "sub_category": "",
            "skills": [],
            "experience": "",
            "language": [],
            "number_of_freelancers": "",
            "payment_type": "",
            "budget": "",
            "description": "",
            "attachment": [],
        };
    }

    post() {
        this.manageSubCategories();
        this.manageSkills();
        this.setAttachment();

        const postJobButton = document.getElementById("post-job-btn");
        postJobButton.addEventListener("click", async () => {
            this.collectPostData();
            console.log(this.data);
        });
    }

    job() { }

    apply() {
        this.addMilestone();
        this.removeMilestone();
    }

    applications() { }

    posted() {
        console.log("posted");
    }

    application() {
        console.log("application");
    }

    room() {
        console.log("room");
    }

    dashboard() {
        this.triggerProjects();
    }

    generateUniqueId() {
        const timestamp = new Date().getTime();
        return timestamp;
    }

    addMilestone() {
        const milestones = document.querySelector("#milestones");
        const addMilestoneButton = document.querySelector("#add-milestone");
        let generate = new Generate();
        addMilestoneButton.addEventListener("click", async () => {
            let milestone = await generate.generateElement("/assets/js/views/job/apply/milestone.php");
            let id = this.generateUniqueId();
            milestone.setAttribute("data-milestone", id)
            milestone.querySelector("[data-milestone-remove]").setAttribute("data-milestone-remove", id);
            milestone.querySelector("[data-select-trigger]").setAttribute("data-select-trigger", id);
            milestone.querySelector("[data-select-selected]").setAttribute("data-select-selected", id);
            milestone.querySelector("[data-select]").setAttribute("data-select", id);
            milestone.querySelectorAll("[data-select-option]").forEach(option => {
                option.setAttribute("data-select-option", id);
            });
            milestone.querySelector("label").setAttribute("for", id);
            milestone.querySelector("label").querySelector("input").setAttribute("id", id);
            milestones.appendChild(milestone);
        });
    }

    removeMilestone() {
        document.addEventListener("click", (event) => {
            if (event.target.matches("[data-milestone-remove]")) {
                let id = event.target.getAttribute("data-milestone-remove");
                let milestone = document.querySelector(`[data-milestone="${id}"]`);
                milestone.remove();
            }
        })
    }

    expandProject(content) {
        content.classList.remove("invisible");
        content.classList.remove("max-h-0");
        content.classList.add("max-h-[2500px]");
        content.setAttribute("data-show", "true");
    }

    collapseProject(content) {
        content.classList.remove("max-h-[2500px]");
        content.classList.add("max-h-0");
        content.classList.add("invisible");
        content.setAttribute("data-show", "false");
    }

    toggleProject(content) {
        let state = content.getAttribute("data-show");
        if (state == "true") {
            this.collapseProject(content);
        } else {
            this.expandProject(content);
        }
    }

    triggerProjects() {
        const projectTriggers = document.querySelectorAll("[data-project-expand-trigger]");

        projectTriggers.forEach(trigger => {
            if (trigger != null) {
                document.addEventListener("click", (event) => {
                    if (trigger.contains(event.target)) {
                        let id = trigger.getAttribute("data-project-expand-trigger");
                        let projectElements = document.querySelectorAll(`[data-project-element="${id}"]`);
                        projectElements.forEach(element => {
                            element.addEventListener("click", (event) => {
                                event.stopPropagation();
                            });
                        });
                        let content = document.querySelector(`[data-project-expand-content="${id}"]`);
                        this.toggleProject(content);
                    }
                });
            }
        });
    }

    manageSubCategories() {
        const categoryTrigger = document.querySelector("[data-select-trigger='category']");
        const categoryOptions = document.querySelectorAll("[data-select-option='category']");
        categoryOptions.forEach(option => {
            option.addEventListener("click", async () => {
                await new Promise((resolve) => setTimeout(resolve, 10));
                this.jobModel.addValue("category", categoryTrigger.getAttribute("data-select-value"));
                let subCategories = await this.jobModel.loadSubCategories();
                let response = JSON.parse(subCategories);
                const subCategoryContainer = document.querySelector("[data-select='sub-category']");
                subCategoryContainer.innerHTML = "";
                response.forEach(subCategory => {
                    this.generateSubCategories(subCategoryContainer, subCategory.id, subCategory["sub_category"]);
                })
            });
        })
    }

    async generateSubCategories(subCategoryContainer, subCategoryId, subCategoryName) {
        const generate = new Generate();
        // let id = this.generateUniqueId();
        let subCategory = await generate.generateElement("/assets/js/views/job/post/sub-category.php");
        subCategory.setAttribute("data-select-option", "sub-category");
        subCategory.setAttribute("data-select-value", subCategoryId);
        subCategory.textContent = subCategoryName;
        subCategoryContainer.appendChild(subCategory);
    }

    manageSkills() {
        const subCategoryTrigger = document.querySelector("[data-select-trigger='sub-category']");
        document.addEventListener("click", async (event) => {
            if (event.target.matches('[data-select-option="sub-category"]')) {
                let option = event.target;
                await new Promise((resolve) => setTimeout(resolve, 10));
                this.jobModel.addValue("sub_category", subCategoryTrigger.getAttribute("data-select-value"));
                let subCategories = await this.jobModel.loadSkills();
                let response = JSON.parse(subCategories);
                const skillsContainer = document.querySelector('[data-dropdown-menu="skills"]');
                skillsContainer.innerHTML = "";
                response.forEach(skill => {
                    this.generateSkills(skillsContainer, skill.id, skill["skill"]);
                });
            }
        });
    }

    async generateSkills(skillsContainer, skillId, skillName) {
        const generate = new Generate();
        let id = this.generateUniqueId();
        let skill = await generate.generateElement("/assets/js/views/job/post/skill.php");
        skill.setAttribute("data-trigger-checkbox", id);
        skill.setAttribute("for", id);
        skill.querySelector("[data-input-checkbox]").setAttribute("id", id);
        skill.querySelector("[data-input-checkbox]").setAttribute("data-input-checkbox", id);
        skill.querySelector("[data-input-checkbox]").setAttribute("value", skillId);
        skill.querySelector("[data-custom-checkbox]").setAttribute("data-custom-checkbox", id);
        skill.querySelector("[data-checkbox-content]").textContent = skillName;
        skillsContainer.appendChild(skill);
    }

    setAttachment() {
        const attachments = document.getElementById("attachments");
        const attachmentsContainer = document.getElementById("attachments-container");
        let generate = new Generate();

        attachments.addEventListener("change", (event) => {
            console.log(event.target.files);
            let files = Array.from(event.target.files);
            files.forEach(async (file) => {
                let id = this.generateUniqueId();
                this.data.attachment.push({
                    "id": id,
                    "file": file
                });
                let attachment = await generate.generateElement("/assets/js/views/job/post/attachment.php");
                attachment.setAttribute("data-attachment", id);
                attachment.querySelector("[data-attachment-remove]").setAttribute("id", id);
                attachmentsContainer.appendChild(attachment);
                attachment.querySelector("[data-attachment-remove]").addEventListener("click", (event) => {
                    this.removeAttachment(id);
                });
            })
        });
    }

    removeAttachment(id) {
        this.data.attachment = this.data.attachment.filter((attachment) => attachment.id != id);
        document.querySelector(`[data-attachment="${id}"]`).remove();
    }

    collectPostData() {
        const title = document.getElementById("title");
        const category = document.getElementById("category");
        const subCategory = document.getElementById("sub-category");
        const experience = document.getElementById("experience");
        const number_of_freelancers = document.getElementById("freelancers");
        const payment_type = document.getElementById("payment-type");
        const budget = document.getElementById("budget");
        const description = document.getElementById("description");
        const skills = document.querySelector('[data-dropdown-menu="skills"]');
        const languages = document.querySelector('[data-dropdown-menu="language"]');


        function getSkills() {
            let skillIds = [];
            let skillChecks = skills.querySelectorAll("[data-input-checkbox]");
            skillChecks.forEach(check => {
                if (check.checked) {
                    skillIds.push(check.value);
                }
            });
            return skillIds;
        }

        function getLanguages() {
            let languageIds = [];
            let languageChecks = languages.querySelectorAll("[data-input-checkbox]");
            languageChecks.forEach(check => {
                if (check.checked) {
                    languageIds.push(check.value);
                }
            });
            return languageIds;
        }

        this.data.title = title.value;
        this.data.description = description.value;
        this.data.category = category.getAttribute("data-select-value");
        this.data.sub_category = subCategory.getAttribute("data-select-value");
        this.data.skills = getSkills();
        this.data.experience = experience.getAttribute("data-select-value");
        this.data.language = getLanguages();
        this.data.number_of_freelancers = number_of_freelancers.getAttribute("data-select-value");
        this.data.payment_type = payment_type.getAttribute("data-select-value");
        this.data.budget = budget.value;
    }
}

export default JobController;