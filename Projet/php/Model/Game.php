<?php

class Game
{
    private $dbh;
    private $id;
    private $name;
    private $game;

    public function __construct($connexion)
    {
        $this->dbh = $connexion->getConnexion();
    }

    public function posteGameWithIdUser($game, $name, $scoreSave, $idUser){
        $stmt = $this->dbh->prepare("INSERT INTO `game`(`game`, `name`) VALUES (:game,:name)");
        $stmt->bindValue(':game', $game, PDO::PARAM_STR);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        $id = $this->dbh->lastInsertId();
        $stmt = $this->dbh->prepare("INSERT INTO `score`(`idUser`, `idGame`, `score`) VALUES (:idUser,:idGame,:score)");
        $stmt->bindValue(':idUser', $idUser, PDO::PARAM_INT);
        $stmt->bindValue(':idGame', $id, PDO::PARAM_INT);
        $stmt->bindValue(':score', $scoreSave, PDO::PARAM_STR);
        $stmt->execute();
    }
    public function getGameWithIdGame($id){
        $stmt = $this->dbh->prepare("SELECT * FROM `game` WHERE id = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $retour = $stmt->fetch();
        if ($retour != false) {
            $this->id = $retour['id'];
            $this->name = $retour['name'];
            $this->game = $retour['game'];
        }
        return $this;
    }
}
