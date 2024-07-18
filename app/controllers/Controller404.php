<?php
class Controller404 extends Controller
{

    private $auth_model;

    public function __construct()
    {
        parent::__construct();
        $this->auth_model = $this->model('AuthModel');
    }

    public function error()
    {
        $this->view('404/404', []);
    }
}
