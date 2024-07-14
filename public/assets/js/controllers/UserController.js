import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Dropdown from "../helpers/Dropdown.js";

class UserController extends Controller {
    constructor() {
        super();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        let dropdown = new Dropdown();
        dropdown.triggerDropdowns();
        this.triggerFilter();
    }

    profile() { }

    reviews() { }
}

export default UserController;