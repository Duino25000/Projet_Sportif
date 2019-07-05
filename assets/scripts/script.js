//*************************************************************************************
function getXMLHttpRequest() {
	var xhr = null;
	
	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}
	return xhr;
}
//***************************************************************************************

function traitement() {
	var nomSaisie = document.querySelector("#nom").value;	
	var chgtNom = document.querySelector("#label_nom");
	var chgt_p_nom = document.querySelector("#label_p_nom");

	var pswdSaisie = document.querySelector("#pswd").value;
	var chgtPswd = document.querySelector("#label_pswd");
	var chgt_p_pswd = document.querySelector("#label_p_pswd");

	var pswd2Saisie = document.querySelector("#pswd2").value;//Confirmation mdp
	var chgtPswd2 = document.querySelector("#label_pswd2");
	var chgt_p_pswd2 = document.querySelector("#label_p_pswd2");

	var mailSaisie = document.querySelector("#mail").value;
	var chgt_p_mail = document.querySelector("#pMail");
	var chgtMail = document.querySelector("#label_mail");

	var telSaisie = document.querySelector("#tel").value;	
	var chgtTel = document.querySelector("#label_tel");
	var chgt_p_tel = document.querySelector("#label_p_tel");

	var villeSaisie = document.querySelector("#ville").value;	
	var chgtVille = document.querySelector("#label_ville");
	var chgt_p_ville = document.querySelector("#label_p_ville");


//*************************** NOM ***************************
    if (nomSaisie!=""){	
    	var nomOK=false;//Même méthode pour les autres. Doivent passer true pour envoi.
    	if(/^[a-zA-Z- ]+$/.test(nomSaisie)){
    		//chgtNom.innerHTML = "Nom";
    		chgt_p_nom.innerHTML = "Format correct";
    		document.querySelector("#nom").style.borderColor = 'green';
    		var sVar1 = encodeURIComponent(nomSaisie);
    		nomOK = true;
    		
    	}else{
    		chgt_p_nom.innerHTML = "Seule les majuscules, minuscules et le tiret sont autorisés.";
    		document.querySelector("#nom").style.borderColor = 'red';	
    	}
    }
//********************* MOT DE PASSE ****************************
    if (pswdSaisie!=""){	
    	var pswdOK=false;
    	if(/^[0-9]+$/.test(pswdSaisie)){
    		//chgtNom.innerHTML = "Nom";
    		chgt_p_pswd.innerHTML = "Format correct";
    		document.querySelector("#pswd").style.borderColor = 'green';
    		var sVar2 = encodeURIComponent(pswdSaisie);
    		pswdOK = true;
    		
    	}else{
    		chgt_p_pswd.innerHTML = "Saisissez uniquement un mot de passe à 8 chiffres.";
    		document.querySelector("#pswd").style.borderColor = 'red';	
    	}
    }
//*********** CONFIRMATION MOT DE PASSE ********************
    if (pswd2Saisie!=""){	
    	var pswd2OK=false;
    	if(/^[0-9]+$/.test(pswd2Saisie)){
    		//chgtNom.innerHTML = "Nom";
    		chgt_p_pswd.innerHTML = "Format correct";
    		document.querySelector("#pswd2").style.borderColor = 'green';
    		var sVar3 = encodeURIComponent(pswd2Saisie);
    		pswd2OK = true;
    		
    	}else{
    		chgt_p_pswd.innerHTML = "Saisissez uniquement un mot de passe à 8 chiffres.";
    		document.querySelector("#pswd2").style.borderColor = 'red';	
    	}
    }
//************ COMPARAISON MOT DE PASSE **************************
	if (pswd2Saisie!=pswdSaisie){
		
		var comparaisonOK=false;
		chgt_p_pswd2.innerHTML = "Les mots de passe ne coresspondent pas";
		document.querySelector("#pswd2").style.borderColor = 'red';
	}else{
		comparaisonOK=true;
		chgt_p_pswd2.innerHTML = "Format correct";
		document.querySelector("#pswd2").style.borderColor = 'green';
	}
//*************************** MAIL ***************************
	if (mailSaisie!=""){
			var mailOK=false;
	    	 if(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(mailSaisie)){
	    	 	//chgtMail.innerHTML = "Mail";
	    		document.querySelector("#mail").style.borderColor = 'green';
	    		chgt_p_mail.innerHTML = "Format correct";
	    		var sVar4 = encodeURIComponent(mailSaisie);	
	    		mailOK = true;
	    		
	    	}else{
	    		chgt_p_mail.innerHTML = "Veuillez saisir une adresse mail valide.";
	    		document.querySelector("#mail").style.borderColor = 'red';
	    	}
	    }
//***************************** TELEPHONE **********************************
	if (telSaisie!=""){	
	    	var telOK=false;
	    	if(/^[0-9]+$/.test(telSaisie)){
	    		//chgtNom.innerHTML = "Nom";
	    		chgt_p_tel.innerHTML = "Format correct";
	    		document.querySelector("#tel").style.borderColor = 'green';
	    		var sVar5 = encodeURIComponent(telSaisie);
	    		telOK = true;
	    		
	    	}else{
	    		chgt_p_tel.innerHTML = "Seule les chiffre sont autorisés.";
	    		document.querySelector("#tel").style.borderColor = 'red';	
	    	}
	    }
//**************************** VILLE ***********************************
	if (villeSaisie!=""){	
	    	var villeOK=false;//Même méthode pour les autres. Doivent passer true pour envoi.
	    	if(/^[a-zA-Z- ]+$/.test(villeSaisie)){
	    		//chgtNom.innerHTML = "Nom";
	    		chgt_p_ville.innerHTML = "Format correct";
	    		document.querySelector("#ville").style.borderColor = 'green';
	    		var sVar6 = encodeURIComponent(villeSaisie);
	    		villeOK = true;
	    		
	    	}else{
	    		chgt_p_ville.innerHTML = "Seule les majuscules, minuscules et le tiret sont autorisés.";
	    		document.querySelector("#ville").style.borderColor = 'red';	
	    	}
	    }
//*********************	ENVOI REQUETE XHR SI OK *******************************


	if(nomOK && pswdOK && mailOK && telOK && villeOK){//Sous entend true, envoi du formulaire.
		var xhr = getXMLHttpRequest(); 
		xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			alert(xhr.responseText);
			}
		};

		xhr.open("GET", "assets/php/traitement.php?variable1=" + sVar1 + "&variable2= " + sVar2 + "&variable3= " + sVar4 + "&variable4= " + sVar5 + "&variable5= " + sVar6, true);
		xhr.send(null);
		
	}

}//fonction traitement


//**************************************************
function check(){
	var inputs = document.querySelectorAll(".vide");
	var i;
	var error = false;
	for (i=0; i<inputs.length; i++){
		if (inputs[i].value==""){	
			var champs=inputs[i];
			champs.style.borderColor = 'red';
			var label_id = "#label_" + champs.id;
			var monLabel=document.querySelector(label_id);
			var texteDeMonLabel = monLabel.innerHTML;
			//monLabel.innerHTML= texteDeMonLabel + "*";
			error = true;	
  		}

	}//for
	if (error === false){
		traitement();

	}else{
		alert("Tous les renseignements sont obligatoires!\nVérifiez les champs en rouges.");
	}
}//fonction check
//************************************************
function login(){

	//check();

	var nomLoginSaisie = document.querySelector("#nomLogin").value;	
	var chgtNomLogin = document.querySelector("#label_nomLogin");
	var chgt_p_nomLogin = document.querySelector("#label_p_nomLogin");

	var pswdLoginSaisie = document.querySelector("#pswdLogin").value;
	var chgtPswdLogin = document.querySelector("#label_pswdLogin");
	var chgt_p_pswdLogin = document.querySelector("#label_p_pswdLogin");

	//*************************** NOM ***************************
    if (nomLoginSaisie!=""){	
    	var nomLoginOK=false;//Même méthode pour les autres. Doivent passer true pour envoi.
    	if(/^[a-zA-Z- ]+$/.test(nomLoginSaisie)){
    		chgt_p_nomLogin.innerHTML = "Format correct";
    		document.querySelector("#nomLogin").style.borderColor = 'green';
    		var sVar7 = encodeURIComponent(nomLoginSaisie);
    		nomLoginOK = true;
    		
    	}else{
    		chgt_p_nomLogin.innerHTML = "Seule les majuscules, minuscules et le tiret sont autorisés.";
    		document.querySelector("#nomLogin").style.borderColor = 'red';	
    	}
    }
//********************* MOT DE PASSE ****************************
    if (pswdLoginSaisie!=""){	
    	var pswdLoginOK=false;
    	if(/^[0-9]+$/.test(pswdLoginSaisie)){
    		chgt_p_pswdLogin.innerHTML = "Format correct";
    		document.querySelector("#pswdLogin").style.borderColor = 'green';
    		var sVar8 = encodeURIComponent(pswdLoginSaisie);
    		pswdLoginOK = true;
    		
    	}else{
    		chgt_p_pswdLogin.innerHTML = "Saisissez uniquement un mot de passe à 8 chiffres.";
    		document.querySelector("#pswdLogin").style.borderColor = 'red';	
    	}
    }



    if(nomLoginOK && pswdLoginOK){//Sous entend true, envoi du formulaire.
		var xhr = getXMLHttpRequest(); 
		xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			alert(xhr.responseText);
			}
		};

		xhr.open("GET", "assets/php/traitement.php?variable6=" + sVar7 + "&variable7= " + sVar8, true);
		xhr.send(null);
		
	}

}//login

