import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Confirm from "../helpers/Confirm.js";
import Dropdown from "../helpers/Dropdown.js";
import TriggerEnter from "../helpers/TriggerEnter.js";

class OfferController extends Controller {
    constructor() {
        super();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        let dropdown = new Dropdown();
        dropdown.triggerDropdowns();
        let triggerEnter = new TriggerEnter();
        triggerEnter.triggerInputEnter();
        this.confirmation = new Confirm();
    }

    offer() { }
}

export default OfferController;