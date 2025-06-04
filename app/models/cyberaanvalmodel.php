<?php

class CyberaanvalModel
{
    private $db;

    public function __construct()
    {
        /** Door het maken van een database instantie
         *  kunnen we de database functies gebruiken
         *  en hebben we een verbinding met de database
         */
        $this->db = new Database();
    }

    public function getAllcyberaanval()
    {
        $sql = 'SELECT  cbav.Naam
                       ,cbav.Jaar
                       ,cbav.AantalSlachtoffers
                       ,cbav.TypeAanval
                       ,cbav.Schade

                FROM cyberaanval as cbav
                ORDER BY cbav.AantalSlachtoffers DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}