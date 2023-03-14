<?php


// Write Function Content Here

// Needed Output

echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP


function get_arguments(...$arr): string
{
    $all="";
    foreach($arr as $value){
        $all.=" $value";
    }
    return $all;
}