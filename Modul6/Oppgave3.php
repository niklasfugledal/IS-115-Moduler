<h1>Oppgave 3</h1>

<?php
class User 
{
    //properties
    public $firstName;
    public $lastName;
    protected $userName;
    protected $regDate;
    
    public function __construct($firstName, $lastName, $userName, $regDate)
    {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->userName = $userName;
      $this->regDate = $regDate;
    }
    // Lage __constructor?????
}

?>

