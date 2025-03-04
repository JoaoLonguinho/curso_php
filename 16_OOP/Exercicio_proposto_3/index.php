<?php

class Passenger{
    public $name;
    public $age;
    public $seatNumber;

    public function __construct($name, $age, $seatNumber){
        $this->name = $name;
        $this->age = $age;
        $this->seatNumber = $seatNumber;
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSeatNumber(){
        return $this->seatNumber;
    }
    public function setSeatNumber($seatNumber){
        $this->seatNumber = $seatNumber;
        return $this->seatNumber;
    }

}

$jorge = new Passenger("Jorge", 27, "A04");

echo $jorge->seatNumber . "<br/>";

$jorge->setSeatNumber("C29");

echo $jorge->seatNumber . "<br/>";