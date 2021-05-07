<?php
class Car{
    var $wheels = 6;
    var $doors = 4;
    var $hood =1;
    var $seats = 7;

    function CreateDoors(){
        $this->doors = 6;
    }
}
$bmw =   new Car();

class Plane extends Car {

}
//jetinherits evry thing from  class car

$jet  = new Plane();
echo $jet->wheels;