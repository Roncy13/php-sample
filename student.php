<?php

Class Student {

  public $firstName;
  public $middleName;
  public $lastName;
  public $address;

  private $amount = 0;

  function __construct() {
    $this->displayDetails();
  }

  function displayDetails() {
    $details = array(
      "firstName" => $this->firstName,
      "lastName" => $this->lastName,
      "address" => $this->address,
      "middleName" => $this->middleName,
      "amount" => $this->amount,
    );

    echo json_encode($details);
    echo "</br>";
  }
}

Class Returnee extends Student {

  function __construct() {
    parent::__construct();
    echo "<br> returnee";
  }
}

/*$firstStudent = new Student();

$firstStudent->firstName = "James";
$firstStudent->middleName = "F.";
$firstStudent->lastName = "Roncesvalles";
$firstStudent->address = "Nova Qc";

$firstStudent->displayDetails();*/

$returnee = new Returnee();

?>