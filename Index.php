<?php
	
	//initialisation de la session
	session_start();
	
	//on choisit le fichier et on écrit sur les deux premières lignes
	$file="Identifiants.txt";
	$fileopen=(fopen($file,"a+"));
	fwrite($fileopen,"Darkevin666".PHP_EOL);
	fwrite($fileopen,"j3su1str0d4rk".PHP_EOL);
	
	//on transfère le contenu du fichier dans un tableau puis on extrait les valeurs pour les stocker dans la session
	$read=file($file);
	$_SESSION['identifiant']= $read[0];
	$_SESSION['motdepasse']= $read[1];
	
	//on referme le fichier texte
	fclose($fileopen);
	
	//initialisation de tous les cookies nécessaires pour contenir 5 formulaires différents
	setcookie('titre_debut','',time() + 365*24*3600);
	setcookie('pseudo1','',time() + 365*24*3600);
	setcookie('titre1','',time() + 365*24*3600);
	setcookie('message1','',time() + 365*24*3600);
	setcookie('checkpoint1','',time() + 365*24*3600);
	setcookie('pseudo2','',time() + 365*24*3600);
	setcookie('titre2','',time() + 365*24*3600);
	setcookie('message2','',time() + 365*24*3600);
	setcookie('checkpoint2','',time() + 365*24*3600);
	setcookie('pseudo3','',time() + 365*24*3600);
	setcookie('titre3','',time() + 365*24*3600);
	setcookie('message3','',time() + 365*24*3600);
	setcookie('checkpoint3','',time() + 365*24*3600);
	setcookie('pseudo4','',time() + 365*24*3600);
	setcookie('titre4','',time() + 365*24*3600);
	setcookie('message4','',time() + 365*24*3600);
	setcookie('checkpoint4','',time() + 365*24*3600);
	setcookie('pseudo5','',time() + 365*24*3600);
	setcookie('titre5','',time() + 365*24*3600);
	setcookie('message5','',time() + 365*24*3600);
	setcookie('checkpoint5','',time() + 365*24*3600);
	
?>
	

<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Mon blog un peu naze</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<script src="script.js"></script>
</head>

<body>

	<header>
		<h1>Le blog du partage et de l'amour</h1>
	</header>

	<div>
		<?php
		
			if (isset($_POST['id']) and isset($_POST['mdp']))
			{
				if ($_SESSION['identifiant']!=$_POST['id'] OR $_SESSION['motdepasse']!=$_POST['mdp'])
				{
					echo "L'identifiant ou le mot de passe est incorrect, veuillez réessayer.";
				}
				else
				{
					echo '<a href="Forum.php" >Accéder au forum</a>'; //un lien vers la page contenant le formulaire et les publications
				}
			}
		
		?>
	</div>
	
	<footer id="log" >
			<p>Identifiez vous !</p>
			<form action="#" method="POST" >
				<p>
					<label for="pseudo">Identifiant : </label><Input type="text" name="id" />
				</p>
				<p>
					<label for="titre">Mot de passe : </label><Input type="text" name="mdp" />
				</p>
				<p>
					<Input type="submit" value="Publier" />
				</p>
			</form>
		</footer>
	
</body>

</html>
