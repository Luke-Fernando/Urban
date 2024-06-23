class Checkbox {
    constructor() { }

    toggleCheckbox() {
        const checkboxeTriggers = document.querySelectorAll("[data-trigger-checkbox]");

        checkboxeTriggers.forEach(trigger => {
            if (trigger != null) {
                trigger.addEventListener("click", () => {
                    let checkboxId = trigger.getAttribute("data-trigger-checkbox");
                    let checkbox = document.querySelector(`[data-input-checkbox="${checkboxId}"]`);
                    let customCheckbox = document.querySelector(`[data-custom-checkbox="${checkboxId}"]`);
                    let isChecked = checkbox.checked;
                    if (isChecked) {
                        customCheckbox.classList.remove("hidden");
                        customCheckbox.classList.add("flex");
                    } else {
                        customCheckbox.classList.add("hidden");
                        customCheckbox.classList.remove("flex");
                    }
                });
            }
        })
    }
}

export default Checkbox;