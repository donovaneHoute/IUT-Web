<!DOCTYPE HTML>
<!-- Appeler ce script depuis le formulaire -->
<html>
<head>
	<title>Liste des variables reçues</title>
	<meta name="author" lang="fr" content="Jean Carle">
	<meta charset="utf-8">
</head>
<body>
<h1>Liste des variables</h1>
<?php
	if (count($_GET)==0):
		echo "<p>Aucunes variables GET</p>";
	else:
		// echo "<pre>".nl2br(htmlspecialchars(print_r($_GET, true)))."</pre>\n";
		echo "<p>Il y a <strong>".count($_GET)." variable(s) GET valide(s) :</strong></p>\n";
		echo "<table>";
		reset ($_GET);
		foreach($_GET as $key => $val) {
			echo "<tr><td>-</td><td>".nl2br(htmlspecialchars($key))."</td><td>: ".nl2br(htmlspecialchars($val))."</td></tr>\n";
		}
		echo "</table>";
	endif;
	echo "<hr>";
	if (count($_POST)==0):
		echo "<p>Aucunes variables POST</p>";
	else:
		// echo "<pre>".nl2br(htmlspecialchars(print_r($_POST, true)))."</pre>\n";
		echo "<p>Il y a <strong>".count($_GET)." variable(s) GET valide(s) :</strong></p>\n";
		echo "<table>";
		reset ($_POST);
		foreach($_POST as $key => $val) {
			echo "<tr><td>-</td><td>".nl2br(htmlspecialchars($key))."</td><td>: ".nl2br(htmlspecialchars($val))."</td></tr>\n";
		}
		echo "</table>";
	endif;
?>
</body>
</html>
