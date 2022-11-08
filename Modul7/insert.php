<?php
require_once('C:\xampp\htdocs\IS-115Moduler\Modul7\includes/db.inc.php');

$sql = "INSERT INTO activities 
        (Navn, Ansvarlig, Start, Slutt, Beskrivelse) 
        VALUES 
        (:Navn, :Ansvarlig, :Start, :Slutt, :Beskrivelse)"; 

$q = $pdo->prepare($sql);

$q->bindParam(':Navn', $Navn, PDO::PARAM_STR);
$q->bindParam(':Ansvarlig', $Ansvarlig, PDO::PARAM_STR);
$q->bindParam(':Start', $Start, PDO::PARAM_STR);
$q->bindParam(':Slutt', $Slutt, PDO::PARAM_STR);
$q->bindParam(':Beskrivelse', $Beskrivelse, PDO::PARAM_INT);


$Navn = "Paintball";
$Ansvarlig = "KRS Paintballklubb";
$Start = "2022-11-17";
$Slutt = "2022-11-19";
$Beskrivelse = "4v4 paintball match";

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
//$q->debugDumpParams();

if($pdo->lastInsertId() > 0) {
    echo "Data inserted into database, identified by UID " . $pdo->lastInsertId() . ".";
} else {
    echo "Data were not inserted into database.";
}

?>