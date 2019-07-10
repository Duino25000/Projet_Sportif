<?php

$pdo = new PDO('mysql:host=localhost;dbname=projet_sportif','root','');


$placeVide = $pdo->prepare("SELECT Place_Libre FROM admin2 WHERE Type_Compte LIKE 'UT%'");


$placeVide->execute();
//$req->execute();

//Et renvoi la reponse de la requette au controlleur pour traitement.
$dispo = $placeVide->fetchAll();