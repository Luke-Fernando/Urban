import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Confirm from "../helpers/Confirm.js";
import Dropdown from "../helpers/Dropdown.js";
import TriggerEnter from "../helpers/TriggerEnter.js";

class MessageController extends Controller {
    constructor() {
        super();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        let dropdown = new Dropdown();
        dropdown.triggerDropdowns();
        let triggerEnter = new TriggerEnter();
        triggerEnter.triggerInputEnter();
        this.confirmation = new Confirm();
    }

    message() {
        this.triggerMessageDropdowns();
        this.triggerMessageOptionsDropdowns();
        this.deleteMessage();
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
                this.hideMessageDropdown(dropdown);
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
    //
    showMessageOptionsDropdown(dropdown) {
        dropdown.classList.remove('invisible');
        dropdown.classList.remove('max-w-0');
        dropdown.classList.add('max-w-[1500px]');
        dropdown.setAttribute('data-show', 'true');
        this.hideAllMessageOptionsDropdowns(dropdown);
    }

    hideMessageOptionsDropdown(dropdown) {
        dropdown.classList.add('invisible');
        dropdown.classList.remove('max-w-[1500px]');
        dropdown.classList.add('max-w-0');
        dropdown.setAttribute('data-show', 'false');
    }

    hideAllMessageOptionsDropdowns(currentDropdown) {
        let dropdowns = document.querySelectorAll('[data-message-option-dropdown]');
        dropdowns.forEach(dropdown => {
            if (dropdown != currentDropdown) {
                this.hideMessageOptionsDropdown(dropdown);
            }
        });
    }

    triggerMessageOptionsDropdowns() {
        const messageDropdownsTriggers = document.querySelectorAll("[data-message-option-trigger]");

        messageDropdownsTriggers.forEach(trigger => {
            if (trigger != null) {
                let dropdownId = trigger.getAttribute("data-message-option-trigger");
                let dropdown = document.querySelector(`[data-message-option-dropdown="${dropdownId}"]`);
                trigger.addEventListener("click", () => {
                    let dropdownStat = dropdown.getAttribute('data-show');
                    if (dropdownStat == 'true') {
                        this.hideMessageOptionsDropdown(dropdown);
                    } else if (dropdownStat == 'false') {
                        this.showMessageOptionsDropdown(dropdown);
                    }
                    document.addEventListener("click", (event) => {
                        if (!(dropdown.contains(event.target)) && !(trigger.contains(event.target))) {
                            this.hideMessageOptionsDropdown(dropdown);
                        }
                    });
                });
            }
        })
    }

    deleteMessage() {
        let deleteMessageButtons = document.querySelectorAll("[data-delete-message]");

        deleteMessageButtons.forEach(button => {
            button.addEventListener("click", () => {
                this.confirmation.askForConfirmation({
                    "path": "/assets/js/views/message/confirm.php",
                    "message": "Are you sure you want to delete this message?",
                    "true": {
                        "textContent": "Delete",
                        "message": "delete message"
                    },
                    "false": {
                        "textContent": "Cancel",
                        "message": "cancel message delete"
                    }
                });
            })
        });

        document.addEventListener("confirmation", (event) => {
            console.log(event.detail.selected);
        })
    }
}

export default MessageController;