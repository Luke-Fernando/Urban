<?php
class createOfferController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create_offer()
    {
        if ($this->user != null) {
            $data = [
                "mode" => "create",
            ];
            $this->view('offers/create/create', $data);
        } else {
            header("Location: /signin");
            exit;
        }
    }
}
