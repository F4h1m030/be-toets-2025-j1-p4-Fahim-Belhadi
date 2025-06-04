<?php

class Horloges extends BaseController
{
    private $horlogesModel;

    public function __construct()
    {
        $this->horlogesModel = $this->model('HorlogesModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Overzicht Horloges',
            'horloges' => $this->horlogesModel->getAllHorloges()
        ];
        $this->view('horloges/index', $data);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $post = [
                'Merk' => trim($_POST['Merk']),
                'Model' => trim($_POST['Model']),
                'Prijs' => trim($_POST['Prijs'])
            ];
            if ($this->horlogesModel->insertHorloge($post)) {
                header('Location: ' . URLROOT . '/horloges/index');
                exit;
            }
        } else {
            $data = ['title' => 'Nieuw Horloge Toevoegen'];
            $this->view('horloges/create', $data);
        }
    }

   
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->horlogesModel->deleteHorlogeById($id)) {
                header('Location: ' . URLROOT . '/horloges/index');
                exit;
            }
        } else {
            $horloge = $this->horlogesModel->getHorlogeById($id);
            $data = [
                'title' => 'Horloge Verwijderen',
                'horloge' => $horloge
            ];
            $this->view('horloges/delete', $data);
        }
    }
}
