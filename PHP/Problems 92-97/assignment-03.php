
<?php



date_default_timezone_set("Africa/Cairo");


$date = "1990-10-01";
$now = date("o-m-d");


$timestamp1 = strtotime($date);
$timestamp2 = strtotime($now);

$seconds = $timestamp2 - $timestamp1;

$days = round($seconds / (60 * 60 * 24),1);
$years = round($days / 365,1);

echo "From Epoch Time Till ".$date." Is Approximately ".$days." Days<br>";
echo "From Epoch Time Till ".$date." Is Approximately ".$years." Years";


    /*
 $date = "1990-10-01";

// Output Needed
"From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
"From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
     */