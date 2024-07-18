import Controller from "../core/Controller.js";

class Controller404 extends Controller {

    constructor() {
        super();
    }

    error() {
        console.error("Web page not found");
    }
}

export default Controller404;