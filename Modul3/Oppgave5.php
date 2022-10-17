<h1>Oppgave 5</h1>

<form action="oppgave5.php" method="get">
    <label for="rute">Rute nummer. Tall fra 1-64</label><br>
    <input type="number" name="number"><br>
    <input type="submit" name="submit">
</form>

<?php

//Matte formelen er 2**(n-1), så mønsteret er: 1,2,4,8,16,32. Kvadratroten av disse er 2.
function Rute($rute) {

    $i = 2**($rute - 1);

        if($i > 1000000000 && $i < 1000000000000) { // 9 nuller milliard $i må være større enn en milliard, men mindre enn en billion.

        $x = number_format($i);
        $arr = explode(",", $x);

        //array_splice funksjonen fjerner elementer fra arrayen og erstatter den med nye elementer

        array_splice($arr, 1, 0, "milliard(er),");
        array_splice($arr, 3, 0, "million(er),");
        array_splice($arr, 5, 0, "tusen og");

        echo implode(" ", $arr);

    } 
    elseif($i > 1000000000000 && $i < 1000000000000000) { //12 nuller billion
        
        $x = number_format($i);
        $arr = explode(",", $x);

        array_splice($arr, 1, 0, "trilliard(er),");
        array_splice($arr, 3, 0, "milliard(er),");
        array_splice($arr, 5, 0, "million(er),");
        array_splice($arr, 7, 0, "tusen og");
        
        echo implode(" ", $arr);
    }

    elseif($i > 1000000000000000 && $i < 1000000000000000000) { // 15 nuller billiard
        
        $x = number_format($i);
        $arr = explode(",", $x);
        
        array_splice($arr, 1, 0, "billiard(er),");
        array_splice($arr, 3, 0, "billion(er),");
        array_splice($arr, 5, 0, "milliard(er),");
        array_splice($arr, 7, 0, "million(er),");
        array_splice($arr, 9, 0, "tusen og");

        echo implode(" ", $arr);
    }

    elseif($i > 1000000000000000000 && $i < 1000000000000000000000) { // 18 nuller trillion
        
        $x = number_format($i);
        $arr = explode(",", $x);
        
        array_splice($arr, 1, 0, "trillion(er),");
        array_splice($arr, 3, 0, "billiard(er),");
        array_splice($arr, 5, 0, "billion(er),");
        array_splice($arr, 7, 0, "milliard(er),");
        array_splice($arr, 9, 0, "million(er),");
        array_splice($arr, 11, 0, "tusen og");

        echo implode(" ", $arr);
        //implode for å få en array til en string
    }
    else 
    {
        echo $i;
    }
}
    if(isset($_GET["submit"])){

        $number = $_GET["number"];
        echo "Rute nummer: $number har ";
        Rute($number);
        echo " hvetekorn <br>";
        echo "<br>";
    }



?>

<a href="http://localhost/IS-115Moduler/Modul3/index.html">Tilbake til hovedsiden</a>