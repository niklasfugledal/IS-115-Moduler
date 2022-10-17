<h1>Oppgave 1</h1>

<?php

//Definere array
$arr = array(
    0=> "index 0",
    3=> "index 3",
    5=> "index 5",
    7=> "index 7",
    8=> "index 8",
    15=> "index 15",
);

//Printer ut arrayen der man kan både se key og value
print_r($arr);
echo "<br><br> Printer ut verdiene av array-en: <br>";

//looper gjennom arrayen og skriver ut verdiene.
foreach($arr as $key => $value) {
    echo "Nøkkel: $key. Verdi: $value <br>";
}

    echo "<br><br>";

?>

<a href="http://localhost/IS-115Moduler/Modul4/index.html">Tilbake til hovedsiden</a>