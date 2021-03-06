<?php

class User
{
    private $dbh;
    private $id;
    private $pseudo;
    private $password;
    private $type;

    public function __construct($connexion)
    {
        $this->dbh = $connexion->getConnexion();
    }

    public function getUser($pseudo)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM `user` WHERE pseudo = :pseudo");
        $stmt->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $stmt->execute();
        $retour = $stmt->fetch();
        if ($retour != false) {
            $this->id = $retour['id'];
            $this->pseudo = $retour['pseudo'];
            $this->password = $retour['password'];
            $this->type = $retour['type'];
        }
        return $this;
    }

    public function setUser($pseudo, $password){
        $stmt = $this->dbh->prepare("INSERT INTO `user`(`pseudo`, `password`, `type`) VALUES (:pseudo,:password,:type)");
        $stmt->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':type', 'user', PDO::PARAM_STR);
        $stmt->execute();
        $retour = $stmt->fetch();
        return $this->getUser($pseudo);
    }

    public function getCheckUserConnexion($pseudo, $password)
    {
        $stmt = $this->dbh->prepare("SELECT * FROM `user` WHERE pseudo = :pseudo AND password = :password");
        $stmt->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $retour = $stmt->fetch();
        if ($retour != false) {
            $this->id = $retour['id'];
            $this->pseudo = $retour['pseudo'];
            $this->password = $retour['password'];
            $this->type = $retour['type'];
        }
        return $this;
    }

    public function unserialize($json)
    {
        $this->id = $json->id;
        $this->pseudo = $json->pseudo;
        $this->password = $json->password;
        $this->type = $json->type;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getType()
    {
        return $this->type;
    }

    public function jsonSerialize()
    {
        return
            [
                'id'   => $this->id,
                'pseudo' => $this->pseudo,
                'password' => $this->password,
                'type' => $this->type,
            ];
    }
}
