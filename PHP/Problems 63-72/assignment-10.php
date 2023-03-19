

<?php

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// boi i sure do love some no number challengesfffffff
//no clue if this is the intended way but boi do i have no time to think again
foreach($nums as $num){
    $idk=$num;
    $mix[--$idk]=$num;
}
//$mix = array_replace($mix,$nums);
print_r($mix);

/* Output
Array
(
    [0] => 1
  [1] => 2
  [2] => 3
  [3] => 4
  [4] => 5
  [5] => 6
  [6] => 7
  [7] => 8
  [8] => 9
)
*/