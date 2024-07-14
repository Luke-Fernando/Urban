<?php
class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function profile()
    {
        if ($this->user != null) {
            $this->view('user/profile/profile', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function reviews()
    {
        if ($this->user != null) {
            $this->view('user/reviews/reviews', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }
}
