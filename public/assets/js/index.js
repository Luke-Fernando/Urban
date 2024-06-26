import Router from "./core/Router.js";
import HomeController from "./controllers/HomeController.js";
import AuthController from "./controllers/AuthController.js";
import ProfileController from "./controllers/ProfileController.js";
import MessageController from "./controllers/MessageController.js";
import OfferController from "./controllers/OfferController.js";
import createOfferController from "./controllers/createOfferController.js";

console.log(window.location.pathname);

let router = new Router();

router.register("/", HomeController, "home");
router.register("/home", HomeController, "home");
router.register("/signin", AuthController, "signin");
router.register("/signup", AuthController, "signup");
router.register("/profile", ProfileController, "profile");
router.register("/message", MessageController, "message");
router.register("/offers", OfferController, "offer");
router.register("/offers/create", createOfferController, "createOffer");

router.dispatch(window.location.pathname);