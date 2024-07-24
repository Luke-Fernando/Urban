import Alert from "../helpers/Alert.js";
import Cookies from "../controllers/CookiesController.js";
import Navbar from "../helpers/Navbar.js";
import Spinner from "../helpers/Spinner.js";

class Controller {

    constructor() {
        this.alert = new Alert();
        this.pageLoader = new Spinner();
        this.processLoader = new Spinner();
        this.navbar = new Navbar();

        this.loadPage();
        this.initializeNavbar();
    }

    loadPage() {
        this.pageLoader.pageLoadSpinner(1000, () => {
            let storedAlert = localStorage.getItem("alert");
            let isCookies = localStorage.getItem("cookies");
            if (storedAlert != null) {
                this.alert.alert(storedAlert, 3000, () => {
                    localStorage.removeItem("alert");
                });
            }
            if (isCookies == null) {
                let cookie = new Cookies();
                cookie.askCookies();
            }
        })
    }

    initializeNavbar() {
        // this.navbar.triggerHamburger();
        this.navbar.triggerDropdowns();
    }

}

export default Controller;