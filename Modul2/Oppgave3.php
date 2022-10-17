<html>
    <h1>Oppgave 3</h1>
    <label>Finne ordet IS setningen (Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise.)</label>
    <br><br>
    <form action = "Oppgave3.php" method="get">
    <input type = "submit" name = "submit" value="Sjekk svaret">
    <hr>
    </form>
    <body>


<?php
    
    if(isset($_GET["submit"])) {

    
    // substr_count teller antall ganger $text med spesifikasjonen ''
    $text = $_GET["submit"];
    $text = "Thereses familie skulle ha ris til middag. Hun ville heller ha en is å spise.";
    $antall = substr_count($text, 'is');

    echo " Det er " . $antall. " ganger ord-kombinasjonen (is) dukker opp i setningen.";
    echo "<br><br>";

    }

?>



    <a href="http://localhost/IS-115Moduler/Modul2/index.html">Tilbake til hovedsiden</a>

    </body>
</html>


