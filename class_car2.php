<?php

class Car{
    function MoveWheels(){
        echo "wheel move";
    }
};    
//creating an instance of the obj
$carObj1 = new Car();
$carObj2 = new Car();
//using the method
$carObj1->MoveWheels();
$carObj2->MoveWheels(); 
