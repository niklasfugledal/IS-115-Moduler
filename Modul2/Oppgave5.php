<!DOCTYPE html>
<html>
    <h1>Oppgave 5</h1>
    <label>Generer et tilfeldig passord på åtte tegn med minst en stor bokstav og et tall</label><br><br>
    <form action ="Oppgave5.php" method="POST">
    <input type = "submit" name = "generer" value = "Generer">
    <hr>
    </form>
    <body>

    <?php

    //If isset som bekrefter at når "generer" blir trykket er det en verdi inni den som gir true.
    //Variablene har funksjon substr som tar med en angitt del av stringen og str_shuffle funksjonen gjør dem tilfeldige
    //$random_generer variablene setter sammen variablene og blir brukt i echo for å printe ut resultatene

    if(isset($_POST["generer"])) {

        $stor_bokstav = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $liten_bokstav = "abcdefghijklmnopqrstuvwxyz";
        $tall = "0123456789";

        $generer_stor_bokstav = substr(str_shuffle($stor_bokstav),0,1);
        $generer_liten_bokstav = substr(str_shuffle($liten_bokstav),0,3);
        $generer_tall = substr(str_shuffle($tall),0,4);

        $random_generer = "$generer_stor_bokstav$generer_liten_bokstav$generer_tall";

        echo " Passord: " .$random_generer = substr(str_shuffle($random_generer),0,8);
        echo "<br><br>";

    }
    ?>

    <a href="http://localhost/IS-115Moduler/Modul2/index.html">Tilbake til hovedsiden</a>

</body>
</html>




