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
}
