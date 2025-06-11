<?php

class Sneakers extends BaseController
{
    private $Sneakersmodel;

    public function __construct()
    {
        $this->Sneakersmodel = $this->model('Sneakersmodel');
    }

    // Toon alle sneakers
    public function index()
    {
        $results = $this->Sneakersmodel->getAllSneakers();

        $data = [
            'title' => 'Sneakers!',
            'Sneakers' => $results
        ];

        $this->view('Sneakers/index', $data);
    }

    // Formulier tonen
    public function create()
    {
        $data = [
            'title' => 'Sneaker toevoegen'
        ];

        $this->view('Sneakers/create', $data);
    }

    // Formulier verwerken
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $merk  = trim($_POST['Merk']);
            $model = trim($_POST['Model']);
            $type  = trim($_POST['Type']);
            $prijs = trim($_POST['Prijs']);

            // Optioneel: validatie toevoegen hier

            $this->Sneakersmodel->addSneaker($merk, $model, $type, $prijs);

            header('Location: ' . URLROOT . '/Sneakers');
            exit;
        } else {
            header('Location: ' . URLROOT . '/Sneakers/create');
            exit;
        }
    }

    // Sneaker verwijderen
    public function delete($id)
    {
        $this->Sneakersmodel->deleteSneaker($id);
        header('Location: ' . URLROOT . '/Sneakers');
        exit;
    }
}
