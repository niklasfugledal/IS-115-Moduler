<!DOCTYPE html>
<html>
    <h1>Oppgave 4</h1>
    <label>Kalkulere alderen til en person. Skriv med bindestrek (DD-MM-YYYY)</label>
    <form action="Oppgave4.php" method = "get">
    <input type = "text" name = "bdag" placeholder="DD-MM-YYYY">
    <input type = "submit" name = "submit">
    <hr>
    </form>


    <?php

    if(isset($_GET["submit"])) {

    //Definerer bursdagen med get metoden slik at det som skriver i input blir brukt.
    $DateOfBirth = $_GET["bdag"];

    // Dagens dato
    $now = date("y-m-d");

    // Kalkulerer forskjellen mellom de to datoene som blir brukt
    $diff = date_diff(date_create($DateOfBirth), date_create($now));


    //Kalkulerer alderen i år og dager med bruk av $diff og formatet ( y. m og d ).
    //Tok med M fordi det var utrolig vanskelig å finne ut hvordan man kun har dager og år og gjøre måndene om til dager
    echo "Alderen din er " . $diff->format('%y'). " år, " . $diff->format('%m'). " måneder og " . $diff->format('%d'). " dager. ";
    echo "<br><br>";

   }

    ?>

    <a href="http://localhost/Modul2/index.html">Tilbake til hovedsiden</a>


</html>
