import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Dropdown from "../helpers/Dropdown.js";

class MessageController extends Controller {
    constructor() {
        super();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        let dropdown = new Dropdown();
        dropdown.triggerDropdowns();
    }

    message() {
        this.triggerMessageDropdowns();
    }

    showMessageDropdown(dropdown) {
        dropdown.classList.remove('invisible');
        dropdown.classList.remove('max-h-0');
        dropdown.classList.add('max-h-[1500px]');
        dropdown.setAttribute('data-show', 'true');
        this.hideAllDropdowns(dropdown);
    }

    hideMessageDropdown(dropdown) {
        dropdown.classList.add('invisible');
        dropdown.classList.remove('max-h-[1500px]');
        dropdown.classList.add('max-h-0');
        dropdown.setAttribute('data-show', 'false');
    }

    hideAllDropdowns(currentDropdown) {
        let dropdowns = document.querySelectorAll('[data-message-dropdown]');
        dropdowns.forEach(dropdown => {
            if (dropdown != currentDropdown) {
                this.clickHideDropdown(dropdown);
            }
        });
    }

    triggerMessageDropdowns() {
        const messageDropdownsTriggers = document.querySelectorAll("[data-message-dropdown-trigger]");

        messageDropdownsTriggers.forEach(trigger => {
            if (trigger != null) {
                let dropdownId = trigger.getAttribute("data-message-dropdown-trigger");
                let dropdown = document.querySelector(`[data-message-dropdown="${dropdownId}"]`);
                trigger.addEventListener("click", () => {
                    let dropdownStat = dropdown.getAttribute('data-show');
                    if (dropdownStat == 'true') {
                        this.hideMessageDropdown(dropdown);
                    } else if (dropdownStat == 'false') {
                        this.showMessageDropdown(dropdown);
                    }
                    document.addEventListener("click", (event) => {
                        if (!(dropdown.contains(event.target)) && !(trigger.contains(event.target))) {
                            this.hideMessageDropdown(dropdown);
                        }
                    });
                });
            }
        })
    }
}

export default MessageController;