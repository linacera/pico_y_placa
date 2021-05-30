<?php

namespace App\Models;

class Car{
    protected $plate;
    protected $plateLastDigit;

    function __construct($plate){
        $this->plate = $plate;
        $this->plateLastDigit = $this->transformPlateLastDigit();
    }

    function transformPlateLastDigit(){
        $lastDigit = (int)(substr($this->plate ,-1));
        return $lastDigit;
    }

    function getPlateLastDigit(){
        return $this->plateLastDigit;
    }

    function getPlate(){
        return $this->plate;
    }

}


