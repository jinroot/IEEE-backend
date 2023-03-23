

<?php

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";






for($i=1; $i<5; $i++){
    echo filter_var(${'url'.$i},FILTER_SANITIZE_URL)."<br>";
}

/* Output
http://www.elzero.org
http://elzero.org
https://elzero.org
https://elzero.org
*/