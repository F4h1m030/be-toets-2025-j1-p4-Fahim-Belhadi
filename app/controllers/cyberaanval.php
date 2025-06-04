<?php

class cyberaanval extends BaseController
{
    private $cyberaanvalmodel;

    public function __construct()
    {
        $this->cyberaanvalmodel = $this->model('cyberaanvalmodel');
    }

    public function index()
    {
        /**
         * Je roept de method getAllSmartphones aan van de smartphoneModel class
         */
        $results = $this->cyberaanvalmodel->getAllcyberaanval();
        
        $data = [
            'title' => 'cyberaanval!',
            'cyberaanval' => $results
        ];

        $this->view('cyberaanval/index', $data);
    }
}