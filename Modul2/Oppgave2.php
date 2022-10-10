<!DOCTYPE html>
<html>
<h1>Oppgave 2</h1>
<body>
    <form action="Oppgave2.php" method="get">
    <label>Fjerner forskjellige HTML tags</label><br>
    <input type = "text" name = "name" value = "<h1>Niklas</h1> <h1>Fugledal</h1>"></input><br>
    <input type = "submit" name = "submit"><br>
    </form> 
    <hr>



<?php

if(isset($_GET["submit"]))
{

@$Etternavn= $_GET["name"];

//htmlentities printer ut innholdet i variabelen med HTML entitetene.
echo htmlentities($Etternavn) . " <h3>(Printer ut med HTML tags.)</h3> <br>";

//Printer ut innholdet i variabelen
echo $Etternavn . "<h3>(printer ut innholdet i variabelen.)</h3><br><br>";

//Strip_tags funksjonen fjerner potensiell HTML kode
echo strip_tags($Etternavn) . "<br> <h3>(fjerner HTML tags fra variabelen.)</h3>";

}


?>
<a href="http://localhost/Modul2/index.html">Tilbake til hovedsiden</a>




</body>
</html>