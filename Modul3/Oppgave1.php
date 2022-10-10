<html>
<h1> Oppgave 1 </h1>
<label>Sjekke om en person er myndig eller ikke</label><br><br>
<form action="Oppgave1.php" method = "get">
<label>Navn</label>
<input type = "text" name = "name"><br>
<label>Alder</label>
<input type = "number" name = "age"><br>
<input type = "submit" name = "submit">
</form>
<hr>
</html>

<?php

/*
Sjekker om submit blir trykket og bruker variablene name og age til å printe verdien.
Funksjonen strtolower gjør en string lowercase
*/
if(isset($_GET["submit"])) {
    $name = ucwords(strtolower($_GET["name"]));
    $age = $_GET["age"];


    // Sjekker om $age er større eller det samme som 18 og printer ut myndig.
    if($age >= 18) {

        echo "$name er $age og dermed myndig!";
        echo "<br><br>";

    //Hvis ikke printer den ut ikke mynding
    }else
    {
        echo "$name er $age dermed ikke myndig!";
        echo "<br><br>";

    }
}

?>

<a href="http://localhost/Modul3/index.html">Tilbake til hovedsiden</a>