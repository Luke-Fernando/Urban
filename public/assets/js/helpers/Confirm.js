import Generate from "./Generate.js";

class Confirm {

    #id;
    #confirmModel;

    constructor() {
        this.#id;
        this.#confirmModel;
    }

    #generateUniqueId() {
        const timestamp = new Date().getTime();
        return timestamp;
    }

    async #createConfirmModel(data) {
        let generate = new Generate();
        let confirmModel = await generate.generateElement(data.path);
        confirmModel.setAttribute('data-confirm', data.id);

        confirmModel.querySelector("[data-confirm-model]").setAttribute('data-confirm-model', data.id);
        confirmModel.querySelector("[data-confirm-close]").setAttribute('data-confirm-close', data.id);
        confirmModel.querySelector("[data-confirm-notice]").setAttribute('data-confirm-notice', data.id);
        confirmModel.querySelector("[data-confirm-notice]").textContent = data.message;
        confirmModel.querySelector("[data-confirm-false]").setAttribute('data-confirm-false', data.id);
        confirmModel.querySelector("[data-confirm-false]").textContent = data.false.textContent;
        confirmModel.querySelector("[data-confirm-true]").setAttribute('data-confirm-true', data.id);
        confirmModel.querySelector("[data-confirm-true]").textContent = data.true.textContent;
        return confirmModel;
    }

    async #appendConfirmModal(data) {
        document.body.style.overflow = "hidden";
        this.#id = this.#generateUniqueId();
        data.id = this.#id;
        this.#confirmModel = await this.#createConfirmModel(data);
        await new Promise((resolve) => {
            setTimeout(() => {
                resolve();
            }, 10);
        });
        document.body.appendChild(this.#confirmModel);
    }

    #removeConfirmModal() {
        this.#confirmModel.remove();
        document.body.style.overflow = "auto";
    }

    #distpatchChoice(choice) {
        let confirmation = new CustomEvent("confirmation", {
            detail: {
                selected: choice
            }
        });
        document.dispatchEvent(confirmation);
    }

    askForConfirmation(data) {
        this.#appendConfirmModal(data);

        document.addEventListener("click", (event) => {
            if (event.target.matches(`[data-confirm-true="${this.#id}"]`)) {
                this.#distpatchChoice(data.true.message);
                this.#removeConfirmModal();
            } else if (event.target.matches(`[data-confirm-false="${this.#id}"]`)) {
                this.#distpatchChoice(data.false.message);
                this.#removeConfirmModal();
            } else if (event.target.matches(`[data-confirm-close="${this.#id}"]`)) {
                this.#distpatchChoice(data.false.message);
                this.#removeConfirmModal();
            }
            if (!(event.target.matches(`[data-confirm-model="${this.#id}"]`)) && event.target.matches(`[data-confirm="${this.#id}"]`)) {
                this.#distpatchChoice(data.false.message);
                this.#removeConfirmModal();
            }
        });
    }
}

export default Confirm;