import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Confirm from "../helpers/Confirm.js";
import Dropdown from "../helpers/Dropdown.js";
import TriggerEnter from "../helpers/TriggerEnter.js";
import Generate from "../helpers/Generate.js";
import Select from "../helpers/Select.js";

class ProjectController extends Controller {
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

    projects() {
        this.triggerProjects();
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

}

export default ProjectController;