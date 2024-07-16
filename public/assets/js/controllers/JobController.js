import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Confirm from "../helpers/Confirm.js";
import Dropdown from "../helpers/Dropdown.js";
import TriggerEnter from "../helpers/TriggerEnter.js";
import Select from "../helpers/Select.js";
import Generate from "../helpers/Generate.js";

class JobController extends Controller {
    constructor() {
        super();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        let dropdown = new Dropdown();
        dropdown.triggerDropdowns();
        let triggerEnter = new TriggerEnter();
        triggerEnter.triggerInputEnter();
        this.confirmation = new Confirm();
        let select = new Select();
        select.triggerDropdowns();
    }

    post() { }

    job() { }

    apply() {
        this.addMilestone();
        this.removeMilestone();
    }

    applications() { }

    posted() {
        console.log("posted");
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
}

export default JobController;