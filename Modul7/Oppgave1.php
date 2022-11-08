<?php
include_once('C:\xampp\htdocs\IS-115Moduler\Modul7\includes/db.inc.php');

$sql = "SELECT * FROM events WHERE price = :price";
$sp = $pdo->prepare($sql);
$sp->bindParam(':price', $price, PDO::PARAM_STR);
$price = "150";

try {
    $sp->execute();
} catch (PDOException $e) {
    echo $e->getMessage() . "<br>";
}

$events = $sp->fetchAll(PDO::FETCH_OBJ);
if ($sp->rowcount() > 0) {
    foreach ($events as $event) {
        echo "Verdiene hentet er : ";
        echo $event->name . " // ";
        echo $event->price . " // ";
        echo $event->location . " // ";
        echo $event->host . " // ";
    }
} else {
    echo "Spørringen returnerte ingen oppføringer";
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

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "modul7";

            // create conn

            $connection = new mysqli($servername, $username, $password, $database);

            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            $sql = "SELECT * FROM events";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

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
        </tbody>
    </table>
</body>

</html>


<a href="./index.html">Tilbake til hovedsiden</a>