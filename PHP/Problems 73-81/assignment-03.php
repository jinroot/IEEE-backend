
<?php

$dumb="Programming";

if(!is_dir("$dumb/PHP")){
    mkdir("$dumb/PHP",0711,true);
}else{
    if(is_dir("$dumb")){
        rmdir("$dumb/PHP");
        echo "Directory $dumb/PHP Removed";
        rmdir("$dumb");
        echo "Directory $dumb Removed";
    }
}
