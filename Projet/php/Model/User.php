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

    function getCheckUserConnexion($user, $password){
        
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
