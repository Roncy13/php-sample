<?php

Class Student {

  public $firstName;
  public $middleName;
  public $lastName;
  public $address;

  public $amount = 0;

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

interface iStudentDetails {

  public function setAmount($amount);
}

Class Returnee extends Student implements iStudentDetails  {

  function __construct() {}

  public function setAmount($amount) {
    $this->amount = $amount / 50;
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

/*$firstStudent = new Student();

$firstStudent->firstName = "James";
$firstStudent->middleName = "F.";
$firstStudent->lastName = "Roncesvalles";
$firstStudent->address = "Nova Qc";

$firstStudent->displayDetails();*/

$returnee = new Returnee();

$returnee->firstName = "James";
$returnee->middleName = "F.";
$returnee->lastName = "Roncesvalles";
$returnee->address = "Nova Qc";

$returnee->setAmount(100);
$returnee->displayDetails();
echo $returnee->amount;
?>