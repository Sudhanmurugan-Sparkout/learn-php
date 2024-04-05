<?php 

class demo {
  public $name;
  public $lastname;

  function __construct($name, $lastname) {
    $this->name = $name;
    $this->lastname = $lastname;
  }

  protected function getDetails() {
    echo "Hi, this is $this->name $this->lastname";
  }
}

class child extends demo {
    public function message() {
        echo $this->getDetails();
    }
}

$name = new child("sudhan", "murugan");
echo $name->message();

?>
