class Alert {

    constructor() { }

    createAlert(content) {
        const id = Date.now();
        const alert = document.createElement('div');
        alert.classList.add("w-max", "max-w-[98%]", "fixed", "top-0", "left-1/2", "-translate-x-1/2", "z-[999]", "bg-[var(--bg-white-low)]", "box-border", "py-3", "border", "border-[var(--main-font-color-20)]", "flex", "justify-center", "items-center", "-translate-y-8", "ease-linear", "duration-75");
        alert.id = id;

        const paragraph = document.createElement('p');
        paragraph.classList.add("text-[var(--main-font-color-90)]", "font-normal", "text-base", "text-left", "pl-5");
        paragraph.textContent = content;

        const button = document.createElement('button');
        button.classList.add("h-full", "w-max", "text-[var(--main-font-color-30)]", "flex", "justify-center", "items-center", "px-5", "hover:text-[var(--active-color-brown)]", "ease-linear", "duration-75");
        button.setAttribute("data-alert", id);
        button.addEventListener("click", () => {
            this.removeAlert(alert);
        })

        const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
        svg.setAttribute("width", "1em");
        svg.setAttribute("height", "1em");
        svg.setAttribute("viewBox", "0 0 24 24");
        svg.classList = "w-5", "h-auto";

        const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
        path.setAttribute("fill", "currentColor");
        path.setAttribute("d", "M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z");

        svg.appendChild(path);

        button.appendChild(svg);

        alert.appendChild(paragraph);
        alert.appendChild(button);

        return alert;
    }

    async appendAlert(alert) {
        document.body.appendChild(alert);
        await new Promise((resolve) => setTimeout(resolve, 10));
        alert.classList.remove("opacity-0");
        await new Promise((resolve) => setTimeout(resolve, 10));
        alert.classList.remove("-translate-y-8");
    }

    async removeAlert(alert, callback) {
        alert.classList.add("-translate-y-8");
        await new Promise((resolve) => setTimeout(resolve, 20));
        alert.classList.add("opacity-0");
        await new Promise((resolve) => setTimeout(resolve, 10));
        alert.addEventListener(
            "transitionend",
            function () {
                document.body.removeChild(alert);
                if (localStorage.getItem("alert") != null) {
                    localStorage.removeItem("alert");
                }
                if (callback && typeof callback === "function") {
                    callback();
                }
            },
            { once: true }
        );
    }

    async alert(content, delay = 3000, callback = null) {
        let alert = this.createAlert(content);
        this.appendAlert(alert);
        await new Promise((resolve) => setTimeout(resolve, delay));
        this.removeAlert(alert, callback);
    }
}

export default Alert;