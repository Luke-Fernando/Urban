import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Confirm from "../helpers/Confirm.js";
import Dropdown from "../helpers/Dropdown.js";
import Generate from "../helpers/Generate.js";
import UserModel from "../models/UserModel.js";

class UserController extends Controller {
    constructor() {
        super();
        this.userModel = new UserModel();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        let dropdown = new Dropdown();
        dropdown.triggerDropdowns();
        this.data = {
            "profile_picture": {
                "id": "profile_picture",
                "image": null,
            },
            "first_name": "",
            "last_name": "",
            "languages": [],
            "title": "",
            "description": "",
            "skills": [],
            "portfolio_updated": [
                // {
                //     "images": {
                //         "image_id": "",
                //         "image": null,
                //     },
                //     "title": "",
                //     "link": "",
                // }
            ],
            "portfolio_added": [
                // {
                //     "images": {
                //         "image_id": "",
                //         "image": null,
                //     },
                //     "title": "",
                //     "link": "",
                // }
            ],
            "certification_updated": [
                // {
                //     "title": "",
                //     "date": `2024-06-12`,
                //     "provider": "",
                //     "description": "",
                //     "link": ""
                // }
            ],
            "certification_added": [
                // {
                //     "title": "",
                //     "date": `2024-06-12`,
                //     "provider": "",
                //     "description": "",
                //     "link": ""
                // }
            ],
        }
    }

    profile() {
        this.toggleProfileDetails();
        this.displayEdit();
        this.toggleEditor();
        this.addNewPortfolio();
        this.addNewCertification();
        this.removeCertification();
        this.removePortfolio();
        this.displayUpdateSkills();
        this.displayUpdateLanguages();
        this.getPortfolioImage();
        this.getProfilePicture();
        const updateProfileButton = document.getElementById("update-details");
        updateProfileButton.addEventListener("click", () => {
            this.updateProfile();
        })
    }

    reviews() { }

    generateUniqueId() {
        const timestamp = new Date().getTime();
        const randomNum = Math.floor(Math.random() * 1000000);
        return timestamp + "-" + randomNum;
    }

    toggleProfileDetails() {
        const backDetailsButton = document.getElementById("back-details");
        const profileDetails = document.getElementById("details");
        const edit = document.getElementById("edit");
        const editors = document.querySelectorAll("[data-editor]");
        backDetailsButton.addEventListener("click", () => {
            profileDetails.classList.remove("hidden");
            edit.classList.remove("flex");
            edit.classList.add("hidden");
            editors.forEach(editor => {
                editor.classList.add("hidden");
                editor.classList.remove("flex");
            });
        });
    }

    displayEdit() {
        const editButtons = document.querySelectorAll("[data-edit]");
        const profileDetails = document.getElementById("details");
        const edit = document.getElementById("edit");
        editButtons.forEach(button => {
            button.addEventListener("click", () => {
                let buttonId = button.getAttribute("data-edit");
                let editor = document.querySelector(`[data-editor="${buttonId}"]`);
                profileDetails.classList.add("hidden");
                edit.classList.remove("hidden");
                edit.classList.add("flex");
                editor.classList.remove("hidden");
                editor.classList.add("flex");
            });
        });
    }

    toggleEditor() {
        document.addEventListener("click", (event) => {
            if (event.target.matches("[data-editor-expand-trigger]")) {
                let editorId = event.target.getAttribute("data-editor-expand-trigger");
                let editor = document.querySelector(`[data-editor-expand-content="${editorId}"]`);
                editor.classList.toggle("max-h-0");
                editor.classList.toggle("max-h-[2500px]");
            }
        });
    }

    addNewPortfolio() {
        const addNewPortfolioButton = document.getElementById("add-new-portfolio");
        const portfolioContainer = document.querySelector('[data-editor="portfolio"]');
        addNewPortfolioButton.addEventListener("click", async () => {
            let generate = new Generate();
            let generalId = this.generateUniqueId();
            let imageId = `image-${generalId}`;
            let titleId = `title-${generalId}`;
            let linkId = `link-${generalId}`;
            let newPortfolio = await generate.generateElement("/assets/js/views/user/profile/portfolio-editor.php");
            newPortfolio.querySelector("[data-editor-expand-trigger]").setAttribute("data-editor-expand-trigger", generalId);
            newPortfolio.querySelector("[data-editor-image]").setAttribute("data-editor-image", imageId);
            newPortfolio.setAttribute("data-portfolio", generalId);
            newPortfolio.setAttribute("data-portfolio-add", generalId);
            newPortfolio.querySelector("[data-editor-title-display]").setAttribute("data-editor-title-display", titleId);
            newPortfolio.querySelector("[data-editor-remove-portfolio]").setAttribute("data-editor-remove-portfolio", generalId);
            newPortfolio.querySelector("[data-editor-expand-content]").setAttribute("data-editor-expand-content", generalId);
            newPortfolio.querySelector("[data-editor-image-label]").setAttribute("data-editor-image-label", generalId);
            newPortfolio.querySelector("[data-editor-image-label]").setAttribute("for", imageId);
            newPortfolio.querySelector("[data-editor-image-input]").setAttribute("data-editor-image-input", imageId);
            newPortfolio.querySelector("[data-editor-image-input]").setAttribute("id", imageId);
            newPortfolio.querySelector("[data-editor-title-label]").setAttribute("data-editor-title-label", generalId);
            newPortfolio.querySelector("[data-editor-title-label]").setAttribute("for", titleId);
            newPortfolio.querySelector("[data-editor-title]").setAttribute("data-editor-title", generalId);
            newPortfolio.querySelector("[data-editor-title]").setAttribute("id", titleId);
            newPortfolio.querySelector("[data-editor-link-label]").setAttribute("data-editor-link-label", generalId);
            newPortfolio.querySelector("[data-editor-link-label]").setAttribute("for", linkId);
            newPortfolio.querySelector("[data-editor-link]").setAttribute("data-editor-link", generalId);
            newPortfolio.querySelector("[data-editor-link]").setAttribute("id", linkId);

            portfolioContainer.appendChild(newPortfolio);

        });
    }

    addNewCertification() {
        const addNewCertificationButton = document.getElementById("add-new-certification");
        const certificationContainer = document.querySelector('[data-editor="certifications"]');
        addNewCertificationButton.addEventListener("click", async () => {
            let generate = new Generate();
            let generalId = this.generateUniqueId();
            let titleId = `title-${generalId}`;
            let linkId = `link-${generalId}`;
            let yearId = `year-${generalId}`;
            let monthId = `month-${generalId}`;
            let dayId = `day-${generalId}`;
            let providerId = `provider-${generalId}`;
            let descriptionId = `description-${generalId}`;
            let newCertification = await generate.generateElement("/assets/js/views/user/profile/certifications-editor.php");
            newCertification.setAttribute("data-certification-new", generalId);
            newCertification.setAttribute("data-certification", generalId);
            newCertification.querySelector("[data-editor-expand-trigger]").setAttribute("data-editor-expand-trigger", generalId);
            newCertification.querySelector("[data-editor-title-display]").setAttribute("data-editor-title-display", titleId);
            newCertification.querySelector("[data-editor-remove-certification]").setAttribute("data-editor-remove-certification", generalId);
            // newCertification.querySelector(`[data-editor-remove-button="${generalId}"]`).addEventListener("click", () => {
            //     this.removeElement(newCertification, "certification", generalId);
            // })
            newCertification.querySelector("[data-editor-expand-content]").setAttribute("data-editor-expand-content", generalId);
            newCertification.querySelector("[data-editor-title-label]").setAttribute("data-editor-title-label", generalId);
            newCertification.querySelector("[data-editor-title-label]").setAttribute("for", titleId);
            newCertification.querySelector("[data-editor-title]").setAttribute("data-editor-title", generalId);
            newCertification.querySelector("[data-editor-title]").setAttribute("id", titleId);
            newCertification.querySelector("[data-editor-year-label]").setAttribute("data-editor-year-label", generalId);
            newCertification.querySelector("[data-editor-year-label]").setAttribute("for", yearId);
            newCertification.querySelector("[data-editor-year]").setAttribute("data-editor-year", generalId);
            newCertification.querySelector("[data-editor-year]").setAttribute("id", yearId);
            newCertification.querySelector("[data-editor-month-label]").setAttribute("data-editor-month-label", generalId);
            newCertification.querySelector("[data-editor-month-label]").setAttribute("for", monthId);
            newCertification.querySelector("[data-editor-month]").setAttribute("data-editor-month", generalId);
            newCertification.querySelector("[data-editor-month]").setAttribute("id", monthId);
            newCertification.querySelector("[data-editor-day-label]").setAttribute("data-editor-day-label", generalId);
            newCertification.querySelector("[data-editor-day-label]").setAttribute("for", dayId);
            newCertification.querySelector("[data-editor-day]").setAttribute("data-editor-day", generalId);
            newCertification.querySelector("[data-editor-day]").setAttribute("id", dayId);
            newCertification.querySelector("[data-editor-provider-label]").setAttribute("data-editor-provider-label", generalId);
            newCertification.querySelector("[data-editor-provider-label]").setAttribute("for", providerId);
            newCertification.querySelector("[data-editor-provider]").setAttribute("data-editor-provider", generalId);
            newCertification.querySelector("[data-editor-provider]").setAttribute("id", providerId);
            newCertification.querySelector("[data-editor-description-label]").setAttribute("data-editor-description-label", generalId);
            newCertification.querySelector("[data-editor-description-label]").setAttribute("for", descriptionId);
            newCertification.querySelector("[data-editor-description]").setAttribute("data-editor-description", generalId);
            newCertification.querySelector("[data-editor-description]").setAttribute("id", descriptionId);
            newCertification.querySelector("[data-editor-link-label]").setAttribute("data-editor-link-label", generalId);
            newCertification.querySelector("[data-editor-link-label]").setAttribute("for", linkId);
            newCertification.querySelector("[data-editor-link]").setAttribute("data-editor-link", generalId);
            newCertification.querySelector("[data-editor-link]").setAttribute("id", linkId);
            certificationContainer.appendChild(newCertification);
        });
    }

    removeCertification() {
        document.addEventListener("click", (event) => {
            if (event.target.matches("[data-editor-remove-certification]")) {
                let id = event.target.getAttribute("data-editor-remove-certification");
                let element = document.querySelector(`[data-certification="${id}"]`);
                this.removeElement(element, "certification", id);
            }
        });
    }

    removePortfolio() {
        document.addEventListener("click", (event) => {
            if (event.target.matches("[data-editor-remove-portfolio]")) {
                let id = event.target.getAttribute("data-editor-remove-portfolio");
                let element = document.querySelector(`[data-portfolio="${id}"]`);
                this.removeElement(element, "portfolio", id);
            }
        });
    }

    removeElement(element, messageSuffix, id) {
        let confirmation = new Confirm();
        confirmation.askForConfirmation({
            "path": "/assets/js/views/user/profile/confirm.php",
            "message": `Are you sure you want to delete this ${messageSuffix}?`,
            "true": {
                "textContent": "Delete",
                "message": `delete-${id}`
            },
            "false": {
                "textContent": "Cancel",
                "message": `cancel-${id}`
            }
        });

        document.addEventListener("confirmation", (event) => {
            if (event.detail.selected == `delete-${id}`) {
                console.log("hello");
                element.remove();
            }
        });
    }

    async getSelectedSkills() {
        let skillsSelectorContainer = document.querySelector('[data-dropdown-menu="skills"]');
        let checkboxes = skillsSelectorContainer.querySelectorAll("[data-input-checkbox]");
        this.data.skills = [];
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                if (!this.data.skills.includes(checkbox.value)) {
                    this.data.skills.push(checkbox.value);
                }
            } else {
                if (this.data.skills.includes(checkbox.value)) {
                    this.data.skills.splice(this.data.skills.indexOf(checkbox.value), 1);
                }
            }
        });
    }

    async getSelectedLanguages() {
        let languagesSelectorContainer = document.querySelector('[data-dropdown-menu="language"]');
        let checkboxes = languagesSelectorContainer.querySelectorAll("[data-input-checkbox]");
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                if (!this.data.languages.includes(checkbox.value)) {
                    this.data.languages.push(checkbox.value);
                }
            } else {
                if (this.data.languages.includes(checkbox.value)) {
                    this.data.languages.splice(this.data.languages.indexOf(checkbox.value), 1);
                }
            }
        });
    }

    async displayUpdateSkills() {
        let skillsSelectorContainer = document.querySelector('[data-dropdown-menu="skills"]');
        let skillsSelectedDisplay = document.querySelector('[data-select-selected="skills"]');
        skillsSelectorContainer.addEventListener("change", async (event) => {
            if (event.target.matches('[data-input-checkbox]')) {
                await this.getSelectedSkills();
                let skillsSelectorContainer = document.querySelector('[data-dropdown-menu="skills"]');
                let checkboxes = skillsSelectorContainer.querySelectorAll("[data-input-checkbox]");
                let skillsContent = [];
                checkboxes.forEach(checkbox => {
                    if (this.data.skills.includes(checkbox.value)) {
                        let id = checkbox.getAttribute("id");
                        let skillContent = document.querySelector(`[data-checkbox-content="${id}"]`);
                        skillsContent.push(skillContent.textContent);
                    }
                });
                skillsSelectedDisplay.textContent = skillsContent.join(" ");
            }
        })
    }

    async displayUpdateLanguages() {
        let languagesSelectorContainer = document.querySelector('[data-dropdown-menu="language"]');
        let languagesSelectedDisplay = document.querySelector('[data-select-selected="language"]');
        languagesSelectorContainer.addEventListener("change", async (event) => {
            if (event.target.matches('[data-input-checkbox]')) {
                await this.getSelectedLanguages();
                let languagesSelectorContainer = document.querySelector('[data-dropdown-menu="language"]');
                let checkboxes = languagesSelectorContainer.querySelectorAll("[data-input-checkbox]");
                let languagesContent = [];
                checkboxes.forEach(checkbox => {
                    if (this.data.languages.includes(checkbox.value)) {
                        let id = checkbox.getAttribute("id");
                        let languageContent = document.querySelector(`[data-checkbox-content="${id}"]`);
                        languagesContent.push(languageContent.textContent);
                    }
                });
                languagesSelectedDisplay.textContent = languagesContent.join(" ");
            }
        })
    }

    getPortfolioImage() {
        document.addEventListener("change", (event) => {
            if (event.target.matches('[data-editor-image-input]')) {
                let id = event.target.getAttribute("data-editor-image-input");
                let image = document.querySelector(`[data-editor-image="${id}"]`);
                image.src = URL.createObjectURL(event.target.files[0]);
            }
        })
    }

    async getUpdatedPortfolios() {
        const updatedPortfolios = document.querySelectorAll("[data-portfolio-update]");
        this.data.portfolio_updated = [];

        updatedPortfolios.forEach(portfolio => {
            let portfolioId = portfolio.getAttribute("data-portfolio-update");
            let generalId = portfolio.getAttribute("data-portfolio");
            let portfolioImage = () => {
                let imgInput = portfolio.querySelector("[data-editor-image-input]");
                if (imgInput.files.length > 0) {
                    return {
                        "image_id": generalId,
                        "image": imgInput.files[0],
                    }
                } else {
                    return {
                        "image_id": generalId,
                        "image": null,
                    }
                }
            }
            let portfolioTitle = portfolio.querySelector("[data-editor-title]");
            let portfolioLink = portfolio.querySelector("[data-editor-link]");

            let data = {
                "id": portfolioId,
                "images": portfolioImage(),
                "title": portfolioTitle.value,
                "link": portfolioLink.value,
            }

            if (data.images.image != null || data.title != "" || data.link != "") {
                this.data.portfolio_updated.push(data);
            }
        });
    }

    async getAddedPortfolios() {
        const addedPortfolios = document.querySelectorAll("[data-portfolio-add]");
        this.data.portfolio_added = [];

        addedPortfolios.forEach(portfolio => {
            let generalId = portfolio.getAttribute("data-portfolio");
            let portfolioImage = () => {
                let imgInput = portfolio.querySelector("[data-editor-image-input]");
                if (imgInput.files.length > 0) {
                    return {
                        "image_id": generalId,
                        "image": imgInput.files[0],
                    }
                } else {
                    return {
                        "image_id": generalId,
                        "image": null,
                    }
                }
            }
            let portfolioTitle = portfolio.querySelector("[data-editor-title]");
            let portfolioLink = portfolio.querySelector("[data-editor-link]");

            let data = {
                "images": portfolioImage(),
                "title": portfolioTitle.value,
                "link": portfolioLink.value,
            }

            if (data.images.image != null || data.title != "" || data.link != "") {
                this.data.portfolio_added.push(data);
            }
        });
    }

    async getUpdatedCertifications() {
        const updatedCertifications = document.querySelectorAll("[data-certification-update]");
        this.data.certification_updated = [];

        updatedCertifications.forEach(certification => {
            let certificationId = certification.getAttribute("data-certification-update");
            let certificationTitle = certification.querySelector("[data-editor-title]");
            let certificationYear = certification.querySelector("[data-editor-year]");
            let certificationMonth = certification.querySelector("[data-editor-month]");
            let certificationDay = certification.querySelector("[data-editor-day]");
            let certificationProvider = certification.querySelector("[data-editor-provider]");
            let certificationDescription = certification.querySelector("[data-editor-description]");
            let certificationLink = certification.querySelector("[data-editor-link]");

            let data = {
                "id": certificationId,
                "title": certificationTitle.value,
                "date": `${certificationYear.value}-${certificationMonth.value}-${certificationDay.value}`,
                "provider": certificationProvider.value,
                "description": certificationDescription.value,
                "link": certificationLink.value,
            }

            if (data.title != "" || data.date != "---" || data.provider != "" || data.description != "" || data.link != "") {
                this.data.certification_updated.push(data);
            }
        });
    }

    async getAddedCertifications() {
        const addedCertifications = document.querySelectorAll("[data-certification-add]");
        this.data.certification_added = null;

        addedCertifications.forEach(certification => {
            let certificationTitle = certification.querySelector("[data-editor-title]");
            let certificationYear = certification.querySelector("[data-editor-year]");
            let certificationMonth = certification.querySelector("[data-editor-month]");
            let certificationDay = certification.querySelector("[data-editor-day]");
            let certificationProvider = certification.querySelector("[data-editor-provider]");
            let certificationDescription = certification.querySelector("[data-editor-description]");
            let certificationLink = certification.querySelector("[data-editor-link]");

            let data = {
                "title": certificationTitle.value,
                "date": `${certificationYear.value}-${certificationMonth.value}-${certificationDay.value}`,
                "provider": certificationProvider.value,
                "description": certificationDescription.value,
                "link": certificationLink.value,
            }

            if (data.title != "" || data.date != "---" || data.provider != "" || data.description != "" || data.link != "") {
                this.data.certification_added.push(data);
            }
        });
    }

    getProfilePicture() {
        const profilePictureInput = document.getElementById("profile-picture-edit");
        const profilePicture = document.getElementById("profile-picture");
        profilePictureInput.addEventListener("change", () => {
            profilePicture.src = URL.createObjectURL(profilePictureInput.files[0]);
            this.data.profile_picture = {
                "id": "profile_picture",
                "image": profilePictureInput.files[0],
            }
        });
    }

    async updateProfile() {
        this.processLoader.appendProcessLoadSpinner();
        const firstName = document.getElementById("first-name");
        const lastName = document.getElementById("last-name");
        const title = document.getElementById("title");
        const description = document.getElementById("about");
        await this.getSelectedSkills();
        await this.getSelectedLanguages();
        await this.getAddedPortfolios();
        await this.getUpdatedPortfolios();
        await this.getAddedCertifications();
        await this.getUpdatedCertifications();

        this.userModel.addValue("first_name", firstName.value);
        this.userModel.addValue("last_name", lastName.value);
        this.userModel.addValue("title", title.value);
        this.userModel.addValue("description", description.value);
        this.userModel.removeValue("skills[]");
        this.userModel.removeValue("languages[]");
        this.data.skills.forEach(skill => {
            this.userModel.addValue("skills[]", skill);
        })
        this.data.languages.forEach(language => {
            this.userModel.addValue("languages[]", language);
        })
        this.userModel.addValue("certification_added", JSON.stringify(this.data.certification_added));
        this.userModel.addValue("certification_updated", JSON.stringify(this.data.certification_updated));
        let portfolio_added = [];
        if (this.data.portfolio_added) {
            this.data.portfolio_added.forEach(portfolio => {
                let data = {
                    "id": portfolio.images.image_id,
                    "title": portfolio.title,
                    "link": portfolio.link,
                }
                portfolio_added.push(data);
                this.userModel.addValue(`${portfolio.images.image_id}`, portfolio.images.image);
            });
            this.userModel.addValue("portfolio_added", JSON.stringify(portfolio_added));
        }


        let portfolio_updated = []
        this.data.portfolio_updated.forEach(portfolio => {
            let data = {
                "id": portfolio.images.image_id,
                "title": portfolio.title,
                "link": portfolio.link,
            }
            portfolio_updated.push(data);
            this.userModel.addValue(`${portfolio.images.image_id}`, portfolio.images.image);
        });
        this.userModel.addValue("portfolio_updated", JSON.stringify(portfolio_updated));

        this.userModel.addValue(`${this.data.profile_picture.id}`, this.data.profile_picture.image);

        let responseJSON = await this.userModel.updateProfile();
        console.log(responseJSON);


        this.processLoader.removeProcessLoadSpinner(1000, () => {
            let response = JSON.parse(responseJSON);
            if (response.status == "success") {
                if (response.message == "success") {
                    this.alert.alert("Profile updated successfully", 3000, () => {
                        window.location.reload();
                    });
                } else {
                    this.alert.alert(response.message);
                }
            } else {
                this.alert.alert("Something went wrong");
            }
        });
    }
}

export default UserController;