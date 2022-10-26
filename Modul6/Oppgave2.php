<h1>Oppgave 2</h1>
<?php
require "Oppgave1.php";

class Student extends User{
public $city;

public function __construct($firstName, $lastName, $userName, $regDate, $city){
    parent::__construct($firstName, $lastName, $userName, $regDate);
    $this->city = $city;
}
public function sayHello(){
    echo "Hello!";
}
public function welcome(){
    echo "<br> Velkommen {$this->firstName} {$this->lastName} <br> Ditt brukernavn er {$this->userName} og du ble registrert {$this->regDate} og bor i {$this->city}";
}
}
$Student = new Student('Niklas', 'Fugledal', 'Niklas1999','26.10.2022','Kristiansand');
$Student-> sayHello();
$Student-> welcome();


?>
<br><br>
<a href="./index.html">Tilbake til hovedsiden</a>