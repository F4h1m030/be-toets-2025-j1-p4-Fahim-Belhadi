<?php

class HorlogesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllHorloges()
    {
        $sql = 'SELECT Id, Merk, Model, Prijs FROM horloges ORDER BY Prijs DESC';
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getHorlogeById($id)
    {
        $sql = 'SELECT Id, Merk, Model, Prijs FROM horloges WHERE Id = :id';
        $this->db->query($sql);
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function insertHorloge($post)
    {
        $sql = "INSERT INTO horloges (Merk, Model, Prijs) VALUES (:Merk, :Model, :Prijs)";
        $this->db->query($sql);
        $this->db->bind(':Merk', $post['Merk'], PDO::PARAM_STR);
        $this->db->bind(':Model', $post['Model'], PDO::PARAM_STR);
        $this->db->bind(':Prijs', $post['Prijs'], PDO::PARAM_STR);
        return $this->db->execute();
    }

    public function deleteHorlogeById($id)
    {
        $sql = 'DELETE FROM horloges WHERE Id = :id';
        $this->db->query($sql);
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}
