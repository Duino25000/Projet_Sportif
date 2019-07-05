<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/SASS/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Ajout d'un utilisateur</title>
</head>
<body>

    <div id="hautForm">
        <h2>Ajouter un compte</h2>
        <h4>Tout les champs sont obligatoires</h4>
    </div>

    <form method="post" id="formAjoutUtilsateur">

        
        <div id="blocForm">
            
            <div id="blockGaucheForm">

                <h3>Nom</h3>
                <div id="boxNom" class="boxInput">
                    <label for="nom" id="label_nom"><i class="fas fa-user"></i></label>
                    <input type="text" name="nom1" id="nom" class="vide" placeholder="Nom" />
                </div>
                <p id="label_p_nom"></p>
                

                <h3>Mot de passe</h3>
                <div id="boxPswd" class="boxInput">
                    <label for="pswd" id="label_pswd"><i class="fas fa-unlock"></i></label>
                    <input type="password" name="pswd" id="pswd" class="vide" placeholder="Mot de passe" />
                </div>
                <p id="label_p_pswd"></p>


                <h3>Confirmation mot de passe</h3>
                <div id="boxPswd2" class="boxInput">
                    <label for="pswd2" id="label_pswd2"><i class="fas fa-lock"></i></label>
                    <input type="password" name="pswd2" id="pswd2" class="vide" placeholder="Confirmer mot de passe" />
                </div>
                <p id="label_p_pswd2"></p>
            </div><!--blockGaucheForm-->

            <div id="blockDroitForm">

                <h3>Mail</h3>
                <div id="boxMail" class="boxInput">
                    <label for="mail" id="label_mail"><i class="fas fa-envelope"></i></label>
                    <input type="email" name="mail" id="mail" class="vide" placeholder="Mail" /> 
                </div>
                <p id="pMail"></p>


                <h3>Ville</h3>
                <div id="boxVille" class="boxInput">

                    <label for="ville" id="label_ville"><i class="fas fa-city"></i></label>
                    <input type="text" name="ville" id="ville" class="vide" placeholder="" />
                </div>
                <p id="label_p_ville"></p>

                <h3>Téléphone</h3>
                <div id="boxTel" class="boxInput">

                    <label for="tel" id="label_tel"><i class="fas fa-phone"></i></label>
                    <input type="tel" name="tel" id="tel" class="vide" placeholder="Téléphone" />
                </div>
                <p id="label_p_tel"></p>

                <br/>
            </div><!--blockDroitForm-->

        </div>
        
    </form>
   <div id="basForm">
        <i class="fas fa-exclamation-circle"></i>
        <h3>Après la validation du formulaire, vous serez contactez par l'entraineur de votre enfant pour confirmer votre identitié.</h3>
        <div id="boutonVerif" onclick="check()"><i class="fas fa-check"></i></div>
    </div>

    <script src="assets/scripts/script.js"></script>
</body>
</html>

