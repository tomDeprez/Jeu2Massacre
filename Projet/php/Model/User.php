<?php

class User{
    protected $id;
    protected $pseudo;
    protected $password;

    public function jsonSerialize()
    {
        return
            [
                'id'   => $this->id,
                'pseudo' => $this->pseudo,
                'password' => $this->password,
            ];
    }
}