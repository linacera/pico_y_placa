<?php

namespace App\Models;

class Day {
    public $dayName;

    function __construct($date) {
        $this->dayName = $this->findDayName($date);
    }

    function findDayName($dateString) {
        $dayName = date('l', strtotime($dateString));
        return $dayName;
    }

}