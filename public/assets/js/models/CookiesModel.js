import Model from "../core/Model.js";

class CookiesModel extends Model {
    manageCookies() {
        return this.post("/api/cookies");
    }
}

export default CookiesModel;