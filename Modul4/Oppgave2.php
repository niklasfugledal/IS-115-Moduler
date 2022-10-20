<h1>Oppgave 2</h1>


<form actions="Oppgave2.php" method = "post">
<table>
    <h3>Register en ny bruker</h3>
        <tr>
        <th>Fornavn:</th>
        <td><input type = "text" name = "fornavn" value ="" required></td>
    </tr>
    <tr>
        <th>Etternavn:</th>
        <td><input type = "text" name = "etternavn" value ="" required></td>
    </tr>
    <tr>
        <th>Epost:</th>
        <td><input type = "email" name = "epost" value ="" required></td>
    </tr>
    <tr>
        <th>Adresse:</th>
        <td><input type = "text" name = "adresse" value = "" required></td>
    </tr>
    <tr>
        <th>Postnummer:</th>
        <td><input type = "number" name = "postnummer" value = "" required></td>
    </tr>
    <tr>
        <th>Poststed:</th>
        <td><input type = "text" name = "poststed" value = "" required></td>
    </tr>
    <tr>
        <th>Mobilnummer:</th>
        <td><input type = "number" name = "mobilnummer" value ="" required></td>
    </tr>
        <th>Fødselsdato:</th>
        <td><input type = "date" name = "fødselsdato" value ="" required></td>
    </tr>
    <tr>
        <th>Kjønn</th>
        <td><select name = "kjønn" required>
            <option value = "Mann">Mann</option>
            <option value = "Dame">Dame</option>
            <option value = "Annet">Annet</option>
        </select></td>
        </tr>
        <tr>
            <th>Brukernavn:</th>
            <td><input type="text" name="brukernavn" required></td>
        </tr>
        <tr>
            <th>Passord:</th>
            <td><input type="password" name="passord1" required></td>
        </tr>
        <tr>
            <th>Gjenta passord:</th>
            <td><input type="password" name="passord2" required></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Opprett bruker">
</form>

<?php

if(isset($_POST["submit"]))
{


//Henter ut verdiene fra for-men
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


//If statement som sjekker om alle feltene er fylt inn

if(!$fornavn) 
{
    echo "Fornavn ble ikke fylt ut!";
}
elseif(!$etternavn) 
{
    echo "Etternavn ble ikke fylt ut!";
}
elseif(!$epost) 
{
    echo "Epost ble ikke fylt ut!";
}
elseif(!$adresse) 
{
    echo "Adresse ble ikke fylt ut!";
}
elseif(!$postnummer) 
{
    echo "Postnummer ble ikke fylt ut!";
}
elseif(!$poststed) 
{
    echo "Poststed ble ikke fylt ut!";
}
elseif(!$mobilnummer) 
{
    echo "Mobilnummer ble ikke fylt ut!";
}
elseif(!$fødselsdato) 
{
    echo "Fødselsdato ble ikke fylt ut!";
}
elseif(!$kjønn) 
{
    echo "Kjønn ble ikke fylt ut!";
}
elseif(!$brukernavn) 
{
    echo "Brukernavn ble ikke fylt ut!";
}
elseif(!$passord1) 
{
    echo "Passord ble ikke fylt ut!";
}
elseif(!$passord2) 
{
    echo "Passord ble ikke fylt ut!";
}
elseif($passord1 == $passord2) 
{
 // Sjekker at passordet som blir skrevet inn matcher


//En associative array

$data = array(
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
    "Passord1" => $passord1,
    "Passord2" => $passord2
);

        print_r($data);
        echo "<br><br>";

        echo "Ny bruker er registrert! <br><br>"; // Denne looper gjennom arrayen og printer ut key og value.
        foreach($data as $key => $value) 
        {
        echo "$key: $value <br>";
        }

    }
    else 
    { //Hvis passordene ikke stemmer overens

    echo "Passordene må være like!";
    }


}


echo "<br><br>";

?>

<a href="./index.html">Tilbake til hovedsiden</a>


</form>
</table>
