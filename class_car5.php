<?php
class Person {
    var $name;
    var $age;

    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
}

$person1 = new Person("joe",18);
echo $person1->name;