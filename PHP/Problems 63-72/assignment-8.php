

<?php


$chars = ["A", "B", "C"];


$chars[3] = 'D';

array_push($chars, "D");

$arrrrr=["D"];

$chars = array_merge($chars,$arrrrr);

print_r($chars);
//out of ideas :thumbsup_emoji:



/*Output
Array
(
    [0] => A
    [1] => B
    [2] => C
    [3] => D
)
*/