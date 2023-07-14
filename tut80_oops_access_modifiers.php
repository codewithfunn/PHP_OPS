<?php
    // Access Modifiers in php 
    // 1. Public - can be accessed from anywhere
    // 2. Private - can only be accessed from within the class
    // 3. Protected - can be accessed from within the class and from derived class

    // By default the Properties and methods are treated as public in php

    // Private properties and methods can only be accessed by other member functions of the class
    
    class Employees{
        private $name = "jaspreet";
        // var $name = "jaspreet";
        function showName(){

            echo $this->name;
        }
    }

    $jaspreet = new Employees();
    // echo $jaspreet->name; this will not work if jaspreet is private
    $jaspreet->showName();
?>