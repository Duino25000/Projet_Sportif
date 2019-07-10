<?php

//Connection à la base de données.Adresse de la base, nom du projet, non administrateur, mot de passe (vide dans ce cas).
$pdo = new PDO('mysql:host=localhost;dbname=projet_sportif','root','');

//*********************** PREPARE LES REQUETTES ***********************************
//Ajoute dans la table admin2 les saisies de l'ajout d'utilisateurs.
//$req = $pdo->prepare("INSERT INTO admin2 VALUES ('".$nom."', '".$mdp."', '".$mail."', '".$tel."','".$ville."')");




$sth = $pdo->prepare("SELECT Nom, Type_Compte FROM admin2 WHERE Nom = :nom AND Mdp = :mdp");



$sth-> bindParam (':nom', $nomLogin, PDO::PARAM_STR);
$sth-> bindParam (':mdp', $mdpLogin, PDO::PARAM_STR);



//****************** EXECUTER LES REQUETTES ***********************************
//Execute "sth" définie plus haut.
$sth->execute();
//$req->execute();

//Et renvoi la reponse de la requette au controlleur pour traitement.
$result = $sth->fetch(PDO::FETCH_ASSOC);
//$data = $req->fetchAll();
//********************************************************