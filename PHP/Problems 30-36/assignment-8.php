

<?php


$day = "Sat";
// i like match more
echo match ($day) {
    "Sat", "Sun", "Mon" => "We Are Open All The Day",
    "Tue", "Wed" => "We Are Open From 08:12",
    "Thu", "Fri" => "We Are Closed",
    default => "Unknown Day",
};