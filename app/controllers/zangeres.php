<?php

class zangeres extends BaseController
{
    private $zangeresmodel;

    public function __construct()
    {
        $this->zangeresmodel = $this->model('zangeresmodel');
    }

    public function index()
    {
        /**
         * Je roept de method getAllSmartphones aan van de smartphoneModel class
         */
        $results = $this->zangeresmodel->getAllzangeres();
        
        $data = [
            'title' => 'zangeres!',
            'zangeres' => $results
        ];

        $this->view('zangeres/index', $data);
    }
}