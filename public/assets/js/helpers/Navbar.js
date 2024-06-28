class Navbar {

    constructor() { }

    hoverShowDropdown(dropdown) {
        dropdown.classList.remove('md:invisible');
        dropdown.classList.add('md:visible');
        dropdown.classList.remove('md:max-h-0');
        dropdown.classList.add('md:max-h-[1500px]');
        dropdown.setAttribute('data-show', 'true');

        // this.hideAllDropdowns(dropdown);
    }

    hoverHideDropdown(dropdown) {
        dropdown.classList.remove('md:visible');
        dropdown.classList.add('md:invisible');
        dropdown.classList.remove('md:max-h-[1500px]');
        dropdown.classList.add('md:max-h-0');
        dropdown.setAttribute('data-show', 'false');
    }

    clickShowDropdown(dropdown) {
        dropdown.classList.remove('invisible');
        dropdown.classList.add('visible');
        dropdown.classList.remove('max-h-0');
        dropdown.classList.add('max-h-[1500px]');
        dropdown.setAttribute('data-show', 'true');

        // this.hideAllDropdowns(dropdown);
    }

    clickHideDropdown(dropdown) {
        dropdown.classList.remove('visible');
        dropdown.classList.add('invisible');
        dropdown.classList.remove('max-h-[1500px]');
        dropdown.classList.add('max-h-0');
        dropdown.setAttribute('data-show', 'false');
    }

    hideAllDropdowns(currentDropdown) {
        let dropdowns = document.querySelectorAll('[data-nav-dropdown-menu]');
        dropdowns.forEach(dropdown => {
            if (dropdown != currentDropdown) {
                let indieStat = dropdown.getAttribute('data-indie');
                if (indieStat == 'false') {
                    this.clickHideDropdown(dropdown);
                }
            }
        });
    }

    // toggleHoverDropdown(trigger, dropdown) {
    //     trigger.addEventListener('mouseover', () => {
    //         this.hoverShowDropdown(dropdown);
    //     });

    //     trigger.addEventListener('mouseout', () => {
    //         this.hoverHideDropdown(dropdown);
    //     });
    // }

    toggleClickDropdown(trigger, dropdown) {
        trigger.addEventListener('click', () => {
            let dropdownStat = dropdown.getAttribute('data-show');
            if (dropdownStat == 'true') {
                this.clickHideDropdown(dropdown);
            } else if (dropdownStat == 'false') {
                this.clickShowDropdown(dropdown);
            }
        });
    }

    triggerDropdowns() {
        const dropdownTriggers = document.querySelectorAll("[data-nav-dropdown-trigger]");

        dropdownTriggers.forEach(trigger => {
            if (trigger != null) {
                let dropdownId = trigger.getAttribute("data-nav-dropdown-trigger");
                let dropdown = document.querySelector(`[data-nav-dropdown-menu="${dropdownId}"]`);
                this.toggleClickDropdown(trigger, dropdown);
                document.addEventListener("click", (event) => {
                    if (!dropdown.contains(event.target) && !trigger.contains(event.target)) {
                        this.clickHideDropdown(dropdown);
                    }
                });
            }
        });
    }

}

export default Navbar;