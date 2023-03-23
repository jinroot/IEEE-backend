

<?php


$zezo = fopen("pain.txt", "r");

for($i = 0; $i < 2; $i++){
    echo fgets($zezo);
}
echo "<br>";
rewind($zezo);

echo fread($zezo,strlen("Hello Elzero Web\nSchool\n"));
//out of reasonable ideas :( got 2 tho :)
fclose($zezo);
/* Needed Output
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
"Hello Elzero Web School"
*/