<?php


$bdd = new PDO('mysql:host=localhost;dbname=imiesphere;charset=utf8', 'root', '');

if (isset($_POST["formarticle"])) {
		$titre= htmlspecialchars($_POST["titre"]);
		$intro= htmlspecialchars($_POST["intro"]);
		$categorie= htmlspecialchars($_POST["categorie"]);
		$corptexte= ($_POST["corptexte"]);
		$image= ($_POST["image"]);


		$titreleght = strlen($titre);

	if (!empty($_POST["titre"]) AND !empty($_POST["intro"] )AND !empty($_POST["categorie"] )AND !empty($_POST["corptexte"] )) {
		/* C'est plus sécurisé de passer les reponses en variable HP */

		/* TEST LONGUEUR PSEUDO */
		if ($titreleght<=255) 
		{$reqtitre= $bdd->prepare("SELECT * From article WHERE titre = ?");
					$reqtitre ->execute(array($titre));
					$titreexist = $reqtitre ->rowCount();
					if ($titreexist ==0) {
											$sql = $bdd->prepare("INSERT INTO article(titre, introduction, categorie, corps_text, image, id_membre) VALUES (?, ?, ?, ?, ?, ?)");
											$sql->execute(array($titre, $intro, $categorie, $corptexte, $image, 1));
											$erreur = "Votre article a bien été créé !";
										
				}else
				{$erreur = "Titre deja utilisé !";}
		}
		else
		{
			$erreur = "Votre titre ne doit pas depasser 255 caractères";
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
	<title>
		LA COQUILLE OUI BRAVO
	</title>
	<link rel="stylesheet" type="text/css" href="theme.css">
</head>
<body>

	
<ul id="menu-accordeon">
   <li><a href="#">Menu</a>
      <ul>
         <li><a href="#">Espace Membre</a></li>
         <li><a href="#">Paramètre</a></li>
         <li><a href="#">Historique</a></li>
         <li><a href="#">Mes articles</a></li>
         <li><a href="#">Deconnexion</a></li>
      </ul>
</ul>
      <a href="accueil.html">
   <img src="https://images.ecosia.org/IDmGrxFc9WpZaW3ETo-47MPAqnk=/0x390/smart/http%3A%2F%2Fwww.lemansdeveloppement.fr%2Fwp-content%2Fuploads%2F2015%2F06%2FLOGO_IMIE_H.jpg" alt="LOGO IMIE" id="LOGO" width="30%" height="30%">
</a>
<div><center><ul id="nav">
        <li id="nav-home"><a href="#">Accueil</a>
        </li>
        <li id="nav-it_start"><a href="#">IT START</a></li>
        <li id="nav-dev"><a href="#">DEV</a></li>
        <li id="nav-ops"><a href="#">OPS</a></li>
        <li id="nav-digi"><a href="#">DIGI</a></li>
        <li id="nav-staff"><a href="#">staff</a></li>
        <li id="nav-contact"><a href="#">Contact</a></li>
    <li id="searchbar">

            <form action="" class="formulaire">
            <input class="champ" type="text" value="Recherche...)"/>
            <input class="bouton" type="button" value= "entrer" />

            </form>
        </li>
     </ul></center></div></br></br></br>
     <form action="" method="post">
 	<fieldset><center>
		<!-- Elements du formulaire -->
		<!-- Nom obligatoire pour le traitement php -->
		<table>
			<tr>
				<td>
					<label for="titre">Titre :</label>
				</td>
				<td>
					<input type="texte" name="titre" placeholder="Titre" id="titre" value="<?php if(isset($titre)) {echo $titre; } ?>">
				</td>
				<tr>
				<td>
					<label for="intro">Intro :</label>
				</td>
				<td>
					<input type="texte" name="intro" placeholder="intro" id="intro"value="<?php if(isset($intro)) {echo $intro; } ?>"> 
				</td>
				</tr>


			<tr><td class="txt">Categorie : >
			</td>
			<td><select id="categorie" name="categorie">
				<option value="evenement">Evénement</option>
				<option value="orientation">Orientation</option>
				<option value="technologie">Technologie</option>
				<option value="campus">Campus</option>
				<option value="economie">Economie</option>
				<option value="environement">Environement</option>
				<option value="esport">Esport</option>
			</td></tr>
			<tr>
			<td>
				<label for="image">Image (url) :</label>
			</td>
			<td>    
				<input type="texte" name="image" placeholder="http://..." id="image"value="<?php if(isset($image)) {echo $image; } ?>"> 
			</td>
			</tr>
		<tr><td id="ck"> 
					<label for="corptexte">Votre article :</label>
			</td>
			<td>
				<textarea type="text" name="corptexte" placeholder="Redigez votre article" id="corptexte"value="<?php if(isset($corptexte)) {echo $corptexte;} ?>" ></textarea>
		</table>
			<br>
			<input type="submit" value="Envoyer l'article" name="formarticle"><br><br>
			<br>
			<br>
			
<?php
if (isset($erreur)) {
	# code...

 echo $erreur;} ?>
		</fieldset>
		
</center>
	</form>
   <div id="CGU">
   
      
<center>
<p id="CGU">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis quis ante sodales vehicula. Pellentesque hendrerit elit orci, ac ultricies nunc bibendum ac. Integer volutpat, dolor bibendum consectetur maximus, leo tellus posuere ipsum, eget fermentum sapien quam quis nibh. Mauris malesuada posuere arcu sit amet blandit. Praesent a porttitor massa. Sed iaculis dignissim dolor. Suspendisse purus velit, efficitur ac nunc condimentum, imperdiet malesuada eros. Vestibulum vel justo eu nisi egestas sollicitudin facilisis faucibus felis. Fusce consequat est enim, ac eleifend nisl tempus a. Phasellus ultrices a nunc non vulputate. Maecenas hendrerit eu neque eu vestibulum. Ut vitae ex scelerisque, pretium diam a, vehicula purus. Aliquam aliquam sollicitudin dapibus. Pellentesque eget ex egestas, sodales eros vitae, sodales augue. Vestibulum suscipit elementum nibh, at ullamcorper enim. Phasellus in odio at tortor pulvinar egestas.</p>
</center>
   </div>
   </a>
</body>
</html>
