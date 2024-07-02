import Controller from "../core/Controller.js";
import Checkbox from "../helpers/Checkbox.js";
import Confirm from "../helpers/Confirm.js";
import Generate from "../helpers/Generate.js";
import Select from "../helpers/Select.js";
// import Dropdown from "../helpers/Dropdown.js";
// import TriggerEnter from "../helpers/TriggerEnter.js";

class createOfferController extends Controller {
    constructor() {
        super();
        let checkbox = new Checkbox();
        checkbox.toggleCheckbox();
        // let dropdown = new Dropdown();
        // dropdown.triggerDropdowns();
        // let triggerEnter = new TriggerEnter();
        // triggerEnter.triggerInputEnter();
        this.confirmation = new Confirm();
        let select = new Select();
        select.triggerDropdowns();
    }

    async createOffer() {
        let generate = new Generate();
        let milestone = await generate.generateElement("/assets/js/views/offers/create/milestone.php");
        document.body.appendChild(milestone);
    }
}

export default createOfferController;