import Model from "../core/Model.js";

class JobModel extends Model {
    loadSubCategories() {
        return this.post("/api/job/load-sub-categories");
    }

    loadSkills() {
        return this.post("/api/job/load-skills");
    }

    postJob() {
        return this.post("/api/job/post-job");
    }
}

export default JobModel;