class Spinner {
    constructor() { }

    createSpinner() {
        var spinner = document.createElement('div');
        spinner.className = 'spinner';

        var skFoldingCube = document.createElement('div');
        skFoldingCube.className = 'sk-folding-cube';

        var skCube1 = document.createElement('div');
        skCube1.className = 'sk-cube1 sk-cube';

        var skCube2 = document.createElement('div');
        skCube2.className = 'sk-cube2 sk-cube';

        var skCube4 = document.createElement('div');
        skCube4.className = 'sk-cube4 sk-cube';

        var skCube3 = document.createElement('div');
        skCube3.className = 'sk-cube3 sk-cube';

        skFoldingCube.appendChild(skCube1);
        skFoldingCube.appendChild(skCube2);
        skFoldingCube.appendChild(skCube4);
        skFoldingCube.appendChild(skCube3);

        spinner.appendChild(skFoldingCube);
        return spinner;
    }

    createPageLoadSpinner() {
        let id = Date.now();
        let loadSpinner = document.createElement("div");
        loadSpinner.classList.add("fixed", "w-screen", "h-screen", "top-0", "left-0", "z-[999]", "bg-[var(--main-bg-yellow)]", "flex", "justify-center", "items-center");
        loadSpinner.id = id;
        loadSpinner.appendChild(this.createSpinner());

        return loadSpinner;
    }

    createProcessLoadSpinner() {
        let loadSpinner = document.createElement("div");
        loadSpinner.classList.add("fixed", "w-screen", "h-screen", "top-0", "left-0", "z-[999]", "bg-[var(--main-bg-yellow-low)]", "flex", "justify-center", "items-center");
        loadSpinner.id = "process-load-spinner";
        loadSpinner.appendChild(this.createSpinner());

        return loadSpinner;
    }

    apppendPageLoadSpinner(spinner) {
        const body = document.querySelector("body");
        body.style.overflow = "hidden";
        body.appendChild(spinner);
    }

    async removePageLoadSpinner(spinner, callback) {
        const body = document.querySelector("body");
        body.removeChild(spinner);
        body.style.overflow = "auto";
        await new Promise((resolve) => setTimeout(resolve, 10));
        if (callback && typeof callback === "function") {
            callback();
        }
    }

    async pageLoadSpinner(delay, callback = null) {
        let spinner = this.createPageLoadSpinner();
        this.apppendPageLoadSpinner(spinner);
        document.addEventListener("DOMContentLoaded", async () => {
            await new Promise((resolve) => setTimeout(resolve, delay));
            this.removePageLoadSpinner(spinner, callback);
        });
    }

    appendProcessLoadSpinner() {
        const body = document.querySelector("body");
        body.style.overflow = "hidden";
        body.appendChild(this.createProcessLoadSpinner());
    }

    async removeProcessLoadSpinner(delay, callback = null) {
        await new Promise((resolve) => setTimeout(resolve, delay));
        const spinner = document.getElementById("process-load-spinner");
        const body = document.querySelector("body");
        body.removeChild(spinner);
        body.style.overflow = "auto";
        if (callback && typeof callback === "function") {
            callback();
        }
    }
}

export default Spinner;