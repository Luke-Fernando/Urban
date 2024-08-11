import Model from "../core/Model.js";

class UserModel extends Model {
    updateProfile() {
        return this.post("/api/user/update-profile");
    }
}

export default UserModel;