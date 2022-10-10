<h1>Oppgave 4</h1>

<?php
//Definere array 0-9 index
$arr = array(1,2,3,4,5,6,7,8,9,10);

print_r($arr);
echo "<br><br>";

//Bytte verdiene i arrayen
$arrChange = array(10,11,12,13,14,15,16,17,18,19);
$arr = array_replace($arr, $arrChange);

print_r($arr);
echo "<br><br>";

//Nytt startpunkt for arrayen
$newStartIndex = 10;

//re-indexerer arrayen. Nå starter den nye på 10 og ikke 0.
$arr = array_combine(range($newStartIndex, count($arr) + ($newStartIndex -1)), array_values($arr)); 

//printer ut arrayen på en oversiktlig måte
print_r($arr);
echo "<br><br>";

?>

<a href="http://localhost/Modul4/index.html">Tilbake til hovedsiden</a>