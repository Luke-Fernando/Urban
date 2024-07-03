<?php
class OfferController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function offers()
    {
        if ($this->user != null) {
            $this->view('offers/offers/offers', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function create()
    {
        if ($this->user != null) {
            $this->view('offers/create/create', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }

    public function offer()
    {
        if ($this->user != null) {
            $this->view('offers/offer/offer', []);
        } else {
            header("Location: /signin");
            exit;
        }
    }
}
