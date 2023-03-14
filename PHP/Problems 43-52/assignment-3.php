
<?php


// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40

function sum_all(...$nums){
    $result=0;
    foreach($nums as $number){
        if($number==5){
            continue;
        }elseif($number==10){
            $result+=20;
        }else{
            $result+=$number;
        }
    }
    return "<br>".$result;
}