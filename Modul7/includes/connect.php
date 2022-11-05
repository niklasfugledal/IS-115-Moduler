<?php

$fornavn = $_POST["fornavn"];
  $etternavn = $_POST["etternavn"];
  $epost = $_POST["epost"];
  $adresse = $_POST["adresse"];
  $postnummer = $_POST["postnummer"];
  $poststed = $_POST["poststed"];
  $mobilnummer = $_POST["mobilnummer"];
  $fødselsdato = $_POST["fødselsdato"];
  $kjønn = $_POST["kjønn"];
  $brukernavn = $_POST["brukernavn"];
  $passord1 = $_POST["passord1"];
  $passord2 = $_POST["passord2"];

  //Database connection

    $conn = new mysqli('localhost', 'root', '','modul7');
    if($conn->connect_error) {
        die('Connection failed :   ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fornavn, etternavn, epost, adresse, postnummer, poststed, mobilnummer, fødselsdato, kjønn, brukernavn, passord1, passord2)
        values(?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssisssssss", $fornavn, $etternavn, $epost, $adresse, $postnummer, $poststed, $mobilnummer, $fødselsdato, $kjønn, $brukernavn, $passord1, $passord2);
        $stmt->execute();
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
    }
