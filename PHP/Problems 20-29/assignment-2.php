<?php

    $a = "10";


    $x1 = intval($a);
    echo $x1;
    echo "<br>";
    echo gettype($x1);
    echo "<br>";

    $x2 = (int)$a;
    echo $x2;
    echo "<br>";
    echo gettype($x2);
    echo "<br>";

    $x3 = $a * 1;
    echo $x3;
    echo "<br>";
    echo gettype($x3);
    echo "<br>";

    $x4 = $a;
        settype($x4, "integer");
    echo $x4;
    echo "<br>";
    echo gettype($x4);
    echo "<br>";

