

<?php
$a = 30;
$b = 20;
$c = 10;

    echo($a + $b === $c)    ? "A + B = C":
        (($a + $c === $b)   ? "B + C = A":
        (($b + $c === $a)   ? "B + C = A":
                                "The End"
    ));