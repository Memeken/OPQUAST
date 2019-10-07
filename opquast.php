<?php
include "glossaire.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="" title="Rafraichir..."><input type="button" name="newdef" value="Glossaire aléatoire"> </a>
	<br>
	<?php
	// var_dump($glossaire);
	//int count ( mixed $glossaire [, int $mode= COUNT_NORMAL ] )
	//echo count($glossaire);
	//echo $glossaire[array_rand(0,148)];
	//echo $glossaire{rand(0,148)};
	//echo '<pre>';
	$index = rand(0, count($glossaire) - 1);
	echo $glossaire[$index]['title'] . "<br>";
	echo $glossaire[$index]['description'];
	echo "<br>";
	echo $glossaire[1]['title'];

	//echo $glossaire[rand(0,148)]['title'];

	//echo '</pre>';
	?>
</body>
</html>