

<?php



    $a = "Elzero";
    $b = "Web";
    $c = "School";

    // Method One
    $d = "$a $b $c";
    echo $d."<br>";
    // Method Two
    $d = "{$a} {$b} {$c}";
    echo $d."<br>";
    // Method Three
    $d = $a." ".$b." ".$c;
    echo $d."<br>";

    // Method Four
    $a .= " $b";
    $a .= " $c";
    $d = $a;
    echo $d."<br>";

