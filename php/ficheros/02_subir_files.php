<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $file1 = $_FILES['file1'];
    $file2 = $_FILES['file2'];
    $dir = "upload/";

    if(file_exists($dir.$file1["name"])){
        echo "Ya existe el fichero ".$file1["name"]; 
    }
    
    if(file_exists($dir.$file2["name"])){
        echo "Ya existe el fichero ".$file2["name"]; 
    }

    copy($file1["tmp_name"],$dir);
    copy($file2["tmp_name"],$dir);

}
?>