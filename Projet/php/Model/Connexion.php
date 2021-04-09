<?php
class connexion
{
    public function getConnexion()
    {
        $dbh = null;
        try {
            $dbh = new PDO('mysql:host=localhost:3309;dbname=big_tp', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            return $dbh;
        } catch (PDOException $e) {
            echo "die";
            die();
        }
    }
}
