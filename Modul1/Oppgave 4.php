<h1>Oppgave 4</h1>

<form action="oppgave 4.php" method="get">
    <input type="text" name="num1" placeholder="For eksempel: 10"></input>
    <input type="text" name="num2" placeholder="For eksempel: 5"></input>
    <input type="submit" name="submit"></input>
</form>


<?php

$num1 = @$_GET["num1"];
$num2 = @$_GET["num2"];

$diff = abs($num1 - $num2);

    echo "Summen = " . $num1 + $num2 . "<br>";
    echo "Differansen = " . $diff . "<br>";
    echo "Gjennomsnittet = " . ($num1 + $num2) / 2 . "<br><br>";
?>

<a href="http://localhost/Modul%201/index.html">Tilbake til hovedsiden</a>






        





