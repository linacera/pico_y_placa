<?php

namespace App\Models;

class Car{
    public $plate;
    public $plateLastDigit;

    function __construct($plate){
        $this->plate = $plate;
        $this->plateLastDigit = $this->getPlateLastDigit();
    }

    function getPlateLastDigit(){
        $lastDigit = (int)(substr($this->plate ,-1));
        return $lastDigit;
    }
}


