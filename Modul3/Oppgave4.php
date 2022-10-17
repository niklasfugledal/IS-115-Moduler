<html>
<h1>Oppgave 4</h1>
<label>Kommune:</label>
<form action="Oppgave4.php" method = "get">
<input type = "text" name = "kommune">
<input type = "submit" name = "submit">
<hr>
</form>

<?php

//Sørger for at brukeren fyller ut form-en på siden.
if(isset($_GET["submit"])) {

    //Sørger for at innputten blir formatert riktig.
    @$kommune = ucwords(strtolower($_GET["kommune"]));


    //Switch som responderer på de forskjellige case-ene.
    switch($kommune){
        case "Kristiansand";
        echo "$kommune kommune ligger i Agder fylke.";
        break;
        case "Lillesand";
        echo "$kommune kommune ligger i Agder fylke.";
        break;
        case "Birkenes";
        echo "$kommune kommune ligger i Agder fylke.";
        break;
        case "Harstad";
        echo "$kommune kommune ligger i Troms og Finnmark fylke.";
        break;
        case "Kvæfjord";
        echo "$kommune kommune ligger i Troms og Finnmark fylke.";
        break;
        case "Tromsø";
        echo "$kommune kommune ligger i Troms og Finnmark fylke.";
        break;
        case "Bergen";
        echo "$kommune kommune ligger i Vestland fylke.";
        break;
        case "Trondheim";
        echo "$kommune kommune ligger i Trøndelag fylke.";
        break;
        case "Bodø";
        echo "$kommune kommune ligger i Nordland fylke.";
        break;
        case "Alta";
        echo "$kommune kommune ligger i Trom og Finnmark fylke.";
        break;
        default:
        echo "Den oppgitte kommunen er ikke lagt inn i systemet . Kommunen du søkte etter: $kommune";
    }
    
}

echo "<br><br>";


?>

<a href="http://localhost/IS-115Moduler/Modul3/index.html">Tilbake til hovedsiden</a>