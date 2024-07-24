<?php
class CookiesController extends Controller
{
    private $cookies_model;

    public function __construct()
    {
        parent::__construct();
        $this->cookies_model = $this->model('CookiesModel');
    }

    public function cookies()
    {
        if (isset($_POST["cookies"]) && !empty($_POST["cookies"])) {
            $data = [
                "cookies" => $_POST["cookies"]
            ];
            $this->cookies_model->cookies($data);
        }
    }
}
