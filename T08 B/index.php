<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Piekarnia</title>
</head>
<style>
    body{
        text-align: center;
        background-color: #2b2b2b;
        color: #29aeff;
        margin: 10px;
        padding: 20px;
    }

    table{
        margin-left: auto;
        margin-right: auto;
        background-color: white;
        color: black;
        border-radius: 10px;
        border: 
    }
    h1{
        background-color: #252525;
    }

    #odzielenie{
        background-color: #252525;
        
    }

    #srodek {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .baton {
        background: #29aeff;
        position: relative;
        padding: 5px 15px;
        display: flex;
        align-items: center;
        font-size: 17px;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        border: 1px solid rgb(40, 144, 241);
        border-radius: 25px;
        outline: none;
        overflow: hidden;
        color: rgb(255, 255, 255);
        transition: color 0.3s 0.1s ease-out;
        text-align: center;
        align-content: center;
    }

    .baton:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .baton:hover {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        background-color: white;
        color: #00afff;
    }
    .i1 {
        padding: 10px;
        border: 2px solid #101010;
        border-radius: 5px;
        font-size: 16px;
        color: #00afff;
        outline: none;
        background-color: #252525;
        width: 30%;
    }

    .i1:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        background-color: white;
    }



    }

</style>
<body>

<h1 id="r" class="animowane">Piekarnia</h1>
<form action="index.php" method="post">

    <input type="number" name="a" min="0" class="i1" placeholder="Ile pączków (0.99 PLN/szt):"/>
    <br /><br />

    <input type="number" name="b" min="0" class="i1" placeholder="Ile chleba (1.29 PLN/szt):"/>
    <br /><br />

    <input type="number" name="c" min="0" class="i1" placeholder="Ile rogali (2.99 PLN/szt):"/>
    <br /><br />
    <div id="srodek">
        <input type="submit" value="Wyślij zamówienie" class="baton" />
    </div>

</form>

<section class="wynik">
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $paczki = $_POST['a'];
        $chleb = $_POST['b'];
        $rogale = $_POST['c'];
        $suma = 0.99 * $paczki + 1.29 * $chleb + 2.99 * $rogale;

        echo <<<END

	<h2>Podsumowanie zamówienia</h2>
	
	<table cellpadding="10" cellspacing="0">
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


END;
    }
    ?>

</section>
<br>
<br>
<br>
<div id="odzielenie"><h2>Autor: Oliwier Pawlik 3P_2</h2></div>

</body>
</html>