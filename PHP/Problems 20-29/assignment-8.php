

<?php


    // Code 1
    $a = @$b or die("Custom pain");

    // Code 2
    $f = @file("Not_A_File") or die("Custom pain");

    // Code 3
    (@include("Not_A_File")) or die("Custom pain");