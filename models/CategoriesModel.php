<?php

class CategoriesModel
{
    private $db;

    public function __construct()
    {
        $this->db = Bdd::connexion();
    }

    public function getCategories()
    {
        $this->db->query('SELECT * FROM categories')->fetchAll();
    }
}
