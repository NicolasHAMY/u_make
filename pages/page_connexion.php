<?php
session_start();

/* ICI METTER LA CONNEXION BDD */



if (isset($_POST["formconnexion"])) {
	$mailconnect = htmlspecialchars($_POST["mailconnect"]);
	$mdpconnect = sha1($_POST["mdpconnect"]);
	if (!empty($mailconnect) AND !empty($mdpconnect)) {
		$requser = $bdd ->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
		$requser->execute(array($mailconnect, $mdpconnect));
		$userexist = $requser->rowCount();
		if($userexist == 1){
			$userinfo = $requser->fetch();
			$_SESSION["id"] = $userinfo["id"];
			$_SESSION["pseudo"] = $userinfo["pseudo"];
			$_SESSION["mail"] = $userinfo["mail"];
			header("Location: profil.php?id=".$_SESSION["id"]);

		}
		else{
			$erreur ="Mauvais mail ou mot de passe !";
		}


	}
	else{
		$erreur = "Tout les champs doivent être complétés !";
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8"></meta>
	<title>IMIE-Blog</title>
	<link rel="stylesheet" type="text/css" href="../style/page_connexion&page_mdp_oublier.css">
	<link rel="stylesheet" type="text/css" href="../style/slider.css">
	<link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEUtLS7///8YGBmbm5wgICHa2tonJyi3t7clJSbExMUGBgj7+/tubm53d3jt7e0rKywQEBJdXV09PT7l5eQ2NjdoaGkcHB1UVFXz8/OWlpaLi4vKysqDg4SioqIZGRsTExVHR0ipqapERER/f4BOTk+wsLE6OjpZWVvU1NTHx8ihoaJjY2NhdhqnAAAEM0lEQVR4nO3a0XqiOhQF4BBDiKhEK42oFcRq5dj3f7/DVJAN0tqOhhmd9X9zMRjZsASTEMsYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwGVSVfRty8nry91AkrpZyX0R15YzB1JucXW5W/D7TmUeX1uOe6TcytziDK+FhD+EhH/AP5BwSU6px6sGLeIkGZcSrkgLpw1GkXIJ/cBSQ8sZUi7fL4lFN6OJ2j9X1qdjyjgc9XZev+QdRqro+w17TUnDbj5U5jSQyhkpt61ejlmtXL7brrfYi/gGI/AlOiTK42mx7QdOg7uQebtivWmzZZquy5FPs6raG6vKeWflctF09ySsZxx7UXAyPN5wSqaDlhNyllKKrdvWEs2T45nyXVUuGh1zS5NGRYFh1NzxYD0i7WkGx4RmfXaVCoGaNU+x5MYfd3itpzkmVPpU7sWfnH10S2054nlCNfksheNkn2XPb9Un2ZpQb0i59+T5POK444Qy/Dzgl7JfX+OWhKx6ace0GZ5FfFYXz/KWCbVaNs/gu9Kk9S7V477jZR8vbPIs45dmxOzqUfhHCcXr7wZ0BhN1njDvSLSZC5Xf3vm9sda/Ijb2C5jVb2IjoWatfeX39P2zhGIulRRGSzlNw2D10RslzYhbq0N/I6EY/X5Axwl1I6HcO946OMRa8lCqp+IR2zQiDq1+ERsJ+eqahCPVSGjmziAf6xf8fcFZdTP69aPYfVJuJDSfDwff0OeNhLzotnqBM6LT8HrEUYcJBR28nN3s5L3Ww3pVw4Q2uCapJ9QB3SKHTWjEfYd3qaBzjsCXJ+KNnNFUqaphHdGGRsKQbEUb2mXGJOKmw56mltAlkw39RC+VoA3kMk3l5wkHr7UcWpze2elo8fOE7JsJB8PG47Aee23l7jZh9Hw2cdGiOLTLm013mDDa+1qpWMlYKq5Vks9zmE7M8c1pl7M2WwkHi00wmk0n+2w7yZ7el/wtNbIfHif5oy5n3tbu0nzcjz7+BYEzDZx+5uyWTnYcaWZ212u66mm+IO0+Av/5hK5vNeBfkPCQPHrCueV1485G/KhUrMRN3ekHd2K3K+1sxJ+FxUTW+IVy9dv2yrfdhLJ8GFv6Haxut7ObkJfV82uoRTxOEs65KYij+76GYlH+PwrcbOn1d2mazgsvR3ZXaazfpTPnosVd96XMzx49oRo+ekLGd4+eUIeXlpjvPSFTYduPo4+UkEn/69967j8h06b31WW0nvA/crA8IQ3yvdVEul7ampCxeNNzW3837yKheO1VtnJDtujPCTpckQY6CwnnpEGr0eG0taqWJzSP3xe9dhPb0zbBK5LpuNqqfbaavK22vqlNbY96OUKS91Hx3/E3mgAAAAAAAAAAAAAAAAAP4X+7fWjKRk09xAAAAABJRU5ErkJggg==" />

</head>

<body>

					<div id="slideshow">
                        <div id="sContent"><!--
                            --><li><img class="imgdef" src="../images/LogoIMIE.png" alt="Image bleue" width="475px"/></li><!--
                            --><li><img class="imgdef" src="../images/LogoIMIE.png" alt="Image verte" width="479px"/></li><!--
                            --><li><img class="imgdef" src="../images/LogoIMIE.png" alt="Image brune" width="483px"/></li>
                        </div>
                    </div>


		<div align="center" class="connexion">
			<form method="POST" action="">
				<h1>CONNEXION</h1>
				<form action="" method="post">
 				<center>
 		<label for="email">Email</label>
 		<input type="email" name="mailconnect" placeholder="Mail" value="<?php if(isset($mailconnect)) {echo $mailconnect; } ?>"><br><br>
 		<label for="password">Mot de passe</label>
 		<input type="password" name="mdpconnect" placeholder="Mot de passe"><br><br>
		<input type="submit" value="Se connecter" name="formconnexion"><br>
				<input type="checkbox" id="ssdm" name="ssdm">
				<label for="ssdm">se souvenir de moi</label>
				</p>
				<p>
				<input type="checkbox" id="ca" name="ca">
				<label for="ca">connexion automatique</label>
				</p>
				<input type="submit" value="Se connecter" name="connexion">
			</center>
			</form>
			<br>
		</div>
</body>
</html>
