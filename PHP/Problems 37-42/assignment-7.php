
<?php



$mix = [1, 2, "A", "B", "C", 3, 4];
$n=0;
$c=0;
foreach ($mix as $num) {
    if (gettype($num) == 'integer') {
        echo $num . "<br>";
        $n++;
    }else $c++;
}
echo $n." Numbers Printed<br>";
echo $c." Letters Ignored";