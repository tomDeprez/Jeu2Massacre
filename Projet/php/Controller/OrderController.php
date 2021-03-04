<?php
class Order
{
    function getScore(){
        
    }
    function getAllScore($jsonData, $score){
        $retourScore = $score->getAllScore();
        if ($retourScore == null || count($retourScore) == 0) {
            $jsonData->setCode(2);
            $jsonData->setMessage("Aucune score trouvé !");
        }
        $jsonData->setData($score->getAllScore());
        return $jsonData;
    }

    function getUserConnexion($param, $jsonData, $user){
        $form = json_decode($param->{'x'}->{'form'});
        $pseudo = $form->pseudo;
        $password = $form->password;
        $user = $user->getCheckUserConnexion($pseudo, $password);
        if ($user->getId() != null) {//connexion succès
            $jsonData->setData($user->jsonSerialize());
            $jsonData->setCode(1);
            $_SESSION['User'] = json_encode($user->jsonSerialize());
            $jsonData->setMessage("Connexion réussie ! Bienvenue ".$user->getPseudo());
        }else {//connexion erreur
            $jsonData->setData(null);
            $jsonData->setCode(2);
            $jsonData->setMessage("Mot de passe ou pseudo incorrect !");
        }
        return $jsonData;
    }
}