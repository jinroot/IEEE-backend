

<?php


$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach($nums as $num => $value){
    echo $value."+".($nums[$help_num -$num])."=".($value +$nums[$help_num -$num])."<br>";
}
