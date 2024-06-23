<?php
class ProfileController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function profile()
    {
        if ($this->user != null) {
            $this->view('profile/profile', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }
}
