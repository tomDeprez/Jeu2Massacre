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

    public function posteGameWithIdUser($game, $name, $idUser, $score){
        $stmt = $this->dbh->prepare("INSERT INTO `game`(`game`, `name`, `date_game`) VALUES (:game,:name,:date)");
        $stmt->bindValue(':game', $game, PDO::PARAM_STR);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':date', date("Y-m-d H:i:s"));
        $stmt->execute();
        $id = $this->dbh->lastInsertId();
        $stmt = $this->dbh->prepare("INSERT INTO `score`(`idUser`, `idGame`, `score`) VALUES (:idUser,:idGame,:score)");
        $stmt->bindValue(':idUser', $idUser, PDO::PARAM_INT);
        $stmt->bindValue(':idGame', $id, PDO::PARAM_INT);
        $stmt->bindValue(':score', $score);
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

    public function getAllGameWithIdUser($id){
        $stmt = $this->dbh->prepare("SELECT * FROM score S INNER JOIN game G ON S.idGame = G.id WHERE S.idUser = :id_user;");
        $stmt->bindValue(':id_user', $id, PDO::PARAM_INT);
        $stmt->execute();
        $retour = $stmt->fetch();
        $games = [];

        if (!empty($retour)) {

        }
        return ["games" => $games];
    }
}
