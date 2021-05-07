<?php 
class Person {
    //this is accesible from any where
    public $name = 'joe';
    //this can only be accessed with in the class or the child classes
    protected $age = 12;
    //this can only be accessed with in the class
    private $lastname = "mukundi";

    //you can access the protected and private  properties from methods ie
    public function getAge(){
        echo $this->age;
    }
    public function getLastName(){
        echo $this->lastname;
    }
}
$john = new Person();
echo $john->getAge();
echo $john->getLastName();
class PersonPr extends Person{
    //you can access protected properties in this child class that inherits the parents data
    public function getAge(){
        echo $this->age;
    }
}
$pr1 = new PersonPr();
//note that we have accessed the the protected property from the child class
echo $pr1 ->getAge();
