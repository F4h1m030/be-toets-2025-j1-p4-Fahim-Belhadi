<?php

class Sneakers extends BaseController
{
    private $Sneakersmodel;

    public function __construct()
    {
        $this->Sneakersmodel = $this->model('Sneakersmodel');
    }

    public function index()
    {
        /**
         * Je roept de method getAllSmartphones aan van de smartphoneModel class
         */
        $results = $this->Sneakersmodel->getAllSneakers();
        
        $data = [
            'title' => 'Sneakers!',
            'Sneakers' => $results
        ];

        $this->view('Sneakers/index', $data);
    }
}