import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Dropdown from "../helpers/Dropdown.js";

class HomeController extends Controller {

    constructor() {
        super();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        let dropdown = new Dropdown();
        dropdown.triggerDropdowns();
        this.triggerFilter();
    }

    home() {
        console.log("Hello Home");
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
}

export default HomeController;