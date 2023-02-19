<?php

switch (@$_GET['p']) {
    case 'inscription';
        $newUser = new UserController;
        if (isset($_POST['email'])) {
            $newUser->setUser();
        } else {
            $newUser->inscription();
        }
        break;
    case 'connexion';
        $logUser = new UserController;
        if (isset($_POST['email'])) {
            $logUser->getUserByEmail();
        } else {
            $logUser->connexion();
            echo "Une erreur c'est produite";
        }
}
