<?php


// Test Case 1 pain
test_some_nonesense(1,100,200,300);
// Test Case 2
test_some_nonesense(2,200,100,300);
// Test Case 3
test_some_nonesense(3,200,200,100);

function test_some_nonesense($n,$a,$b,$c): void
{
    echo("Test Case".$n);
    echo "<br>";
    if ($a > $b) {
        echo("A Is Larger Than B");
        echo "<br>";
    } else if ($a > $c) {
        echo("A Is Larger Than C");
        echo "<br>";
    } else {
        echo("A Is Not Larger Than B Or C");
        echo "<br>";
    }
}