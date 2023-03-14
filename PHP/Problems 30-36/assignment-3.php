
<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Send">
</form>
<?php


$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['user']==="Osama") {
        out("Osama");
    }
    elseif ($_POST['user']==="Ahmed") {
        out("Ahmed");
    }
    elseif($_POST['user']==="Sayed"){
        out("Sayed");
    }
}
function out($name): void
{
    echo("The Request Method Is Post And Username Is $name <br> This Username $name Is Admin");
}