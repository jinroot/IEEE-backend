
<?php



//wow the amount of knowledge gained vs time waisted is ***** ********** :)

echo basename(__FILE__)."<br>";
echo pathinfo(__FILE__,2)."<br>";
echo basename($_SERVER["SCRIPT_FILENAME"])."<br>";
echo basename($_SERVER['PHP_SELF'])."<br>";
echo (pathinfo(__FILE__)['basename'])."<br>";


