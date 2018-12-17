<?php



if (isset($_POST["forminscription"])) {
		$pseudo= htmlspecialchars($_POST["pseudo"]);
		$mail= htmlspecialchars($_POST["mail"]);
		$mail2= htmlspecialchars($_POST["mail2"]);
		$mdp= sha1($_POST["mdp"]);
		$mdp2= sha1($_POST["mdp2"]);

		$pseudoleght = strlen($pseudo);

	if (!empty($_POST["pseudo"]) AND !empty($_POST["mail"] )AND !empty($_POST["mail2"]  )AND !empty($_POST["mdp"] )AND !empty($_POST["mdp2"] )) {
		/* C'est plus sécurisé de passer les reponses en variable HP */

		/* TEST LONGUEUR PSEUDO */
		if ($pseudoleght<=255) 
		{$reqpseudo= $bdd->prepare("SELECT * From membres WHERE pseudo = ?");
					$reqpseudo ->execute(array($pseudo));
					$pseudoexist = $reqpseudo ->rowCount();
					if ($pseudoexist ==0) {
						/* TEST MEME ADRESSE MAIL */
						if ($mail==$mail2)  
						{
							/* TEST FORMAT ADRESSE EMAIL */
							if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
								# code...
								/* TEST SI ADRESSE EXISTE DEJA */
								$reqmail= $bdd->prepare("SELECT * From membres WHERE mail = ?");
								$reqmail ->execute(array($mail));
								$mailexist = $reqmail ->rowCount();
								if ($mailexist ==0) {
									# code...
								
										/* TEST DES 2 MOTS DE PASSES */
										if ($mdp==$mdp2) 
										{
											$sql = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES (?, ?, ?)");
											$sql->execute(array(
											    $pseudo, $mail, $mdp));
											$erreur = "Votre compte a bien été créé !";
											header("Location: connexion.php");

										}

										else
										{$erreur = "Vos mots de passe ne correspondent pas !";}
								}
								else
								{
									$erreur = "Adresse mail deja utilisée ! ";
								}
							}
							else
							{$erreur = "Votre adresse mail n'est pas valide";}

						}
						else
						{$erreur = "Vos 2 Emails ne correspondent pas !";}
				}else
				{$erreur = "Pseudo deja utilisé !";}
		}
		else
		{
			$erreur = "Votre pseudo ne doit pas depasser 255 caractères";
		}
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
<center><img id="logoIMIE" src="../images/LogoIMIE.png"></center>
<title>IMIE-Blog</title>

</head>
	
<body>

	<button id="retour" .style.display='block' style="width:auto;"><a href="../index.php" style="color:#FFFFFF;"> Retourner à l'accueil   </a></button>
	<p align="center"><font size="5">Créez Votre Compte</font></p>
	<hr width="50%" align="center">
	<br>
	<div class="fop" align="center">
 <form action="" method="post">
 	<fieldset>
		<!-- Elements du formulaire -->
		<!-- Nom obligatoire pour le traitement php -->
		<table id="table">
			<tr>
				<td>
					<label for="pseudo">Pseudo :</label>
				</td>
				<td>
					<input type="texte" name="pseudo" placeholder="Prenom" id="pseudo" value="<?php if(isset($pseudo)) {echo $pseudo; } ?>">
				</td>
				<tr>
				<td>
					<label for="mail">E-mail :</label>
				</td>
				<td>
					<input type="texte" name="mail" placeholder="@imie.fr" id="mail"value="<?php if(isset($mail)) {echo $mail; } ?>"> 
				</td>
				<tr>
				<td>
					<label for="mail2">Confirmez votre Email:</label>
				</td>
				<td>
						<input type="texte" name="mail2" placeholder="Confirmation mail" id="mail2" value="<?php if(isset($mail2)) {echo $mail2; } ?>"> 
				</td>
			</tr>
			<tr>
				<td>
					<label for="mdp1">Votre mot de passe :</label>
				</td>
				<td>
					<input placeholder="Mot de passe" type="password" name="mdp" id="mdp1">
				</td>
			</tr>
			<tr>
				<td>
					<label for="mdp2">Confirmez votre mot de passe :</label>
				</td>
				<td>
					<input placeholder="Confirmation mdp" type="password" name="mdp2" id="mdp2">
				</td>
			</tr>


		</table><center>
		<a href=""></a>
			<br>
			<input type="submit" value="Confirmer l'inscription" name="forminscription"><br><br>

			<a href="connexion.php">
			<input type="button" value="Déjà inscrit" >
			</a>
			<br>
			<br>
			

		</fieldset>
		
</center>
	</form>
	
</body>
</html>

