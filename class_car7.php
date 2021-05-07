<?php
class Person{
    public $name = "joe";
    static $baseAge = 18;
    public $age = 13;
    //we can also use static functions 
    public static function increaseBaseAge(){
        //this is the sabstitute of $this key word
       echo self::$baseAge= 28;
    }
    //we can also use functions/ methods tho change or influence static data
    public function increaseBaseAgenotstatic(){
        echo self::$baseAge=24;
    }
}
//note that we can access the static property b4 even initializiing  the class and we use double colons
echo Person ::  $baseAge;
//using a static function almost similor to static property
echo Person :: increaseBaseAge();
//using the normal fmethod 
//create an instance of the class
$boy = new Person();
echo $boy->increaseBaseAgenotstatic();