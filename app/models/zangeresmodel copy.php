<?php

class zangeresModel
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

    public function getAllzangeres()
    {
        $sql = 'SELECT  zngrs.Naam
                       ,zngrs.Nettowaarde
                       ,zngrs.Land
                       ,zngrs.Mobiel
                       ,zngrs.Leeftijd

                FROM zangeres as zngrs
                ORDER BY zngrs.Leeftijd DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}