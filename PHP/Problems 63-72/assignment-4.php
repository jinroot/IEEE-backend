

<?php



$nums = [10, 20, 30];

function sombullsh($x,$y){
    return $x+$y;
}
echo array_reduce($nums,"sombullsh");
echo "<br>";
$answer=0;
foreach ($nums as $num) $answer+=$num;
echo $answer;