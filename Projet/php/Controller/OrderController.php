<?php
class Order
{
    public function getScore()
    {
    }
    
    public function getAllScore($jsonData, $score)
    {
        $retourScore = $score->getAllScore();
        if ($retourScore == null || count($retourScore) == 0) {
            $jsonData->setCode(2);
            $jsonData->setMessage("Aucune score trouvé !");
        }
        $jsonData->setData($score->getAllScore());
        return $jsonData;
    }

    public function getUserConnexion($param, $jsonData, $user)
    {
        $form = json_decode($param->{'x'}->{'form'});
        $pseudo = $form->pseudo;
        $password = $form->password;
        $user = $user->getCheckUserConnexion($pseudo, $password);
        if ($user->getId() != null) {//connexion succès
            $jsonData->setData($user->jsonSerialize());
            $jsonData->setCode(1);
            $_SESSION['User'] = json_encode($user->jsonSerialize());
            $jsonData->setMessage("Connexion réussie ! Bienvenue ".$user->getPseudo());
        } else {//connexion erreur
            $jsonData->setData(null);
            $jsonData->setCode(2);
            $jsonData->setMessage("Mot de passe ou pseudo incorrect !");
        }
        return $jsonData;
    }

    public function postUserInscription($param, $jsonData, $user)
    {
        $form = json_decode($param->{'x'}->{'form'});
        $pseudo = $form->pseudo;
        $password = $form->password;
        $passwordConfirm = $form->{'password-confirm'};
        if (trim($pseudo) == "" || trim($password) == "") {
            $jsonData->setData(null);
            $jsonData->setCode(2);
            $jsonData->setMessage("Le pseudo / password obligatoire");
        } else {
            $user = $user->getUser(trim($pseudo));
            if ($user->getId() != null) {
                $jsonData->setData(null);
                $jsonData->setCode(2);
                $jsonData->setMessage("pseudo déjà utilisé");
            } else {
                if ($password != $passwordConfirm) {
                    $jsonData->setData(null);
                    $jsonData->setCode(2);
                    $jsonData->setMessage("La confirmation du mot de passe est incorrecte !");
                } else {// inscription + connexion
                    $user->setUser($pseudo, $password);
                    $jsonData->setData($user->jsonSerialize());
                    $jsonData->setCode(1);
                    $_SESSION['User'] = json_encode($user->jsonSerialize());
                    $jsonData->setMessage("Inscription réussie ! Connexion automatique Bienvenue ".$user->getPseudo());
                }
            }
        }
        return $jsonData;
    }

    public function postGame($param, $jsonData, $game)
    {
        $gameSave = $param->{'x'}->{'game'};
        $nameSave = $param->{'x'}->{'name'};
        $scoreSave = $param->{'x'}->{'score'};
        $idUser = json_decode($param->{'x'}->{'user'})->id;
        $game->posteGameWithIdUser($gameSave, $nameSave, $scoreSave, $idUser);
        return $jsonData;
    }

    public function getGame(){
        $idGame = $param->{'x'}->{'idGame'};
        $jsonData->setData(getGameWithIdGame($idGame));
        return $jsonData;
    }
}
