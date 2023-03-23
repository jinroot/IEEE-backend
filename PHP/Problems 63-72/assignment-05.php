
<?php

$nums = [5, 10, 20, 5, 30, 40];

function sombullsh($x,$y){
    if($y==5) $y=0;
    return $x+$y;
}
echo array_reduce($nums,"sombullsh");
