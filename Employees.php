<?php
  class Employee
   {
      private $name;
      private $title;
      private $salary;
  
    public function __construct($name, $title, $salary) 
    {
      $this->name = $name;
      $this->title = $title;
      $this->salary = $salary;
    }
    public function getEmployeeName() 
    {
      return $this->name;
    }
    public function getEmployeeTittle() 
    {
      return $this->title;
    }
    public function getEmployeeMonthlySalary() 
    {
      return $this->salary;
    }
    public function getEmployeeProfile()
    {
      echo "Name".$this->name."Title".$this->title."Salary".$this->salary;
    }
}
    $show = new Employee("Ayu Novita Ningsi Lumbantobing", "Diploma Teknologi Informasi","Rp.1.500.000");
    
    $show->getEmployeeProfile(); 
?>
