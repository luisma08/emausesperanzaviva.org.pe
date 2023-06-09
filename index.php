<?php
    $url = $_GET['url'];
    $path = __DIR__."/pages/";
    $file = $path.$url.".php";
    if(!empty($url)){
        if(is_file($file)){
            require $file;
        }else {
            echo "no se encontro la pagina";
        }
    }else{
        $file = $path."index.php";
        require $file;
    }