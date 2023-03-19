

<?php

$nums = [10, 100, -20, 50, 30];

$answer = 999999999999999999999999999999999999999999999999999;
foreach($nums as $num){
    if($num < $answer) $answer = $num;
}
echo $answer;