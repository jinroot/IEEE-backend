

<?php


$chars = ["o", "r", "e", "z", "l", "E"];

$answer = 0;
foreach($chars as $num){
    $answer++;
}

for($i = --$answer; $i>=0; $i--){
    echo $chars[$i];
}