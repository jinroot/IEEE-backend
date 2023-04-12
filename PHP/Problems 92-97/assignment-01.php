

<?php



date_default_timezone_set("Asia/Riyadh");

if (date_default_timezone_get()) {
    echo  date_default_timezone_get() . "<br>";
}

//"Wed, 09 Nov 22 - 07:11:22 PM"
$time = date('D, d M y - h:i:s A');
echo $time."<br>";


//"Wednesday, 09 November 2022 - 07:11:22 PM"
$time = date('l, d F o - h:i:s A');
echo $time."<br>";



