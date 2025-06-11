<?php

class Sneakersmodel
{
    private $db;

    public function __construct()
    {
        // Maak verbinding met de database via de Database helper
        $this->db = new Database();
    }

    /**
     * Haal alle sneakers op
     */
    public function getAllSneakers()
    {
        $sql = 'SELECT Id, Merk, Model, Type, Prijs
                FROM Sneakers
                ORDER BY Merk DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    /**
     * Voeg een sneaker toe aan de database
     */
    public function addSneaker($merk, $model, $type, $prijs)
    {
        $sql = 'INSERT INTO Sneakers (Merk, Model, Type, Prijs)
                VALUES (:merk, :model, :type, :prijs)';

        $this->db->query($sql);
        $this->db->bind(':merk', $merk);
        $this->db->bind(':model', $model);
        $this->db->bind(':type', $type);
        $this->db->bind(':prijs', $prijs);

        return $this->db->execute();
    }

    /**
     * Verwijder een sneaker op basis van ID
     */
    public function deleteSneaker($id)
    {
        $sql = 'DELETE FROM Sneakers WHERE Id = :id';

        $this->db->query($sql);
        $this->db->bind(':id', $id);

        return $this->db->execute();
    }
}
