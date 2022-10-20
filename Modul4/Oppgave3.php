<h1>Oppgave 3</h1>

<?php

//dummydata
$currentData = array(
    "Fornavn" => "Niklas",
    "Etternavn" => "Fugledal",
    "Epost" => "niklasfugledal@live.no",
    "Adresse" => "Kristian IVs Gate 21",
    "Postnummer" => "4612",
    "Poststed" => "Kristiansand S",
    "Mobilnummer" => "97737950",
    "Fødselsdato" => "1999-08-04",
    "Kjønn" => "Mann",
    "Brukernavn" => "Nifu1999",
    "Passord" => "testtest"
);

//Sjekker at selve formet blir fylt ut
if(isset($_POST["submit"])) {

    //henter ut verdien
    $fornavn = $_POST["Fornavn"];
    $etternavn = $_POST["Etternavn"];
    $epost = $_POST["Epost"];
    $adresse = $_POST["Adresse"];
    $postnummer = $_POST["Postnummer"];
    $poststed = $_POST["Poststed"];
    $mobilnummer = $_POST["Mobilnummer"];
    $fødselsdato = $_POST["Fødselsdato"];
    $kjønn = $_POST["Kjønn"];
    $brukernavn = $_POST["Brukernavn"];
    $passord = $_POST["Passord"];


    //Sjekker om alle feltene er fylt inn.
    if(!$fornavn) {
        echo "Fornavn ble ikke fylt ut!";
    }
    elseif(!$etternavn) {
        echo "Etternavn ble ikke fylt ut!";
    }
    elseif(!$epost) {
        echo "Epost ble ikke fylt ut!";
    }
    elseif(!$adresse) {
        echo "Adresse ble ikke fylt ut!";
    }
    elseif(!$postnummer) {
        echo "Postnummer ble ikke fylt ut!";
    }
    elseif(!$poststed) {
        echo "Poststed ble ikke fylt ut!";
    }
    elseif(!$mobilnummer) {
        echo "Mobilnummer ble ikke fylt ut!";
    }
    elseif(!$fødselsdato) {
        echo "Fødselsdato ble ikke fylt ut!";
    }
    elseif(!$brukernavn) {
        echo "Brukernavn ble ikke fylt ut!";
    }
    elseif(!$passord) {
        echo "Passord ble ikke fylt ut!";
    } else {

        //lager en assosiative array
        $newData = array (
            "Fornavn" => $fornavn,
            "Etternavn" => $etternavn,
            "Epost" => $epost,
            "Adresse" => $adresse,
            "Postnummer" => $postnummer,
            "Poststed" => $poststed,
            "Mobilnummer" => $mobilnummer,
            "Fødselsdato" => $fødselsdato,
            "Kjønn" => $kjønn,
            "Brukernavn" => $brukernavn,
            "Passord" => $passord,
        );

        if ($currentData == $newData) //Sjekk om brukeren har endret noen av feltene.
        {
            echo "Ingen endring er gjort!";
        } else {
            $currentData = array_replace($currentData, $newData);

            echo "Brukeroppdatering: <br><br>"; //looper gjennom arrayen for å printe den ut.
            foreach($currentData as $key => $value) {
                echo "$key: $value <br>";
            }
        }
    }
}


?>

<form action="Oppgave3.php" method ="post">
    <table>
        <h3>Oppdatere bruker sin informasjon</h3>
        <tr>

            <th>Fornavn:</th>
            <td><input type = "text" name = "Fornavn" value ="<?php print_r($currentData["Fornavn"])?>"></td>
        </tr>
        <tr>
            <th>Etternavn:</th>
            <td><input type = "text" name = "Etternavn" value ="<?php print_r($currentData["Etternavn"])?>"></td>
        </tr>
        <tr>
            <th>Epost:</th>
            <td><input type = "email" name = "Epost" value ="<?php print_r($currentData["Epost"])?>"></td>
        </tr>
        <tr>
            <th>Adresse:</th>
            <td><input type = "text" name = "Adresse" value = "<?php print_r($currentData["Adresse"])?>"></td>
        </tr>
        <tr>
            <th>Postnummer:</th>
            <td><input type = "number" name = "Postnummer" value = "<?php print_r($currentData["Postnummer"])?>"></td>
        </tr>
        <tr>
            <th>Poststed:</th>
            <td><input type = "text" name = "Poststed" value = "<?php print_r($currentData["Poststed"])?>"></td>
        </tr>
        <tr>
            <th>Mobilnummer:</th>
            <td><input type = "number" name = "Mobilnummer" value ="<?php print_r($currentData["Mobilnummer"])?>"></td>
        </tr>
            <th>Fødselsdato:</th>
            <td><input type = "date" name = "Fødselsdato" value ="<?php print_r($currentData["Fødselsdato"])?>"></td>
        </tr>
        <tr>
            <th>Kjønn</th>
            <td><select name = "Kjønn">
                </optgroup>
                <optgroup label = "Nåværende">
                    <option value ="<?php print_r($currentData["Kjønn"]) ?>"><?php print_r($currentData["Kjønn"])?></option>
                </optgroup>
                <optgroup label = "Kjønn">
                    <option value = "Mann">Mann</option>
                    <option value = "Dame">Dame</option>
                <option value = "Annet">Annet</option>
            </select></td>
        </tr>
        <tr>
            <th>Brukernavn:</th>
            <td><input type="text" name="Brukernavn" value ="<?php print_r($currentData["Brukernavn"])?>"></td>
        </tr>
        <tr>
            <th>Passord:</th>
            <td><input type="password" name="Passord" value = "<?php print_r($currentData["Passord"])?>"></td>
        </tr>
    </table>
    <input type = "submit" name = "submit" value = "Opprett bruker">
</form>

<a href="./index.html">Tilbake til hovedsiden</a>




