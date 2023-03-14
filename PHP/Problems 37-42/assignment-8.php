

<?php

$nums = [1, 13, 12, 20, 51, 17, 30];

for ($i = 0; $i < sizeof($nums); $i++)
{
    if ($nums[$i] % 2 == 0) echo $nums[$i]/2 ."<br>";
}