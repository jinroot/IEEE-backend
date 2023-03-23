
<?php



$word = "Osamaa";
$new_word="Elzero";

$str=file_get_contents("pain2.txt");
$str=str_replace($word, $new_word,$str);
file_put_contents('pain2.txt', $str);