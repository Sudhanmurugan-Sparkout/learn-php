<?php 

interface Employee{

   public function getName();
   public function calculateSalary();

}

class fullTime_Employee implements Employee{

    private $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function getName(){

        echo "the Employee name is $this->name ";
    }
   public function calculateSalary(){

    echo " the salary is based an monthly";

   }

}
class partTime_Employee implements Employee{

    private $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function getName(){

        echo "the Employee name is $this->name ";
    }
   public function calculateSalary(){

           echo " the salary based an hour";
}

}

class SalaryManager{

   public $employee;

   public function __construct($employee)
   {
    
       $this->employee=$employee;

   }

   public function salaryProcess(){

    $this->employee->getName();
    $this->employee->calculateSalary();
   }
    
}



$obj1= new fullTime_Employee("sudhan");
$obj2=new partTime_Employee("madhan");

$process1= new SalaryManager($obj1);
$process1->salaryProcess();

?>