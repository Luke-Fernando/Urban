<?php
class MessageController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function message()
    {
        if ($this->user != null) {
            $this->view('message/message', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }
}
