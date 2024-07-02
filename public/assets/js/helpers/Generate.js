import Model from "../core/Model.js"

class Generate {

    #model;

    constructor() {
        this.#model = new Model();
    }

    #getElement(path) {
        let content = this.#model.post(path);
        return content;
    }

    async generateElement(path) {
        const template = document.createElement('template');
        let element = await this.#getElement(path);
        template.innerHTML = element.trim();
        return template.content.firstElementChild;
    }
}

export default Generate;