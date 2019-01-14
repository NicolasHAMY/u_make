<!-- TEMPLATE : https://nathangracia863.wixsite.com/imieblog -->

<!DOCTYPE html>
<html>
<script>
	windows.location.assign("Inscription.html")
</script>
<head>
	<meta charset="UTF-8"/>	
	<title>IMIE-Blog</title>
	<link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAhFBMVEUtLS7///8YGBmbm5wgICHa2tonJyi3t7clJSbExMUGBgj7+/tubm53d3jt7e0rKywQEBJdXV09PT7l5eQ2NjdoaGkcHB1UVFXz8/OWlpaLi4vKysqDg4SioqIZGRsTExVHR0ipqapERER/f4BOTk+wsLE6OjpZWVvU1NTHx8ihoaJjY2NhdhqnAAAEM0lEQVR4nO3a0XqiOhQF4BBDiKhEK42oFcRq5dj3f7/DVJAN0tqOhhmd9X9zMRjZsASTEMsYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwGVSVfRty8nry91AkrpZyX0R15YzB1JucXW5W/D7TmUeX1uOe6TcytziDK+FhD+EhH/AP5BwSU6px6sGLeIkGZcSrkgLpw1GkXIJ/cBSQ8sZUi7fL4lFN6OJ2j9X1qdjyjgc9XZev+QdRqro+w17TUnDbj5U5jSQyhkpt61ejlmtXL7brrfYi/gGI/AlOiTK42mx7QdOg7uQebtivWmzZZquy5FPs6raG6vKeWflctF09ySsZxx7UXAyPN5wSqaDlhNyllKKrdvWEs2T45nyXVUuGh1zS5NGRYFh1NzxYD0i7WkGx4RmfXaVCoGaNU+x5MYfd3itpzkmVPpU7sWfnH10S2054nlCNfksheNkn2XPb9Un2ZpQb0i59+T5POK444Qy/Dzgl7JfX+OWhKx6ace0GZ5FfFYXz/KWCbVaNs/gu9Kk9S7V477jZR8vbPIs45dmxOzqUfhHCcXr7wZ0BhN1njDvSLSZC5Xf3vm9sda/Ijb2C5jVb2IjoWatfeX39P2zhGIulRRGSzlNw2D10RslzYhbq0N/I6EY/X5Axwl1I6HcO946OMRa8lCqp+IR2zQiDq1+ERsJ+eqahCPVSGjmziAf6xf8fcFZdTP69aPYfVJuJDSfDwff0OeNhLzotnqBM6LT8HrEUYcJBR28nN3s5L3Ww3pVw4Q2uCapJ9QB3SKHTWjEfYd3qaBzjsCXJ+KNnNFUqaphHdGGRsKQbEUb2mXGJOKmw56mltAlkw39RC+VoA3kMk3l5wkHr7UcWpze2elo8fOE7JsJB8PG47Aee23l7jZh9Hw2cdGiOLTLm013mDDa+1qpWMlYKq5Vks9zmE7M8c1pl7M2WwkHi00wmk0n+2w7yZ7el/wtNbIfHif5oy5n3tbu0nzcjz7+BYEzDZx+5uyWTnYcaWZ212u66mm+IO0+Av/5hK5vNeBfkPCQPHrCueV1485G/KhUrMRN3ekHd2K3K+1sxJ+FxUTW+IVy9dv2yrfdhLJ8GFv6Haxut7ObkJfV82uoRTxOEs65KYij+76GYlH+PwrcbOn1d2mazgsvR3ZXaazfpTPnosVd96XMzx49oRo+ekLGd4+eUIeXlpjvPSFTYduPo4+UkEn/69967j8h06b31WW0nvA/crA8IQ3yvdVEul7ampCxeNNzW3837yKheO1VtnJDtujPCTpckQY6CwnnpEGr0eG0taqWJzSP3xe9dhPb0zbBK5LpuNqqfbaavK22vqlNbY96OUKS91Hx3/E3mgAAAAAAAAAAAAAAAAAP4X+7fWjKRk09xAAAAABJRU5ErkJggg==" />
	<link rel="stylesheet" href="./style/pagecss.css" /> <!--pour la page en général-->
	<link rel="stylesheet" href="./style/slider.css" /> <!-- pour les slides-->
	<link rel="stylesheet" href="./style/co.css" /> <!-- pour connexion -->
</head>

<body>
	<h4 id="insco"> 
	
	<button .style.display='block'" style="width:auto;"><a href="./pages/page_inscription.php" style="color:#FFFFFF;"> Inscription  </a></button>
	<!-- Bouton connexion -->
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Connexion</button>
	</h4>
	
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Entrez votre email" name="uname" required>

      <label for="psw"><b id="mdp">Mot de passe</b></label>
      <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>
        
      <button type="submit">Connexion</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Fermer</button>
      <span class="psw"><a href="#">Mot de passe oublié ?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- fin bouton connexion-->

<!-- slide -->
	<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="./images/LogoIMIE.png" style="width:100%">
  <div class="text"> <TEXTE> </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="./images/LogoIMIE.png" style="width:100%">
  <div class="text"> <TEXTE> </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="./images/LogoIMIE.png" style="width:100%">
  <div class="text"> <TEXTE> </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!-- fin slide -->

	 <h1 id="titre"> IMIE-blog </h1>
	<img id="logoIMIE" src="./images/LogoIMIE.png">
<!-- menu hamburger-->
		<?php include("portion/menu.html"); ?>

<!-- barre de recherche-->	 
<?php include("portion/menu_smartphone.html"); ?>


	<div id="cadre">
                
			<form action="" class="formulaire">
			<input class="champ" type="text" value="(Recherche...)"/>
			<input class="bouton" type="button" value= "Chercher"
		 
			</form>
	</div>
	
	
	<!-- <h3> NEWS </h3></br> -->
	<div id="cadre">
	<table class="table">
	<tr>
	<th class="textcadre" id="nep"> Actualités : </th>
	</tr>
	<tr>
	<td> <a href="./pages/page_campus.php" title="#"> Campus </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="./pages/page_evenement.php" title="#"> Evenement </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="#" title="#"> Orientation </a>
	</td>
	</tr>	
	</table>
	</div>
		
	<!-- <h3> Veille Techno </h3></br> -->
	<div id="cadre">
	<table class="table">
	<tr>
	<th class="textcadre"> Veille Technologique : </th>
	</tr>
	<tr>
	<td> <a href="#" title="#"> Technologie </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="#" title="#"> Economie </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="#" title="#"> Esport </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="#" title="#"> Environnement </a>
	</td>
	</tr>
	</table>
	</div>
	
	<!-- <h3> Recherche et developpement </h3></br>	-->
	<div id="cadre">
	<table class="table">
	<tr>
	<th class="textcadre"> Contacts : </th>
	</tr>
	<tr>
	<td> <a href="#" title="#"> Partenaires </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="https://www.linkedin.com/school/imie/" title="#"> LinkedIn </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="https://twitter.com/EcoleIMIE" title="#"> Twitter </a>
	</td>
	</tr>	
	<tr>
	<td> <a href="https://www.facebook.com/IMIE.IT/" title="#"> Facebook </a>
	</td>
	</tr>
	</table>
	</div>
	
	<!-- <h3> Contacts </h3></br> -->
	<div id="cadre">
	<table class="table">
	<tr>
	<th class="textcadre" id="conp"> Case Mystère : </th>
	</tr>
	<tr>
	<td> <a href="#" title="#"> > Explorons ! </a>
	</td>
	</tr>	
	<!-- <tr>
	// <td> <a href="#" title="#"> . </a>
	// </td>
	// </tr>	
	// <tr>
	// <td> <a href="#" title="#"> . </a>
	// </td>
	// </tr>	
	// <tr>
	// <td> <a href="#" title="#"> . </a>
	// </td>
	</tr> -->
	</table>
	</div>
	
	<!-- Pied de page-->
	<div id="pied_de_page">
		<center>
			<p> - <a href="Mentions_legal.html" >Mention légale</a> - <a href="CGU.html" >CGU</a> - </p>
			<img src="images\logo2.png" alt="Logo Imiesphere" id="logem"></p>
		</center>
  </div>
	
</body>

</html>
