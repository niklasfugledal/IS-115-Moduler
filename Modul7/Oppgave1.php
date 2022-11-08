<?php
include_once('C:\xampp\htdocs\IS-115Moduler\Modul7\includes/db.conn.php');

if (isset($conn)) {
    //henter alle events
    $result = $conn->query("SELECT * FROM events;");
}

?>
<br><br>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">"


</head>

<body style="margin: 50px">
    <h1>List of events</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>EID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Location</th>
                <th>Host</th>
            </tr>
        </thead>
        <?php



        while ($row = $result->fetch_assoc()) {


            echo " <tr>
                    <td> " . $row["EID"] . "</td>
                    <td> " . $row["name"] . "</td>
                    <td> " . $row["price"] . "</td>
                    <td> " . $row["location"] . "</td>
                    <td> " . $row["host"] . "</td>
                    
                </tr>";
        }

        ?>

        <?php
        $conn->close();
        ?>


    </table>
</body>

</html>


<a href="./index.html">Tilbake til hovedsiden</a>