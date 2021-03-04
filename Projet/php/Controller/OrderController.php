<?php
class Order
{
    function getScore(){
        
    }
    function getAllScore($jsonData, $score){
        $retourScore = $score->getAllScore();
        if ($retourScore == null || count($retourScore) == 0) {
            $jsonData->setCode(3);
            $jsonData->setMessage("Aucune score trouvé !");
        }
        $jsonData->setData($score->getAllScore());
        return $jsonData;
    }

    function getUserConnexion($param, $jsonData, $user){
        $form = json_decode($param->{'x'}->{'form'});
        $pseudo = $form->pseudo;
        $password = $form->password;
        $user->getCheckUserConnexion($pseudo, $password);
    }
}