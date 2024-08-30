<?php
class JobController extends Controller
{
    private $job_model;

    public function __construct()
    {
        parent::__construct();
        $this->job_model = $this->model('JobModel');
    }

    private function get_current_datetime()
    {
        date_default_timezone_set('Asia/Colombo');
        $current_datetime = date('Y-m-d H:i:s');
        return $current_datetime;
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
            if (isset($_GET["id"]) && !empty($_GET["id"])) {
                $id = $_GET["id"];
                $data = [
                    "id" => $id
                ];
                $job = $this->job_model->load_job($data);
                $this->view('job/job/job', $job);
            } else {
                header("Location: /404");
                exit;
            }
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

    public function post_job()
    {
        $response = [
            'status' => 'success',
            'message' => null
        ];
        if ($this->user != null) {
            if (isset($_POST['title']) && !empty($_POST['title'])) {
                if (isset($_POST['category']) && !empty($_POST['category'])) {
                    if (isset($_POST['sub_category']) && !empty($_POST['sub_category'])) {
                        if (isset($_POST['skills'])) {
                            if (sizeof($_POST['skills']) > 0) {
                                if (isset($_POST['experience']) && !empty($_POST['experience'])) {
                                    if (isset($_POST["language"])) {
                                        if (sizeof($_POST['language']) > 0) {
                                            if (isset($_POST['number_of_freelancers']) && !empty($_POST['number_of_freelancers'])) {
                                                if (isset($_POST['payment_type']) && !empty($_POST['payment_type'])) {
                                                    if (isset($_POST['budget']) && !empty($_POST['budget'])) {
                                                        if (isset($_POST['description']) && !empty($_POST['description'])) {
                                                            $attachments = [];
                                                            $attachment_id = [];
                                                            if (isset($_POST["attachment_id"])) {
                                                                if (sizeof($_POST["attachment_id"]) > 0) {
                                                                    $attachment_id = $_POST["attachment_id"];
                                                                    foreach ($attachment_id as $key) {
                                                                        $attachments[$key] = $_FILES[$key];
                                                                    }
                                                                } else {
                                                                    $attachment_id = null;
                                                                }
                                                            } else {
                                                                $attachment_id = null;
                                                            }
                                                            $user = $this->user;
                                                            $title = $_POST['title'];
                                                            $category = $_POST['category'];
                                                            $sub_category = $_POST['sub_category'];
                                                            $skills = $_POST['skills'];
                                                            $experience = $_POST['experience'];
                                                            $language = $_POST['language'];
                                                            $number_of_freelancers = $_POST['number_of_freelancers'];
                                                            $payment_type = $_POST['payment_type'];
                                                            $budget = $_POST['budget'];
                                                            $description = $_POST['description'];
                                                            $data = [
                                                                "username" => $user['username'],
                                                                "datetime_added" => $this->get_current_datetime(),
                                                                "title" => $title,
                                                                "category" => $category,
                                                                "sub_category" => $sub_category,
                                                                "skills" => $skills,
                                                                "experience" => $experience,
                                                                "language" => $language,
                                                                "number_of_freelancers" => $number_of_freelancers,
                                                                "payment_type" => $payment_type,
                                                                "budget" => $budget,
                                                                "description" => $description,
                                                                "attachment_id" => $attachment_id,
                                                                "attachments" => $attachments
                                                            ];
                                                            $this->job_model->post_job($data);
                                                        } else {
                                                            $response = [
                                                                'status' => 'success',
                                                                'message' => 'Please enter your description'
                                                            ];
                                                        }
                                                    } else {
                                                        $response = [
                                                            'status' => 'success',
                                                            'message' => 'Please enter your budget'
                                                        ];
                                                    }
                                                } else {
                                                    $response = [
                                                        'status' => 'success',
                                                        'message' => 'Please select payment type'
                                                    ];
                                                }
                                            } else {
                                                $response = [
                                                    'status' => 'success',
                                                    'message' => 'Please select number of freelancers'
                                                ];
                                            }
                                        } else {
                                            $response = [
                                                'status' => 'success',
                                                'message' => 'Please select your preferred languages'
                                            ];
                                        }
                                    } else {
                                        $response = [
                                            'status' => 'success',
                                            'message' => 'Please select your preferred language(s)'
                                        ];
                                    }
                                } else {
                                    $response = [
                                        'status' => 'success',
                                        'message' => 'Please select your preferred experience'
                                    ];
                                }
                            } else {
                                $response = [
                                    'status' => 'success',
                                    'message' => 'Please add at least one skill'
                                ];
                            }
                        } else {
                            $response = [
                                'status' => 'success',
                                'message' => 'Please select at least one skill'
                            ];
                        }
                    } else {
                        $response = [
                            'status' => 'success',
                            'message' => 'Sub category is required'
                        ];
                    }
                } else {
                    $response = [
                        'status' => 'success',
                        'message' => 'Category is required'
                    ];
                }
            } else {
                $response = [
                    'status' => 'success',
                    'message' => 'Title is required'
                ];
            }
        } else {
            header("Location: /signin");
            exit;
        }
        if ($response['message'] != null) {
            echo json_encode($response);
        }
    }
}
