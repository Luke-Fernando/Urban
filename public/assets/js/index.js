import Router from "./core/Router.js";
import HomeController from "./controllers/HomeController.js";
import AuthController from "./controllers/AuthController.js";
import MessageController from "./controllers/MessageController.js";
import OfferController from "./controllers/OfferController.js";
import ProjectController from "./controllers/ProjectController.js";
import JobController from "./controllers/JobController.js";
import UserController from "./controllers/UserController.js";
import Controller404 from "./controllers/Controller404.js";

console.log(window.location.pathname);

let router = new Router();

router.register("/", HomeController, "home");
router.register("/home", HomeController, "home");
router.register("/signin", AuthController, "signin");
router.register("/signup", AuthController, "signup");
router.register("/reset-password", AuthController, "resetPassword");
router.register("/user/profile", UserController, "profile");
router.register("/message", MessageController, "message");
router.register("/offers", OfferController, "offers");
router.register("/offers/create", OfferController, "create");
router.register("/offers/preview", OfferController, "offer");
router.register("/projects/dashboard", ProjectController, "projects");
router.register("/job/post", JobController, "post");
router.register("/job", JobController, "job");
router.register("/job/apply", JobController, "apply");
router.register("/job/applications", JobController, "applications");
router.register("/job/my-jobs", JobController, "posted");
router.register("/job/application", JobController, "application");
router.register("/job/room", JobController, "room");
router.register("/job/dashboard", JobController, "dashboard");
router.register("/user/reviews", UserController, "reviews");
router.register("/404", Controller404, "error");

router.dispatch(window.location.pathname);