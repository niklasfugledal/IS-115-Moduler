<?php
require "Oppgave1.php";

class Student extends User
{
    public $city;

    public function __construct($firstName, $lastName, $city)
    {
        parent::__construct($firstName, $lastName);
        $this->city = $city;
    }
    public function sayHello()
    {
        echo "Hello!";
    }
    public function welcome()
    {
        echo "<br> Velkommen {$this->firstName} {$this->lastName} <br> Ditt brukernavn er {$this->userName} og du ble registrert {$this->regDate} og bor i {$this->city}";
    }
}
$Student = new Student('Niklas', 'Fugledal', 'Niklas1999','Kristiansand');
$Student->sayHello();
$Student->welcome();


?>
<br><br>
