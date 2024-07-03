<?php
class ProjectController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function projects()
    {
        if ($this->user != null) {
            $this->view('projects/dashboard', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }
}
