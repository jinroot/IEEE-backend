
<?php


//1
$t1 = $_SERVER['REQUEST_TIME'];

//2
$t2 = strtotime('now');

//3
$currentDateTime = new DateTime();
$t3 = $currentDateTime->format('U');

echo $t1."<br>";
echo $t2."<br>";
echo $t3."<br>";


    /*
     * // With time() Function
echo time() . "<br>"; // 1668020233

// Output Needed With Other Ways
1668020233
1668020233
1668020233
     */