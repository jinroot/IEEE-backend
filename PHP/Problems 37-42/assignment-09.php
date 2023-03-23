

<?php



$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];





//spent 40min to make a case perfect answer
//got stuck on infinite loops
for($i=$help_num++;$i >=($help_num -$help_num);$i--){

    if($names[$i]== "Sayed" or $names[$i]=="Osama") {
        echo $names[$i] . "<br>";
    }
}