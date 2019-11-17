<?php
    $connection = mysqli_connect('localhost','root','','php_mvc_project');
    if($connection){
        echo 'true';
    }else{
        echo 'false';
    }
?>