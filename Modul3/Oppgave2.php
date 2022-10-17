<html>
<h1> Oppgave 2 </h1>


<?php



//to variabler med sum satt til null og en loop med empty string.
$sum = 0;
$loop = "";

//for løkke som går fra 0-9 og teller antall ganger den looper
for($i=0; $i<=9; $i++) {


    //Legger til summen og antall runder loopet og printer ut til 9
    //Stopper på nummer 9 pga (9=) som indikerer at dette er maks den skal telle til
    $sum = $sum + $i;
    $loop .= $i == 9? "<br> Loop nummer $i. Ferdig med å telle! Summen ble $sum." : "Loop nummer $i.  = Summen er nå $sum. <br>";
    
}

echo "$loop";
echo "<br><br>";

?>

<a href="http://localhost/IS-115Moduler/Modul3/index.html">Tilbake til hovedsiden</a>