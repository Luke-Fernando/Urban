<?php
class OfferController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function offer()
    {
        if ($this->user != null) {
            $this->view('offers/offers/offers', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }
}
