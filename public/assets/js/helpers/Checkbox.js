class Checkbox {
    constructor() { }

    toggleCheckbox() {

        document.addEventListener("change", (event) => {
            if (event.target.matches("[data-input-checkbox]")) {
                let checkboxId = event.target.getAttribute("data-input-checkbox");
                let checkbox = event.target;
                let customCheckbox = document.querySelector(`[data-custom-checkbox="${checkboxId}"]`);
                let isChecked = checkbox.checked;
                if (isChecked) {
                    customCheckbox.classList.remove("hidden");
                    customCheckbox.classList.add("flex");
                } else {
                    customCheckbox.classList.add("hidden");
                    customCheckbox.classList.remove("flex");
                }
            }
        });
    }
}

export default Checkbox;