<?php

class Game
{
    private $dbh;

    public function __construct($connexion)
    {
        $this->dbh = $connexion->getConnexion();
    }
}
