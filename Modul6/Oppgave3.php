<?php

require "Oppgave2.php";

$Niklas = New Student ("Niklas", "Fugledal1999", "UiA");
$Tommy = New Student ("Tommy", "Larsen1993", "UiA");

echo "<br> De slettede brukerne er: <br>";
unset($Niklas, $Tommy);
User::get_deletedUsers();

?>
