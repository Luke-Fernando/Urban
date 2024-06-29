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

    #createConfirmModel(id, noticeContent, trueButtonContent, falseButtonContent) {
        const confirmModel = document.createElement('section');
        confirmModel.setAttribute('data-confirm', id);
        confirmModel.classList.add('fixed', 'w-screen', 'h-screen', 'top-0', 'left-0', 'bg-[var(--main-font-color-20)]', 'z-[9999]', 'flex', 'justify-center', 'items-center');

        const mainDiv = document.createElement('div');
        mainDiv.setAttribute('data-confirm-model', id);
        mainDiv.classList.add('w-[90%]', 'max-w-[300px]', 'h-auto', 'bg-[var(--bg-white-low)]', 'flex', 'flex-col', 'justify-center', 'items-center', 'p-5', 'box-border', 'border', 'border-[var(--main-font-color-20)]', 'relative');

        const buttonContainer = document.createElement('div');
        buttonContainer.classList.add('absolute', 'w-full', 'h-auto', 'top-0', 'left-0', 'flex', 'justify-end', 'items-center');

        const closeButton = document.createElement('button');
        closeButton.setAttribute('data-confirm-close', id);
        closeButton.classList.add('w-max', 'aspect-square', 'flex', 'justify-center', 'items-center', 'text-[var(--main-font-color-20)]', 'hover:text-[var(--main-font-color-80)]', 'duration-75', 'ease-linear', 'p-2');

        const closeSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        closeSvg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        closeSvg.setAttribute('width', '1em');
        closeSvg.setAttribute('height', '1em');
        closeSvg.setAttribute('viewBox', '0 0 24 24');
        closeSvg.classList.add('w-6', 'h-auto');

        const closePath = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        closePath.setAttribute('fill', 'currentColor');
        closePath.setAttribute('d', 'M19 6.41L17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12z');

        closeSvg.appendChild(closePath);
        closeButton.appendChild(closeSvg);
        buttonContainer.appendChild(closeButton);
        mainDiv.appendChild(buttonContainer);

        const noticeParagraph = document.createElement('p');
        noticeParagraph.setAttribute('data-confirm-notice', id);
        noticeParagraph.classList.add('text-sm', 'font-medium', 'text-[var(--main-font-color-80)]', 'text-center', 'pt-6');
        noticeParagraph.textContent = noticeContent;
        mainDiv.appendChild(noticeParagraph);

        const actionButtonsContainer = document.createElement('div');
        actionButtonsContainer.classList.add('w-full', 'h-auto', 'flex', 'justify-center', 'items-center', 'flex-wrap', 'mt-3');

        const falseButton = document.createElement('button');
        falseButton.setAttribute('data-confirm-false', id);
        falseButton.classList.add('w-max', 'h-[40px]', 'px-3', 'py-2', 'border', 'border-[var(--main-font-color-20)]', 'text-sm', 'font-normal', 'text-[var(--bg-white-low)]', 'mx-2', 'my-2', 'bg-[var(--main-font-color-30)]', 'hover:bg-[var(--main-font-color-80)]', 'active:scale-95', 'duration-75', 'ease-linear');
        falseButton.textContent = falseButtonContent;
        actionButtonsContainer.appendChild(falseButton);

        const trueButton = document.createElement('button');
        trueButton.setAttribute('data-confirm-true', id);
        trueButton.classList.add('w-max', 'h-[40px]', 'px-3', 'py-2', 'border', 'border-[var(--main-font-color-20)]', 'text-sm', 'font-normal', 'text-[var(--bg-white-low)]', 'mx-2', 'my-2', 'bg-[var(--active-color-brown-low)]', 'hover:bg-[var(--active-color-brown)]', 'active:scale-95', 'duration-75', 'ease-linear');
        trueButton.textContent = trueButtonContent;
        actionButtonsContainer.appendChild(trueButton);

        mainDiv.appendChild(actionButtonsContainer);
        confirmModel.appendChild(mainDiv);
        return confirmModel;
    }

    async #appendConfirmModal(noticeContent, trueButtonContent, falseButtonContent) {
        document.body.style.overflow = "hidden";
        this.#id = this.#generateUniqueId();
        this.#confirmModel = this.#createConfirmModel(this.#id, noticeContent, trueButtonContent, falseButtonContent);
        await new Promise((resolve) => {
            setTimeout(() => {
                resolve();
            }, 10);
        });
        document.body.appendChild(this.#confirmModel);
    }

    #removeConfirmModal() {
        this.#confirmModel.remove();
    }

    #distpatchChoice(choice) {
        let confirmation = new CustomEvent("confirmation", {
            detail: {
                selected: choice
            }
        });
        document.dispatchEvent(confirmation);
    }

    askForConfirmation(noticeContent = "Are you sure?", trueButtonContent = "Yes", falseButtonContent = "No") {
        this.#appendConfirmModal(noticeContent, trueButtonContent, falseButtonContent);

        document.addEventListener("click", (event) => {
            if (event.target.matches(`[data-confirm-true="${this.#id}"]`)) {
                this.#distpatchChoice(true);
                this.#removeConfirmModal();
            } else if (event.target.matches(`[data-confirm-false="${this.#id}"]`)) {
                this.#distpatchChoice(false);
                this.#removeConfirmModal();
            } else if (event.target.matches(`[data-confirm-close="${this.#id}"]`)) {
                this.#distpatchChoice(false);
                this.#removeConfirmModal();
            }
            if (!(event.target.matches(`[data-confirm-model="${this.#id}"]`)) && event.target.matches(`[data-confirm="${this.#id}"]`)) {
                this.#distpatchChoice(false);
                this.#removeConfirmModal();
            }
        });
    }
}

export default Confirm;