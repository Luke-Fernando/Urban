class TriggerEnter {
    constructor() { }

    triggerInputEnter() {
        const inputs = document.querySelectorAll("[data-enter-trigger-input]");

        inputs.forEach(input => {
            let inputId = input.getAttribute("data-enter-trigger-input");
            let enter = document.querySelector(`[data-enter-trigger-input-enter="${inputId}"]`);
            let enterToTrigger = (event) => {
                if (event.key === "Enter") {
                    enter.click();
                }
            }
            input.addEventListener("focus", () => {
                document.addEventListener("keydown", enterToTrigger);
            });
            input.addEventListener("focusout", () => {
                document.removeEventListener("keydown", enterToTrigger);
            });
        })
    }
}

export default TriggerEnter;