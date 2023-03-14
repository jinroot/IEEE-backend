

<?php

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $monee){
    echo "The Name Is ".key($money)." And I Need ".$monee." Pound From Him";
}

/*
// Output
"The Name Is Ahmed And I Need 100 Pound From Him"
"The Name Is Sayed And I Need 150 Pound From Him"
"The Name Is Osama And I Need 100 Pound From Him"
"The Name Is Maher And I Need 250 Pound From Him"
*/



