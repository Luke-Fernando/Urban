import Model from "../core/Model.js";

class HomeModel extends Model {
    loadJobs() {
        return this.post("/api/home/load-jobs");
    }

    saveJobs() {
        return this.post("/api/home/save-jobs");
    }
}

export default HomeModel;