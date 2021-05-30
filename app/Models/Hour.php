<?php

namespace App\Models;

class Hour
{
    protected $hour;

    function __construct($hour) {
        $this->hour = $this->transformHour($hour);
    }

    function transformHour($hour) {
        $formattedHour = date("H:i",strtotime($hour));
        return $formattedHour;
    }

    function getHour(){
        return $this->hour;
    }

}
