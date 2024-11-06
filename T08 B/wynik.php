<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Podsumowanie zamówienia</title>
</head>

<body>

<?php

$paczki = $_POST['a'];
$chleb = $_POST['b'];
$rogale = $_POST['c'];
$suma = 0.99 * $paczki + 1.29 * $chleb + 2.99 * $rogale;

echo<<<END

	<h2>Podsumowanie zamówienia</h2>
	
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td>Pączek (0.99PLN/szt)</td> <td>$paczki</td>
	</tr>
	<tr>
		<td>Chleb (1.29PLN/szt)</td> <td>$chleb</td>
	</tr>
	<tr>
		<td>Rogale (2.99PLN/szt)</td> <td>$rogale</td>
	</tr>
	<tr>
		<td>SUMA</td> <td>$suma PLN</td>
	</tr>	
	</table>
	<br /><a href="index.php">Powrót do strony głównej</a>

END;

?>

</body>
</html>