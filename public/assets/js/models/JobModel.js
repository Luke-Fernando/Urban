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

    saveJobs() {
        return this.post("/api/home/save-jobs");
    }
}

export default JobModel;