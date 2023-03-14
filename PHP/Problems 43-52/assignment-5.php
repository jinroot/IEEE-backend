
<?php

function check_status($a, $b, $c) {

        foreach(func_get_args() as $value ){
        if(gettype($value)=="integer"){
                $a =$value;
        }else if(gettype($value)=="string"){
                $b =$value;
        }else $c =$value;
    }
    $x = "Hello $a, Your Age Is $b, You Are ";
        if ($c){
            $x .= "Available";
        }else {
            $x .= "Not Available";
        }
    $x .= " For Hire<br>";

        return $x;
  }


// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"