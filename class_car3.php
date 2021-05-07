<?php

class Car{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function ChangeNoOfWheels(){
        $this->wheels=10;
    }
    function ChangeNoOfDoors(){
        $this->doors = 6;
    }
};    
//creating an instance of the obj
$carObj1 = new Car();
$carObj2 = new Car();
//accessing the proprty wheels
echo $carObj1->wheels . "<br>";
//change number of wheels from here
echo  $carObj1->wheels = 6 ."<br>";
//change  te value of wheels using the method 
$carObj1->ChangeNoOfWheels();
echo $carObj1->wheels;