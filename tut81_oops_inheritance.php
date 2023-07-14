<?php

    echo "What is inheritance?<br>";

    class Employe{
        public $name = "jaspreet";
        private $salary = 12000;
        private $grade = 3;

        function showName(){
            echo "The name of this employee is ".$this->name . "<br>";
        }
        function setSalary($salary){
            $this->salary = $salary;
        }
        function getSalary(){
            echo "The salary of employee is $this->name is $this->salary <br>";
        }
    }

    // Inheriting a new class Programmer from Employee
    class Programmer extends Employe{
        public $language = "Python";

        function changeLanguage($lang){
            $this->language = $lang;
        }
    }
    $rohan = new Employe();
    $rohan->name = "rohan";
    $rohan->setSalary(39000);
    $rohan->showName();
    $rohan->getSalary();

    $shubham = new Employe();
    $shubham->name = "shubham";
    $shubham->setSalary(120000);
    $shubham->showName();
    $shubham->getSalary();

    $geeta = new Programmer();
    $geeta->name = "geeta";
    $geeta->setSalary(29000);
    $geeta->changeLanguage("JavaScript");
    $geeta->showName();
    $geeta->getSalary();
?>