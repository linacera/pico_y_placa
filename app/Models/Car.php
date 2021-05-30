<?php

namespace App\Models;

class Car{
    public $plate;

    function __construct($plate){
        $this->plate = $plate;
    }

    function getPlateLastDigit(){
        $lastDigit = $int(substr($this->plate ,-1));
        return $lastDigit;
    }
}


