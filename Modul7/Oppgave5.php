<?php
include_once('includes/db.conn.php');
include_once('includes/bootstrap.php');

$result = $conn->query("SELECT registration.fornavn, registration.etternavn, registration.mobilnummer, interests.interesse
FROM registration JOIN interests ON registration.id = interests.userID;");

if (isset($_POST["submit"])) {
    $interest = $_POST["interests"];


    //Forbreder spørringen
    $query = $conn->prepare("SELECT registration.fornavn, registration.etternavn, registration.mobilnummer, interests.interesse
                             FROM registration JOIN interests ON registration.id = interests.userID WHERE interesse = ?;");
    //Kobler parameterene i spøringen med verdiene hentet ut fra from-et.
    $query->bind_param("s", $interest);
    //Utfører spørringen mot databasen
    $query->execute();
    //Henter resultatet fra et prepared statement
    $result = $query->get_result();


    //ent ut alle resultatene før man begynner spøringen
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Oppgave 5</title>
</head>

<body>
    <h1 class="display-2">Interesser</h1>

    <form action="" class="" method="post">

        <select name="interests">
            <option selected disabled><?php echo isset($_POST["interests"]) ? $_POST["interests"] : "Interesser"; ?></option>
            <option value="Fotball">Fotball</option>
            <option value="Håndball">Håndball</option>
            <option value="Gaming">Gaming</option>
            <option value="Frisbee">Frisbee</option>
            <option value="Klatring">Klatring</option>
            <option value="Reise">Reise</option>
            <option value="Historie">Historie</option>
        </select>

        <input type="submit" name="submit">
    </form>


    <h1 class="display-4">Medlemmer i klubben basert på interesser</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Fornavn</th>
                <th>Etternavn</th>
                <th>Interesse</th>
                <th>Mobil nummer</th>
            </tr>
        </thead>

        <?php
        /*Sjekker at formet er submitet
        Lager en assosiativ array med verdiene fra medlems tabellen.
        Looper gjennom verdiene og printer dem ut i tabellen. */

        while ($row = $result->fetch_assoc()) {
        ?>

            <tbody>
                <tr>
                    <td><?php echo $row["fornavn"]; ?></td>
                    <td><?php echo $row["etternavn"]; ?></td>
                    <td><?php echo $row["interesse"]; ?></td>
                    <td><?php echo $row["mobilnummer"]; ?></td>

                </tr>
            </tbody>

        <?php
        };


        //lukker tilkoblingen til db
        $conn->close();
        ?>
    </table>
    <br><br>
    <a href="index.html">Gå tilbake til startsiden</a>

</body>

</html>