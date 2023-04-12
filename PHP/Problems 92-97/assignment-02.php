


<?php


date_default_timezone_set("Africa/Cairo");

if (date_default_timezone_get()) {
    echo  date_default_timezone_get() . "<br>";
}


$date = new DateTime("2005-10-02");
$date->modify('+15 hours +15 minutes +15 seconds');
echo $date->format("o, F, l 'jS' H:i:s");

/*
 $date = "2005-10-02";

// Output Needed
"Africa/Cairo"
"2005, October, Sunday '02nd' 15:15:15"
 */

