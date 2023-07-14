<?php


class  Employed{
        public $name;
        public $salary; 

        public function __construct($name , $salary)
        {
            $this->name = $name;
            // $this->lang = $lang;
            $this->salary = $salary;
            $this->describe();
        }
        protected function describe(){
            echo "Name of the Programmer: $this->name <br>";
            // echo "Language of the programmer: $this->lang <br>";
            echo "Salary of the Programmer: $this->salary <br>";
        }
    }

    class Programmers extends Employed{
        public $lang ="php";
        public function __construct($name ,$lang , $salary)
        {
            $this->name = $name;
            $this->lang = $lang;
            $this->salary = $salary;
            $this->describe();
        }
    }

    $jaspreet = new Employed("jaspreet",3);
    $rohan = new Programmers("rohan","Python",300000);
?>