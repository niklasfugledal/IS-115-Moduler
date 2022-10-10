<h1>Oppgave 5</h1>

<?php
//tekst som skal krypteres
$string = "Niklas Fugledal";

//Algoritme for kryptering
$method = "AES-256-CBC";

//nøkkelen for kryptering og dekryptering
$key = "wasd";

//Inneholder intialiseringsvektoren
$iv = "1234567891011121";

//bitwise disjunction
$options = 0;


echo "Innputt: $string <br>x";

function encryption($string, $key) : string
{

    //Metode som krypterer dataen
    return openssl_encrypt($string, $GLOBALS["method"], $key, $GLOBALS["options"], $GLOBALS["iv"]);
}


$encryptedText = encryption($string, $key);
//printer ut verdien
echo "Kryptert text: $encryptedText";
echo "<br>";


function decryption($string, $key) : string
{
    //Metode dom dekrypterer teksten
    return openssl_decrypt($string, $GLOBALS["method"], $key, $GLOBALS["options"], $GLOBALS["iv"]);
}

$decryptedText = decryption($encryptedText, $key);
//printer ut verdien
echo "Dekryptert text = $decryptedText";
echo "<br>";

?>

<a href="http://localhost/Modul5/index.html">Tilbake til hovedsiden</a>