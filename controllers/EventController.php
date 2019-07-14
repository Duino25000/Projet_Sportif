<?php

require '../models/ConnectionBddModel.php';

$dateEvent = (isset($_GET["variable11"])) ? $_GET["variable11"] : NULL;
$lieuEvent = (isset($_GET["variable12"])) ? $_GET["variable12"] : NULL;
$saisonEvent = (isset($_GET["variable13"])) ? $_GET["variable13"] : NULL;

$addEvent = $pdo->prepare("INSERT INTO admin2(Date_Event, Lieu_Event, Saison_Event) VALUES('".$dateEvent."', '".$lieuEvent."', '".$saisonEvent."')");
$addEvent->execute();

$recupParentEvent = $pdo->prepare("SELECT Nom, Mail FROM admin2 WHERE Saison = :compareEvent");
$recupParentEvent-> bindParam (':compareEvent', $saisonEvent, PDO::PARAM_INT);
$recupParentEvent->execute();
$resultParent = $recupParentEvent->fetchAll(PDO::FETCH_ASSOC);

//$wpdb = $pdo->prepare( "SELECT MAX(id) FROM admin2 WHERE ");

$nomEvent = array();
//var_dump($saisonEvent);
if(gettype($resultParent)=='array'){
  foreach ($resultParent as $value) {
  
  $nomEvent = $value['Nom'];
  $mailEvent = $value['Mail'];
  //header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain).


  //'efdbfa399b-d96522@inbox.mailtrap.io'
  //$from = 'entraineur@entraineur.com';
  $to  = ''.$mailEvent.'';
  $subject = 'Club de foot';

  $message = '
       <html>
        <head>
        </head>
        <body>
         <h1>Votre enfant '.$nomEvent.' a bien été inscrit pour la saison '.$saisonEvent.'</h1>
         <p>Rendez-vous sur le <a href="http://localhost/Projet_Sportif/">site</a> pour confirmer ou non votre présence.<br />Merci</p>
        </body>
       </html>
       ';

  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=utf-8';


  if ($saisonEvent && $nomEvent != NULL) {
    mail($to, $subject, $message, implode("\r\n", $headers));
  }

  }
  //echo "Les mail ont été envoyés avec succes";
  require '../views/admin.html.twig';
}


