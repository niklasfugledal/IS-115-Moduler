
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
    
    //Welcome
    public function welcome()
    {
      echo "<br> Velkommen {$this->firstName} {$this->lastName} <br> Ditt brukernavn er {$this->userName} og du ble registrert {$this->regDate} <br><br>";
      echo "<br><br>";
    }
  }
    ?>
