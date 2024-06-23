<?php
class HomeController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        // $this->view('home/home', []);
        if ($this->user == null) {
            $this->view('home/home', []);
        } else {
            $this->view('home/dashboard', []);
        }
    }
}
