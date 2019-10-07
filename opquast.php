<?php
include "glossaire.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>&rarr; GLOSSAIRE OPQUAST	&larr;</h1>
	<br>
	<a href="" title="Rafraichir..."><input type="button" name="newdef" value="Glossaire aléatoire"> </a>
	<br>
	
	<div id="titre">
	<?php
	// var_dump($glossaire);
	//int count ( mixed $glossaire [, int $mode= COUNT_NORMAL ] )
	//echo count($glossaire);
	//echo $glossaire[array_rand(0,148)];
	//echo $glossaire{rand(0,148)};
	//echo '<pre>';
	$index = rand(0, count($glossaire) - 1);
	echo $glossaire[$index]['title'] . "<br>" . "<br>";
	?>
	</div>
	<br>
	<div id="contenu">
	<?php
	echo $glossaire[$index]['description'];
	echo "<br>";
	//echo $glossaire[1]['title'];

	//echo $glossaire[rand(0,148)]['title'];

	//echo '</pre>';
	?>
	</div>
	<br>
	
</body>
</html>