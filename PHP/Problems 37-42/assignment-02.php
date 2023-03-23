<?php


$index = 10;

for($i=2;$i <= 20;$i+=2){
    echo $i."<br>";
}
$i = 0;
while($i < 20){
    $i+=2;
    echo $i."<br>";
}
$i = 0;
do{
    $i+=2;
    echo $i."<br>";
}while ($i <= 20-2);