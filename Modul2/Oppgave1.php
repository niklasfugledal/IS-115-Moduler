<!DOCTYPE html>
<html>
<h1> Oppgave 1 </h1> <br>

<body>
    <form action = "Oppgave1.php" method = "get">
    <label> Etternavn (lower case) </label><br>
    <input type = "text" name = "name" placeholder="Etternavn"></input><br>
    <input type = "submit" name = "submit"></input><br>

    </form>
    <hr>     

<?php

// En if isset statement som sjekker om det er en verdi eller ikke i "submit" (koden kjører hvis submit presses)

if(isset($_GET["submit"])) {

    $Etternavn = $_GET["name"];
    echo ucwords(strtolower($Etternavn));
    echo "<br>";
    echo strlen($Etternavn);
    echo "<br><br>";    
    echo "Etternavnet er " . ucwords(strtolower($Etternavn)).  " og lengden i etternavnet er " . strlen($Etternavn);
    echo "<br><br>";
}


?>

<a href="http://localhost/IS-115Moduler/Modul2/index.html">Tilbake til hovedsiden</a> 


</body>
</html>

