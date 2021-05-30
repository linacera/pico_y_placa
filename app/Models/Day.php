<?php

namespace App\Models;

class Day {
    $dayName;
    private days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

    function __constructor($date) {
        $this->dayName = $this->findDayName($date);
    }

    function findDayName($dateString) {
        $dateFormatted = new Date($dateString);
        $dayNumber = $dateFormatted.getDay();
        return $this->days[dayNumber];
    }



}