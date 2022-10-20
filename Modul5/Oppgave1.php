<h1>Oppgave 1</h1>
<h2>Finne gjennomsnitt og standardaavik fra 4 tall som parameter</h2>

<?php
/*
Finne standardavvik
$count variabel som teller parameteret som blir brukt i array.
foreach løkke som bruker pow funksjon som returnerer x opphøyd i y
*/
function find_sd($a)
{
    $count = count($a);
    $v = 0;
    $avg = array_sum($a) / $count;

    foreach ($a as $i) 
    {
        $v += pow(($i - $avg), 2);
    }
    return sqrt($v / $count);
}

//Definere array og parameter verdi
$a = array(5, 9, 4, 3,);
//regner ut gjennomsnittet
$average = array_sum($a) / count($a);
$num = '';
foreach ($a as $x) 
{
    $num = $num ." " . $x;
}
//printer ut gjennomsnitt og standardavvik.
$sd = find_sd($a);
echo "Gjennomsnittet av tallene $num er $average";
echo "<br><br>";
echo "Standardavvik for tallene $num er $sd";
echo "<br><br>";
?>


<a href="./index.html">Tilbake til hovedsiden</a>