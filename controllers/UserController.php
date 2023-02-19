<?php

require_once('./models/UserModel.php');

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel;
    }

    public function inscription()
    {
        include('./views/Inscription.php');
    }

    public function setUser()
    {
        $pushUser = $this->model->setUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['phone'], password_hash($_POST['mdp'], PASSWORD_DEFAULT));
        if ($pushUser) {
            header('Location: index.php');
            echo "L'inscription est faite";
        } else {
            $this->inscription();
        }
    }

    public function connexion()
    {
    }


    public function getUserByEmail()
    {
    }
}
