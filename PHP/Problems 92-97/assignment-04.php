

<?php


date_default_timezone_set("Africa/Cairo");


$date = "1990-10-01";

$date1 = date_create($date);
$now = date_create("now");

$diff=date_diff($now,$date1);

$days=$diff->days;
$years = round($days / 365,1);

echo "From Epoch Time Till ".$date." Is Approximately ".$days." Days<br>";
echo "From Epoch Time Till ".$date." Is Approximately ".$years." Years";