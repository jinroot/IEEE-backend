
<?php



$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

foreach ($chars as $characters)
    if(gettype($characters) == "integer") unset($chars[$characters]);

echo ucfirst(strtolower(implode("",$chars)));