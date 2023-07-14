<?php
    class Employee {
        // Properties of our class
        public $name;
        public $salary;
        
        // Contructor with arguments
        function __construct($name , $salary)
        {
            $this->name = $name;
            $this->salary = $salary;
        }

        // Destructor in php
        function __destruct()
        {
            echo "I am destruting $this->name <br>";
        }
    }

    $rohan = new Employee("rohan",53999);
    $jaspreet = new Employee("jaspreet",78900);
    $SkillF = new Employee("SkillF",89000);

    echo "The salary of jaspreet is $jaspreet->salary <br>";
    echo "The salary of rohan is $rohan->salary <br>";
?>