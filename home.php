<?php
if(@$_GET['page']){
    $url=$_GET['page'] . ".php";
    if(is_file($url)){
        include $url;
    }else{
        echo"Requested File is not found";
    }
}else{
    include 'index.php';
}



?>