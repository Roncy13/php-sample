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

Class OldStudent extends Student implements iStudentDetails {
  public function setAmount($amount) {
    $this->amount = $amount / 3;
  }
}

Class SpecialStudent extends Student implements iStudentDetails {
  public function setAmount($amount) {
    $this->amount = $amount / 4;
  }
}

Class Returnee extends Student  implements iStudentDetails {

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

$student = new Student();

$student->firstName = "James";
$student->middleName = "F.";
$student->lastName = "Roncesvalles";
$student->address = "Nova Qc";

$student->displayDetails();
?>