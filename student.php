<?php



abstract Class Student {

  public $firstName;
  public $middleName;
  public $lastName;
  public $address;

  public $amount = 0;

  function __construct() {
    $this->displayDetails();
  }

  protected function displayDetails() {
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

  abstract public function setAmount($amount);
}

/*interface iStudentDetails {

  public function setAmount($amount);
}
*/

Class OldStudent extends Student {
  public function setAmount($amount) {
    $this->amount = $amount / 3;
  }
}

Class SpecialStudent extends Student {
  public function setAmount($amount) {
    $this->amount = $amount / 4;
  }
}

Class Returnee extends Student  {

  function __construct() {}

  public function setAmount($amount) {
    $this->amount = $amount / 2;
    $this->displayDetails();
  }
}

$returnee = new Returnee();

$returnee->firstName = "James";
$returnee->middleName = "F.";
$returnee->lastName = "Roncesvalles";
$returnee->address = "Nova Qc";

$returnee->setAmount(100);
?>