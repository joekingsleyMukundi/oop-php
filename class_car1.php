<?php

class Car{
    function MoveWheels(){
        echo "wheel move";
    }
};

if (method_exists("Car","MoveWheels")) {
    echo  "<p>wow it EXISTS</p>";
} else {
    echo "noooo IT DOES NOT";
}