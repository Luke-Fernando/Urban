import Controller from "../core/Controller.js";
import AuthModel from "../models/AuthModel.js";
class AuthController extends Controller {
    constructor() {
        super();
        this.authModel = new AuthModel();
        this.displaySignupForm = false;
        this.togglePasswordShow();
        this.toggleForm();
    }

    toggleForm() {
        const signupOptions = document.getElementById("signup-options");
        const signupForm = document.getElementById("signup-form");
        let toggleForm = document.querySelectorAll("[data-form-toggle]");
        toggleForm.forEach(toggle => {
            if (toggle != null) {
                toggle.addEventListener("click", () => {
                    if (!this.displaySignupForm) {
                        signupForm.classList.remove("hidden");
                        signupForm.classList.add("flex");
                        signupOptions.classList.add("hidden");
                        signupOptions.classList.remove("flex");
                        this.displaySignupForm = true;
                    } else {
                        signupForm.classList.add("hidden");
                        signupForm.classList.remove("flex");
                        signupOptions.classList.remove("hidden");
                        signupOptions.classList.add("flex");
                        this.displaySignupForm = false;
                    }
                })
            }
        })
    }

    togglePasswordShow() {
        let passwordToggles = document.querySelectorAll("[data-toggle-password]");
        passwordToggles.forEach(toggle => {
            if (toggle != null) {
                toggle.addEventListener("click", () => {
                    let id = toggle.getAttribute("data-toggle-password");
                    let passwordInput = document.getElementById(id);

                    if (passwordInput.type == "password") {
                        passwordInput.type = "text";
                    } else {
                        passwordInput.type = "password";
                    }
                })
            }
        })
    }

    signin() {
        const signinButton = document.getElementById("signin");
        const emailOrUsername = document.getElementById("email-or-username");
        const password = document.getElementById("password");
        signinButton.addEventListener("click", async () => {
            this.processLoader.appendProcessLoadSpinner();
            let emailOrUsernameValue = emailOrUsername.value;
            let passwordValue = password.value;
            this.authModel.addValue("email_or_username", emailOrUsernameValue);
            this.authModel.addValue("password", passwordValue);
            let responseJSON = await this.authModel.signin();
            console.log(responseJSON);
            this.processLoader.removeProcessLoadSpinner(1000, () => {
                let response = JSON.parse(responseJSON);
                if (response.status == "success") {
                    if (response.message == "success") {
                        localStorage.setItem("alert", "Signed in successfully");
                        window.location.href = "/home";
                    } else {
                        this.alert.alert(response.message);
                    }
                } else {
                    this.alert.alert("Something went wrong");
                }
            });
        });
        this.forgotPassword();
    }

    signup() {
        const signupButton = document.getElementById("signup");
        const firstName = document.getElementById("first-name");
        const lastName = document.getElementById("last-name");
        const username = document.getElementById("username");
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const confirmPassword = document.getElementById("confirm-password");
        signupButton.addEventListener("click", async (event) => {
            this.processLoader.appendProcessLoadSpinner();
            let firstNameValue = firstName.value;
            let lastNameValue = lastName.value;
            let usernameValue = username.value;
            let emailValue = email.value;
            let passwordValue = password.value;
            let confirmPasswordValue = confirmPassword.value;

            this.authModel.addValue("first_name", firstNameValue);
            this.authModel.addValue("last_name", lastNameValue);
            this.authModel.addValue("username", usernameValue);
            this.authModel.addValue("email", emailValue);
            this.authModel.addValue("password", passwordValue);
            this.authModel.addValue("confirm_password", confirmPasswordValue);
            let responseJSON = await this.authModel.signup();
            console.log(responseJSON);
            this.processLoader.removeProcessLoadSpinner(1000, () => {
                let response = JSON.parse(responseJSON);
                if (response.status == "success") {
                    if (response.message == "success") {
                        localStorage.setItem("alert", "Signed up successfully");
                        window.location.href = "/signin";
                    } else {
                        this.alert.alert(response.message);
                    }
                } else {
                    this.alert.alert("Something went wrong");
                }
            });
        })
    }

    forgotPassword() {
        const forgotPasswordButton = document.getElementById("forgot-password-btn");
        const forgotPassword = document.getElementById("forgot-password");
        const forgotPasswordForm = document.getElementById("forgot-password-form");
        const sendResetToken = document.getElementById("send-reset-token");
        const emailOrUsername = document.getElementById("forgot-email-or-username");
        forgotPasswordButton.addEventListener("click", () => {
            forgotPassword.classList.remove("hidden");
            forgotPassword.classList.add("flex");
        });
        document.addEventListener("click", (event) => {
            if (!forgotPasswordForm.contains(event.target) && !forgotPasswordButton.contains(event.target)) {
                forgotPassword.classList.add("hidden");
                forgotPassword.classList.remove("flex");
            }
        });
        sendResetToken.addEventListener("click", async () => {
            this.processLoader.appendProcessLoadSpinner();
            this.authModel.addValue("email_or_username", emailOrUsername.value);
            let responseJSON = await this.authModel.forgotPassword();
            this.processLoader.removeProcessLoadSpinner(1000, () => {
                let response = JSON.parse(responseJSON);
                if (response.status == "success") {
                    if (response.message == "success") {
                        this.alert.alert("Please check your email inbox");
                    } else {
                        this.alert.alert(response.message);
                    }
                } else {
                    this.alert.alert("Something went wrong");
                }
            });
        });
    }
}

export default AuthController;