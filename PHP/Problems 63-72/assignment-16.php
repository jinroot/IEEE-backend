

<?php


$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$answer=[];
foreach ($mix as $num){
    if(gettype($num)=="integer" and $num % 2 != 0) array_push($answer,$num);
}
print_r($answer);

/*Output
Array
(
    [0] => 1
  [1] => 3
  [2] => 5
  [3] => 7
)
*/