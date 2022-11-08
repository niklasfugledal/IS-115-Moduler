<?php
include_once('C:\xampp\htdocs\IS-115Moduler\Modul7\includes/db.conn.php');
include_once('C:\xampp\htdocs\IS-115Moduler\Modul7\includes/bootstrap.php');

//Utfører en spørring på databasen 
$query = $conn->query("SELECT * FROM activities WHERE start >= CURRENT_DATE order by start");


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Oppgave 4</title>
</head>

<body>
    <h1 class="display-2">Kommende aktiviteter</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Navn</th>
                <th>Ansvarlig</th>
                <th>Start</th>
                <th>Slutt</th>
                <th>Beskrivelse</th>
            </tr>
        </thead>

        <?php
        //Lager en assosiativ array med verdiene fra medlems tabellen.
        //Looper gjennom verdiene og printer dem ut i tabellen. 
        while ($row = $query->fetch_assoc()) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $row["Navn"]; ?></td>
                    <td><?php echo $row["Ansvarlig"]; ?></td>
                    <td><?php echo $row["Start"]; ?></td>
                    <td><?php echo $row["Slutt"]; ?></td>
                    <td><?php echo $row["Beskrivelse"]; ?></td>
                </tr>
            </tbody>

        <?php
        }
        //lukker tilkoblingen til db
        $conn->close();
        ?>
    </table>
    <br><br>
    <a href="index.html">Gå tilbake til startsiden</a>
</body>

</html>