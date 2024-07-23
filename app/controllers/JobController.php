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
}
