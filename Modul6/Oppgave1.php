
<?php
class User
{
  //verdier
  public $firstName;
  public $lastName;
  protected $userName;
  protected $regDate;
  static protected $deletedUsers = array();

  public function __construct($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->userName = self::randomUsername();
    $this->regDate = date("d-m-y h:i:s");
  }

  //velkommen
  public function welcome()
  {
    echo "<br> Velkommen {$this->firstName} {$this->lastName} <br> Ditt brukernavn er {$this->userName} og du ble registrert {$this->regDate} <br><br>";
    echo "<br><br>";
  }

  function randomUsername()
  {
    $length = 8;

    // Ulike brukernavn komponenter.

    $komponenter = array();
    $komponenter[] = '0123456789';
    $komponenter[] = 'abcdefghijklmnopqrstuvwxyz';
    $komponenter[] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $userName = "";


    // Henter et tegn fra hvert sett - de tre første komponenter av bnavn

    foreach ($komponenter as $komponent) {
      $userName .= $komponent[array_rand(str_split($komponent))];
    }

    // Bruker alle komponentene til å fylle ut det resterende av bnavnet

    while (strlen($userName) < $length) {

      // Henter en random liste

      $randomKomponent = $komponenter[array_rand(($komponenter))];

      // Legger til random komponent fra random liste

      $userName .= $randomKomponent[array_rand(str_split($randomKomponent))];
    }


    // Shuffler stringen før den returnerer et username

    return str_shuffle($userName);

}

// Pusher slettede brukere til array

function __destruct()
{
    array_push(self::$deletedUsers, $this->firstName, $this->lastName, $this->userName);
}


static function get_deletedUsers()
{
    foreach(self::$deletedUsers as $key => $value)
    {
        //echo self::$deletedUsers[$key] . "<br>";
        //echo "$key. Verdi: $value  <br>";
        
    }
    $deletedUsers = self::$deletedUsers;
    print_r($deletedUsers);
}
}