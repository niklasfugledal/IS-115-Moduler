<!DOCTYPE html>
<html>
    <head>
        <h1>Oppgave 3</h1>
    </head>
<body>

    <?php
    $name = "Niklas Fugledal";
    $age = 23;
    ?>


<style> 
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
    }
</style>


<?php
   
   echo "
    <table>
    <tr>
        <th>Navn</th>
        <th>Alder</th>
    </tr>
    <tr>
        <td>$name</td>
        <td>$age</td>
    </tr>
    </table>
    ";

    echo "
    <ol>
        <li>$name</li>
        <li>$age</li>
    </ol>
    ";

    echo "
    <ul>
        <li>$name</li>
        <li>$age</li>
    </ul>
    ";

    ?>

<p><?php echo $name . " er " . $age . " år gammel "?></p> 




</body>
</html>

<br>

<a href="http://localhost/IS-115Moduler/Modul1/index.html">Tilbake til hovedsiden</a>
