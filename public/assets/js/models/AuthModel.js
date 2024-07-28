import Model from "../core/Model.js";

class AuthModel extends Model {
    signin() {
        return this.post("/api/auth/signin");
    }

    signup() {
        return this.post("/api/auth/signup");
    }

    forgotPassword() {
        return this.post("/api/auth/forgot-password");
    }

    resetPassword() {
        return this.post("/api/auth/reset-password");
    }
}

export default AuthModel;