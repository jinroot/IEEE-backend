<?php



// Needed Output//
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh




function greeting($name,$gender = ""): string
{
    if ($gender == "Male") {
        return "Hello "."Mr ".$name;
    } else {
        if ($gender == "Female") {
            return "<br>Hello "."Miss ".$name;
        } else {
            return "<br>Hello " ." ". $name;
        }
    }
}