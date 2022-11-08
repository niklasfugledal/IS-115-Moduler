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

?>
















<form action="../Modul7/includes/connect.php" method="post">
    <table>
        <h3>Register en ny bruker</h3>
        <tr>
            <th>Fornavn:</th>
            <td><input type="text" name="fornavn" value="" required></td>
        </tr>
        <tr>
            <th>Etternavn:</th>
            <td><input type="text" name="etternavn" value="" required></td>
        </tr>
        <tr>
            <th>Epost:</th>
            <td><input type="email" name="epost" value="" required></td>
        </tr>
        <tr>
            <th>Adresse:</th>
            <td><input type="text" name="adresse" value="" required></td>
        </tr>
        <tr>
            <th>Postnummer:</th>
            <td><input type="number" name="postnummer" value="" required></td>
        </tr>
        <tr>
            <th>Poststed:</th>
            <td><input type="text" name="poststed" value="" required></td>
        </tr>
        <tr>
            <th>Mobilnummer:</th>
            <td><input type="number" name="mobilnummer" value="" required></td>
        </tr>
        <th>Fødselsdato:</th>
        <td><input type="date" name="fødselsdato" value="" required></td>
        </tr>
        <tr>
            <th>Kjønn</th>
            <td><select name="kjønn" required>
                    <option value="Mann">Mann</option>
                    <option value="Dame">Dame</option>
                    <option value="Annet">Annet</option>
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