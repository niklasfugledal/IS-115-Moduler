<h1>Oppgave 3</h1>
<form action="oppgave3.php" method="get">
    <input type="text" name="Saldo" placeholder="Startsaldo:"></input><br>
    <input type="text" name="Rente" placeholder="Rente:"></input><br>
    <input type="submit" name="submit"></input>
</form>

<?php

//Sjekker at  "submit" blir trykket og henter verdien fra variablene
if(isset($_GET["submit"])) {


    $Saldo = $_GET["Saldo"];
    $Rente = $_GET["Rente"];

    echo "Innputt: $Saldo og $Rente <br><br>";

    /*
    for loop som regner ut summen, diff og gjennomsnittet. Tall 1 blir også 1 større for hver gang loopen går
    Oppdaterer saldo med å gange saldo, rente og år og dele på 100
    $nySaldo variabel for å finne ny saldo etter hvert år med å summere $saldo og $sum.
    */
    for($år = 1; $år <=10; $år ++) {
        
        echo "Startsaldo: $Saldo kr <br> Rente: $Rente % <br>";
        $sum = ($Saldo*$Rente*$år) / 100;
        $nysaldo = $Saldo + $sum;
        

        echo "Etter $år år er ny saldo = " . " $nysaldo kr. <br><br>";
    }

}   

echo "<br>";


?>

<a href="http://localhost/IS-115Moduler/Modul3/index.html">Tilbake til hovedsiden</a>