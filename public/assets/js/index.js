import Router from "./core/Router.js";
import HomeController from "./controllers/HomeController.js";
import AuthController from "./controllers/AuthController.js";

console.log(window.location.pathname);

let router = new Router();

router.register("/", HomeController, "home");
router.register("/home", HomeController, "home");
router.register("/signin", AuthController, "signin");
router.register("/signup", AuthController, "signup");

router.dispatch(window.location.pathname);