class Select {
    #toggleShow(menu) {
        menu.classList.remove("invisible");
        menu.classList.remove("max-h-0");
        menu.classList.add("max-h-[1500px]");
        menu.setAttribute("data-show", true);
    }

    #toggleHide(menu) {
        menu.classList.add("invisible");
        menu.classList.add("max-h-0");
        menu.classList.remove("max-h-[1500px]");
        menu.setAttribute("data-show", false);
    }

    #toggleMenu(menu) {
        let menuStat = menu.getAttribute("data-show");
        if (menuStat == "true") {
            this.#toggleHide(menu);
        } else {
            this.#toggleShow(menu);
        }
    }

    triggerDropdowns() {

        document.addEventListener("click", (event) => {
            if (event.target.matches("[data-select-trigger]")) {
                let trigger = event.target;
                let id = trigger.getAttribute("data-select-trigger");
                let menu = document.querySelector(`[data-select="${id}"]`);
                let selected = document.querySelector(`[data-select-selected="${id}"]`);
                let menuOptions = document.querySelectorAll(`[data-select-option="${id}"]`);
                this.#toggleMenu(menu);
                document.addEventListener("click", (event) => {
                    if (!menu.contains(event.target) && !trigger.contains(event.target)) {
                        this.#toggleHide(menu);
                    }
                });
                menuOptions.forEach(option => {
                    option.addEventListener("click", () => {
                        let value = option.getAttribute("data-select-value");
                        let text = option.textContent;
                        trigger.setAttribute("data-select-value", value);
                        selected.textContent = text;
                        this.#toggleHide(menu);
                    });
                })
            }
        });
    }
}

export default Select;