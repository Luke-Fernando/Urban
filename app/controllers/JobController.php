<?php
class JobController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function post()
    {
        if ($this->user != null) {
            $this->view('job/post/post', []);
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
}
