import Confirm from "../helpers/Confirm.js";
import CookiesModel from "../models/CookiesModel.js";

class Cookies {

    constructor() {
        this.confirmation = new Confirm();
        this.cookiesModel = new CookiesModel();
    }

    askCookies() {
        this.confirmation.askForConfirmation({
            "path": "/assets/js/views/cookies/cookies.php",
            "message": "This website use cookies to ensure you get the best experience on our website. Do you accept cookies&#63;",
            "true": {
                "textContent": "Accept all",
                "message": "cookies accepted"
            },
            "false": {
                "textContent": "Reject all",
                "message": "cookies rejected"
            }
        });
        document.addEventListener("confirmation", (event) => {
            console.log(event.detail.selected);
            if (event.detail.selected == "cookies accepted") {
                localStorage.setItem("cookies", "true");
            } else if (event.detail.selected == "cookies rejected") {
                localStorage.setItem("cookies", "false");
            }
            this.cookiesModel.addValue("cookies", localStorage.getItem("cookies"));
            this.cookiesModel.manageCookies();
        })
    }
}

export default Cookies;