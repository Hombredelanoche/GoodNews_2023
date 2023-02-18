<?php

class BDD
{
    public static function connexion()
    {
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=goodnews", "root", '');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bdd;
        } catch (\Throwable $th) {
            echo 'Un probleme a été rencontre';
            var_dump($th);
        }
    }
}
