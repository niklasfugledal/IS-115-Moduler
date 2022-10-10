<h1> Oppgave 5 </h1>

<form action = "Oppgave 5.php" metod = "get">

    <label>Innputt av antall sekunder</label><br>
    <input type = "text" name = "Sekunder" placeholder="For eksempel 4400"></input><br><br>
    <input type = "submit" name = "submit"></input><br><br>


</form>


<?php

$Sek = @$_GET["Sekunder"];

$Sekunder = $Sek%60;
$Minutter = floor(($Sek%3600)/60);
$Timer = floor(($Sek%86400)/3600);

echo $Sek . " Sekunder består av: <br>";
echo "$Timer timer, $Minutter, minutter, $Sekunder og sekunder. <br><br>";

?>      

<br>

<a href="http://localhost/Modul%201/index.html">Tilbake til hovedsiden</a>
