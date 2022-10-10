<?php

//Liste med alle spillere, her er key-en navnet til spilleren og value er poengene utdelt.
//En associative array

$players = array(
    "Niklas" => "0",
    "Kasper" => "0",
    "Tobias" => "0",
    "Hedvig" => "0",
    "Ingebjørg" => "0",
    "Sondre" => "0",
    "Simen" => "0",
    "Stian" => "0",
    "Markus" => "0",
    "Øyvind" => "0"
);

//Lister opp deltakerene før spillet starter
echo "Deltakere: <br>";
foreach($players as $key => $value)
{
    echo $key . " |";
}

    echo "<br><br><br>";

//Spillet starter, spillet går i en while loop til det kun er en spiller igjen.
$round = 0;
while (count($players) > 1) 
{
    $round++;

    echo "<br>" . "<b>Round " . $round . "</b><br>";

    //lister opp spillerene og legger til poeng til hver av dem
    foreach ($players as $key => $value) 
    {    
        $number = rand(1, 50);
        $players[$key] = $value = $value + $number;
            
    }

    //sorterer assosiative matriser i stigende rekkefølge, i henhold til verdien av nøklene
    asort($players);

    //Lister opp spillerne etter poeng
    foreach($players as $name => $points)
    {
        echo "$name: $points poeng |";
    }

        echo "<br>";

    //fjerner spiller med lavest poeng fra arrayen/listen
    $remove = array_splice($players, 0, 1);

    //viser frem den spilleren som ryker i spillet
    foreach($remove as $name => $points)
    {
        echo "Den som ryker ut er, $name med $points poeng.";

    }
        echo "<br>";


}

//Lister opp vinneren nå som det kun er en deltaker igjen
foreach($players as $name => $points)
{
    echo "Vinneren er $name med $points poeng.";
}

    echo "<br>";


echo '<br>The winner is: '. key($players);
echo "<br><br>";

?>

<a href="http://localhost/Modul4/index.html">Tilbake til hovedsiden</a>
