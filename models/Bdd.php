<?php

class Bdd
{
    public static function connexion()
    {
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=goodnews", "root", '');
        } catch (\Throwable $th) {
            echo 'Un probleme a été rencontre';
            var_dump($th);
        }
    }
}
