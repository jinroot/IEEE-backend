

<?php

$nums = [1, 2, 3, 4, 5, 6];

$stuff = [];
for($i = 0; $i<6; $i++){
    $random = rand(0,1);
    if($random)
        array_unshift($stuff, $nums[$i]);
    else
        array_push($stuff, $nums[$i]);
}

print_r($stuff);