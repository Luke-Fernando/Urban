class Dropdown {
    toggleShow(toggler, menu) {
        toggler.classList.add("border-[var(--active-color-brown)]");
        toggler.classList.remove("border-[var(--main-font-color-20)]");
        menu.setAttribute("data-show", true);
        menu.classList.add("ease-linear");
        menu.classList.add("duration-75");
        menu.classList.remove("invisible");
        menu.classList.add("visible");
        menu.classList.add("max-h-[150px]");
        menu.classList.remove("max-h-0");
    }

    toggleHide(toggler, menu) {
        toggler.classList.add("border-[var(--main-font-color-20)]");
        toggler.classList.remove("border-[var(--active-color-brown)]");
        menu.setAttribute("data-show", false);
        menu.classList.remove("ease-linear");
        menu.classList.remove("duration-75");
        menu.classList.add("invisible");
        menu.classList.remove("visible");
        menu.classList.remove("max-h-[150px]");
        menu.classList.add("max-h-0");
    }

    toggleMenu(toggler, menu) {
        let menuStat = menu.getAttribute("data-show");
        if (menuStat == "true") {
            this.toggleHide(toggler, menu);
        } else {
            this.toggleShow(toggler, menu);
        }
    }

    triggerDropdowns() {
        const dropdownTogglers = document.querySelectorAll("[data-dropdown-toggler]");

        dropdownTogglers.forEach(toggler => {
            if (toggler != null) {
                let togglerAttr = toggler.getAttribute("data-dropdown-toggler");
                let menu = document.querySelector(`[data-dropdown-menu="${togglerAttr}"]`);
                toggler.addEventListener("click", () => {
                    if (menu != null) {
                        this.toggleMenu(toggler, menu);
                    }
                });
                document.addEventListener("click", (event) => {
                    if (menu != null) {
                        if (!(menu.contains(event.target)) && !(toggler.contains(event.target))) {
                            this.toggleHide(toggler, menu);
                        }
                    }
                })
            }
        })
    }
}

export default Dropdown;