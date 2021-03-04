<?php

class Score
{
    private $dbh;
    private $id;
    private $user;
    private $game;
    private $score;

    public function __construct($connexion)
    {
        $this->dbh = $connexion->getConnexion();
    }

    public function getAllScore()
    {
    }

    public function jsonSerialize()
    {
        return
            [
                'id'   => $this->id,
                'user' => $this->user,
                'game' => $this->game,
                'score' => $this->score,
            ];
    }
}
