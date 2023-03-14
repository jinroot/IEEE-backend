
<?php

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
array_shift($mix);
foreach ($mix as $num){
    if(gettype($num)=='integer')echo $num."<br>";
}