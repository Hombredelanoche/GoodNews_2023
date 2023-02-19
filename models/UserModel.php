<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = BDD::connexion();
    }

    public function setUser($nom, $prenom, $telephone, $email, $mdp)
    {
        $pushUser = $this->db->prepare('INSERT INTO utilisateurs(nom, prenom, email ,telephone, Mot_de_passe) VALUES (?,?,?,?,?)');
        return $pushUser->execute([$nom, $prenom, $telephone, $email, $mdp]);
    }

    public function getUser()
    {
        return $this->db->query('SELECT * FROM utilisateurs');
    }

    public function getUserByEmail($email)
    {
        return $this->db->query('SELECT * FROM utilisateurs WHERE email=$email')->fetch();
    }
}
