<?php
$global[] = glob("*.php");
$global[] = glob("../Model/*.php");

foreach ($global as $globalName)
{
    foreach ($globalName as $filename) {
        if ($filename != "PrincipalController.php") {
            require $filename;
        }
    }
}

$connexion = new Connexion();
$user = new User($connexion);
$score = new Score($connexion);
$game = new Game($connexion);
//--
$order = new Order();
$jsonData = new JsonData();
//--

//User connecté 
$userReturne = "";
session_start();
if (isset($_SESSION['User'])) {
    $userReturne = $user->unserialize(json_decode($_SESSION['User']));
}

//
$jsonData->setCode(1);
$jsonData->setMessage("Succès");

$methodePost = "";
$methodeGet = "";

if (isset($_POST['GET'])) {
    $methodeGet = $_POST['GET'];
}
if (isset($_GET['GET'])) {
    $methodeGet = $_GET['GET'];
}
if (isset($_POST['POST'])) {
    $methodePost = $_POST['POST'];
}
if (isset($_POST['PARAM'])) {
    $param = $_POST['PARAM'];
    $param = json_decode($param);
}
//----------------GET

if ($methodeGet == "getScore") {
    $jsonData = $order->getScore($param, $jsonData, $score);
}
if ($methodeGet == "getAllScore") {
    $jsonData = $order->getAllScore($jsonData, $score);
}
if ($methodeGet == "getUserConnexion") {
    $jsonData = $order->getUserConnexion($param, $jsonData, $user);
}
if ($methodeGet == "getUserDeconnexion") {
    $_SESSION['User'] = null;
}
if ($methodeGet == "getUser") {
    $jsonData->setUser($userReturne->jsonSerialize());
}

if ($methodeGet == "getAllgame") {
    $jsonData = $order->getAllGame($param, $jsonData, $game);
}

//----------------POST


if ($methodePost == "postUserInscription") {
    $jsonData = $order->postUserInscription($param, $jsonData, $user);
}

if ($methodePost == "postGame") {
    $jsonData = $order->postGame($param, $jsonData, $game);
}

echo json_encode($jsonData->jsonSerialize());