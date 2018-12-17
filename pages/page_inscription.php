<?php

/* Connection à la base de données */

$bdd = new PDO('mysql:host=localhost;dbname=imiesphere;charset=utf8', 'root', '');

if (isset($_POST["imiesphere"])) {
		$prenom= htmlspecialchars($_POST["prenom"]);
		$nom= htmlspecialchars($_POST["nom"]);
		$mail= htmlspecialchars($_POST["mail"]);
		$confirm_mail= htmlspecialchars($_POST["confirm_mail"]);
		$pwd= sha1($_POST["pwd"]);
		$confirm_pwd= sha1($_POST["confirm_pwd"]);
		$campus= htmlspecialchars($_POST["campus"]);
		$role= htmlspecialchars($_POST["role"]);
		$ville= htmlspecialchars($_POST["ville"]);
		$adresse= htmlspecialchars($_POST["adresse"]);
		$codepostal= htmlspecialchars($_POST["codepostal"]);


		$prenomleght = strlen($prenom);
		$nomleght = strlen($nom);

	if (!empty($_POST["prenom"]) AND !empty($_POST["nom"]) AND !empty($_POST["mail"]) AND !empty($_POST["confirm_mail"]) AND !empty($_POST["pwd"])AND !empty($_POST["confirm_pwd"]) AND !empty($_POST["campus"]) AND !empty($_POST["role"]) AND !empty($_POST["ville"]) AND !empty($_POST["adresse"]) AND !empty($_POST["codepostal"])) {
	/* C'est plus sécurisé de passer les reponses en variable HP */

		/* TEST LONGUEUR PSEUDO */
		if ($prenomleght<=255) 
		{$reqprenom= $bdd->prepare("SELECT * From espace_membre WHERE prenom = ?");
		$reqprenom ->execute(array($prenom));
		$prenomexist = $reqprenom ->rowCount();

			if ($nomleght<=255) 
				{$reqnom= $bdd->prepare("SELECT * From espace_membre WHERE nom = ?");
				$reqnom ->execute(array($nom));
				$nomexist = $reqnom ->rowCount();
				/* TEST MEME ADRESSE MAIL */
				if ($mail==$confirm_mail)  
				{
					/* TEST FORMAT ADRESSE EMAIL */
					if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
						# code...
						/* TEST SI ADRESSE EXISTE DEJA */
						$reqmail= $bdd->prepare("SELECT * From espace_membre WHERE mail = ?");
						$reqmail ->execute(array($mail));
						$mailexist = $reqmail ->rowCount();
						if ($mailexist ==0) {
							# code...
						
								/* TEST DES 2 MOTS DE PASSES */
								if ($pwd==$confirm_pwd) 
								{
									$sql = $bdd->prepare("INSERT INTO espace_membre(prenom, nom, mail, motdepasse, campus, role, ville, adresse, codepostal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
									$sql->execute(array(
									    $prenom, $nom, $mail, $pwd, $campus, $role, $ville, $adresse, $codepostal));
									$erreur = "Votre compte a bien été créé !";
									header("Location: page_connexion.php");

									}

									else
									{$erreur = "Vos mots de passe ne correspondent pas !";}
							}
							
							else
							{$erreur = "Adresse mail deja utilisée ! ";}
						}
						
						else
						{$erreur = "Votre adresse mail n'est pas valide";}
					}

					
					else
					{$erreur = "Vos 2 Emails ne correspondent pas !";}
			}

			else
			{
				$erreur = "Votre nom ne doit pas depasser 255 caractères";}
			}
		
		else
		{$erreur = "Votre prenom ne doit pas depasser 255 caractères";}
		}
	
	/* TEST SI TOUT LES CHAMPS SONT COMPLETES */
	else
	{
		$erreur = "Tout les champs doivent être completés !";
	}
	;}


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"></meta>
<link rel="stylesheet" href="../style/cssinscription.css" />
<link rel="stylesheet" href="../style/slider.css" /> 
<center><img id="logoIMIE" src="../images/LogoIMIE.png"></center>
<title>IMIE-Blog</title>

</head>
	
<body>

	<button id="retour" .style.display='block' style="width:auto;"><a href="../index.php" style="color:#FFFFFF;"> Retourner à l'accueil   </a></button>
	<p align="center"><font size="5">Créez Votre Compte</font></p>
	<hr width="50%" align="center">
	<div id="cadre">
	<form action="" method="POST">
	<table id="table">
		
		<tr><td class="txt">*Prénom : <input type="text" name="prenom" placeholder="Prénom" maxlength="30"></td></tr>
		<tr><td class="txt">*Nom : <input type="text" name="nom" placeholder="Nom" maxlength="30"></td></tr>
		<tr><td class="txt">*Mot de Passe : <input type="password" name="pwd" placeholder="Mot de Passe" maxlength="20"></td></tr>
		<tr><td class="txt">*Confirmation du mot de passe : <input type="password" name="confirm_pwd" placeholder="Mot de Passe" maxlength="20"></td></tr>
		<tr><td class="txt">*Adresse Email : <input type="email" name="mail" placeholder="@imie.fr"></td></tr>
		<tr><td class="txt">*Confirmation de l'Adresse Email : <input type="email" name="confirm_mail" placeholder="@imie.fr"></td></tr>
		<tr><td class="txt">*Campus : <select name="campus"><option value="Nantes">Nantes</option><option value="Paris">Paris</option><option value="St-Nazaire">St-Nazaire</option><option value="Angers">Angers</option><option value="Caen">Caen</option><option value="Rennes">Rennes</option></select></td></tr>
		<tr><td class="txt">*Rôle dans l'IMIE : <select name="role"><option value="Administrateur">Administrateur</option><option value="Formateur_Int">Formateur Interne</option><option value="Formateur_Ext">Formateur Externe</option><option value="Etudiant">Etudiant</option><option value="Intervenant">Intervenant</option></td></tr>
		<tr><td class="txt">*Ville : <input type="text" name="ville" placeholder="Ville" maxlength="75"></td></tr>
		<tr><td class="txt">*Adresse : <input type="text" name="adresse" placeholder="Adresse" maxlength="75"></td></tr>
		<tr><td class="txt">*Code Postal : <input type="text" name="codepostal" placeholder="CodePostal" maxlength="5"></td></tr>
		<tr><td class="txt"><i><h6>*Champs obligatoires</h6></i></td></tr>
		<tr>
			
			<tr><td id="ck"> <input type="checkbox" name="cgu"> En vous inscrivant, vous confirmez avoir lu, compris et accepté les Conditions d'Utilisation et la Politique de confidentialité ainsi qu'être informé(e) de votre droit à l'information.</td></tr>
		<tr><td align="center"></td></tr>


		</table><center>
		
			<br>
			<input type="submit" value="Confirmer l'inscription" name="imiesphere"><br><br>

			<a href="page_connexion.php">
			<input type="button" value="Déjâ inscrit" >
			</a>	
		 
				
	
	</form>
	</div>
	
</body>
</html>

<?php
if (isset($erreur)) {
	echo $erreur;
	# code...
}
?>


