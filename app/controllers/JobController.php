<?php
class JobController extends Controller
{
    private $job_model;

    public function __construct()
    {
        parent::__construct();
        $this->job_model = $this->model('JobModel');
    }

    public function post()
    {
        if ($this->user != null) {
            $data = $this->job_model->post();
            $this->view('job/post/post', $data);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function job()
    {
        if ($this->user != null) {
            $this->view('job/job/job', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function apply()
    {
        if ($this->user != null) {
            $this->view('job/apply/apply', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function applications()
    {
        if ($this->user != null) {
            $this->view('job/applications/applications', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function posted()
    {
        if ($this->user != null) {
            $this->view('job/posted/posted', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function application()
    {
        if ($this->user != null) {
            $this->view('job/application/application', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function room()
    {
        if ($this->user != null) {
            $this->view('job/room/room', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function dashboard()
    {
        if ($this->user != null) {
            $this->view('job/dashboard/dashboard', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function load_sub_categories()
    {
        if ($this->user != null) {
            if (isset($_POST['category']) && !empty($_POST['category'])) {
                $category = $_POST['category'];
                $data = [
                    "category" => $category
                ];
                $response = $this->job_model->load_sub_categories($data);
                echo json_encode($response);
                // echo ("response");
            }
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function load_skills()
    {
        if ($this->user != null) {
            if (isset($_POST['sub_category']) && !empty($_POST['sub_category'])) {
                $sub_category = $_POST['sub_category'];
                $data = [
                    "sub_category" => $sub_category
                ];
                $response = $this->job_model->load_skills($data);
                echo json_encode($response);
                // echo ("response");
            }
        } else {
            header("Location: /signin");
            exit;
        }
    }
}
