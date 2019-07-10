<?php


//Connection à la base de données.Adresse de la base, nom du projet, non administrateur, mot de passe (vide dans ce cas).
$pdo = new PDO('mysql:host=localhost;dbname=projet_sportif','root','');

$nom = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
$mdp = (isset($_GET["variable2"])) ? $_GET["variable2"] : NULL;
$mail = (isset($_GET["variable3"])) ? $_GET["variable3"] : NULL;
$tel = (isset($_GET["variable4"])) ? $_GET["variable4"] : NULL;
$ville = (isset($_GET["variable5"])) ? $_GET["variable5"] : NULL;
$type = (isset($_GET["variable8"])) ? $_GET["variable8"] : NULL;
$saison = (isset($_GET["variable9"])) ? $_GET["variable9"] : NULL;


echo $nom;
echo $mdp;
echo $mail;
echo $tel;
echo $ville;
echo $type;
echo $saison;


$req = $pdo->prepare("INSERT INTO admin2(Nom, Mdp, Mail, Telephone, Ville, Type_Compte, Saison) VALUES('".$nom."', '".$mdp."', '".$mail."', '".$tel."','".$ville."','".$type."','".$saison."')");

$req->execute();



/*header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain).

$to  = 'duirfrfr@msn.com';
$subject = 'Club de foot';

$message = '
     <html>
      <head>
      </head>
      <body>
       <h1>Votre enfant a bien été inscrit pour la saison '.$saison.' </h1>
       <p><strong>Nom :</strong>'.$nomRecu.'</p>
       <p><strong>Mail :</strong>'.$mailRecu.'</p>
       <p><strong>Message :</strong>'.$messageRecu.'</p>
      </body>
     </html>
     ';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';


if ($variable1 && $variable2 && $variable3 != NULL) {
	mail($to, $subject, $message, implode("\r\n", $headers));
	echo "Le mail à été envoyé avec succes";
	}*/