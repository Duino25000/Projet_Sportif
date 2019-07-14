<?php


//Connection à la base de données.Adresse de la base, nom du projet, non administrateur, mot de passe (vide dans ce cas).
//$pdo = new PDO('mysql:host=localhost;dbname=projet_sportif','root','');
require '../models/ConnectionBddModel.php';

$nom = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
$mdp = (isset($_GET["variable2"])) ? $_GET["variable2"] : NULL;
$mail = (isset($_GET["variable3"])) ? $_GET["variable3"] : NULL;
$tel = (isset($_GET["variable4"])) ? $_GET["variable4"] : NULL;
$ville = (isset($_GET["variable5"])) ? $_GET["variable5"] : NULL;
$type = (isset($_GET["variable8"])) ? $_GET["variable8"] : NULL;
$saison = (isset($_GET["variable9"])) ? $_GET["variable9"] : NULL;


$req = $pdo->prepare("INSERT INTO admin2(Nom, Mdp, Mail, Telephone, Ville, Type_Compte, Saison) VALUES('".$nom."', '".$mdp."', '".$mail."', '".$tel."','".$ville."','".$type."','".$saison."')");

$req->execute();

