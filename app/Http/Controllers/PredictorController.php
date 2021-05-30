<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Day;
use App\Models\Hour;
use App\Http\Requests\PredictorRequest;

class PredictorController extends Controller
{
    private $forbiddenHours = [
        "Morning"=>["07:00","09:30"],
        "Afternoon"=>["16:00","19:30"]
    ];
    
    private $forbiddenPlatesPerDay = [
        "Monday"=>[1,2],
        "Tuesday"=>[3,4],
        "Wednesday"=>[5,6],
        "Thursday"=>[7,8],
        "Friday"=>[9,0]
    ];
    
    function getInput(PredictorRequest $request){
        $plate = $request->input("plate");
        $date = $request->input("date");
        $hour = $request->input("hour");

        $car = new Car($plate);
        $day = new Day($date);
        $hour = new Hour($hour);
        $predict = $this->predict($day->getDayName(), $car->getPlateLastDigit(), $hour->getHour());
        return View("prediction", ["predict"=>$predict, 'plate'=>$plate]);
        
    }

    function predict($dayName, $lastDigit, $hour){
        if($this->checkForWeekend($dayName)){
            return(true);
        }else{
            if($this->checkForForbiddenHours($hour)){
                if($this->checkForForbiddenPlates($lastDigit, $dayName)){
                    return(false);
                }
            }
        }
        return(true);

    }

    function checkForWeekend($dayName){
        if($dayName == "Sunday" || $dayName == "Saturday"){
            return true;
        }
        return false;
    }

    function checkForForbiddenHours($hour){
        $forbiddenHoursMorning = $hour >= $this->forbiddenHours["Morning"][0] && $hour <= $this->forbiddenHours["Morning"][1];
        $forbiddenHoursAfternoon =$hour >= $this->forbiddenHours["Afternoon"][0] && $hour <= $this->forbiddenHours["Afternoon"][1];
        if($forbiddenHoursAfternoon || $forbiddenHoursMorning){ 
            return true;
        }
        return false;

    }

    function checkForForbiddenPlates($lastDigit, $dayName){
        if(in_array($lastDigit,$this->forbiddenPlatesPerDay[$dayName])){
            return true;
        }
        return false;
    }



}
