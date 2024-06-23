import Alert from "../helpers/Alert.js";
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
            if (storedAlert != null) {
                this.alert.alert(storedAlert, 3000, () => {
                    localStorage.removeItem("alert");
                });
            }
        })
    }

    initializeNavbar() {
        // this.navbar.triggerHamburger();
        this.navbar.triggerDropdowns();
    }

}

export default Controller;