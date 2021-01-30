<?php
	if(isset($_POST['comentariu'])){
	$colectare = $_POST['comentariu'];
	$conectare = mysqli_connect('localhost','root','','text'); 
	$sql = "INSERT INTO comentariu (text) VALUES ('$colectare')";
	$result = mysqli_query($conectare, $sql);
	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie-edge" />
	<title>Proiect Tehnologii Web</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
				<!-- bara de navigare -->
	<header>
		<nav>
			<ul class="navbar">
				<li><a href="home.php"> Acasa </a></li>
				<li><a href="tricouri.php"> Tricouri </a></li>
				<li><a href="cani.php"> Cani </a></li>
				<li><a href="contact.php"> Contact </a></li>
			</ul>
		</nav>	
	</header>

  <form method="POST">
  	<p id="desprepg"> Spune-ti opinia despre produsele noastre mai jos </p>

  	<div>

  	<textarea class="input" name="comentariu"> Lasa un comentariu... </textarea>
    
    </div>
    
    <input type="submit" name="Trimite" value="Trimite" id="buton">
  </form>

  
</body>
</html>