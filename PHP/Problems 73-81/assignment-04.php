

<?php



// Test Cases

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed

function change_permissions(string $file): string
{
    if(is_file($file)){
        if($file['extension']=="txt"){
            chmod($file,0700);
            return "Permissions Changed";
        }
        else return "Extension not Txt<br>";
    }else return "NOT FILE BRUH<br>";
}