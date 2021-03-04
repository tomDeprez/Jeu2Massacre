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
$order = new Order();
$user = new User();
$jsonData = new JsonData();

//User connecté 

if ($_SESSION['User'] != "") {
    $user = unserialize($_SESSION['User']);
}

//

$methodePost = "";
$methodeGet = "";

if (isset($_POST['GET'])) {
    $methodeGet = $_POST['GET'];
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
    $jsonData = $order->getScore($jsonData);
}
if ($methodeGet == "getUserConnexion") {
    $jsonData = $order->getUserConnexion($param, $jsonData);
}

//----------------POST


if ($methodePost == "postUser") {
    # code...
}

echo json_encode($jsonData);