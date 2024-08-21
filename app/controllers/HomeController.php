<?php
class HomeController extends Controller
{
    private $home_model;

    public function __construct()
    {
        parent::__construct();
        $this->home_model = $this->model('HomeModel');
    }

    public function home()
    {
        if ($this->user != null) {
            $this->view('home/dashboard', []);
        } else {
            $this->view('home/home', []);
        }
    }

    public function load_jobs()
    {
        if ($this->user != null) {
            if (isset($_POST["limit"])) {
                if (isset($_POST["offset"])) {
                    $limit = $_POST["limit"];
                    $offset = $_POST["offset"];
                    $data = [
                        'limit' => $limit,
                        'offset' => $offset
                    ];
                    $jobs = $this->home_model->load_jobs($data);
                    echo json_encode($jobs);
                }
            }
        } else {
            header("Location: /signin");
        }
    }

    public function save_jobs()
    {
        if ($this->user != null) {
            $response = [
                'status' => 'success',
                'message' => null
            ];
            if (isset($_POST["job_id"])) {
                $job_id = $_POST["job_id"];
                $username = $this->user['username'];
                $data = [
                    'job_id' => $job_id,
                    'username' => $username
                ];
                $this->home_model->save_jobs($data);
            } else {
                $response['message'] = "Invalid Request";
            }
        } else {
            header("Location: /signin");
        }

        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }
}
