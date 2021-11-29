<?php
    echo $_FILES['image'];
    /*if(){
        $path = "images/{$_FILES['image']['name']}";
        if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
            header("Location: scan.php");
        };
        $redirect = $_SERVER['HTTP_REFERER'];
        header("Location: $redirect");
    }*/
?>