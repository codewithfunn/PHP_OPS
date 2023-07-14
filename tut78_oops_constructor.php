<?php

class Employee{
    // Properties of our class
    public $name;
    public $salary;
     
    // Methods of our class
    // Constructor - It allows you to initialize objects. It is the code which is executed whenever a new object is instantiated

    // Constructor without arguments
    // function __construct()
    // {
    //     echo "This is my constructor for employee";
    // }

    // Constructor with arguments
    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;

    }
}

$rohan = new Employee("rohan" , 75000);
$jaspreet = new Employee("jaspreet",98000);
$SkillF = new Employee("SkillF",23000);

echo "The salary of jaspreet is $jaspreet->salary <br>";
echo "The salary of rohan is $rohan->salary <br>";

?>