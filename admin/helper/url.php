<?php

function base_url($url = "") {
    global $config;
    return $config['base_url'].$url;
}
 
//Hàm điều hướng header
function redirect($url = ""){
    global $config;
    $path = $config['base_url'].$url;
    header("Location: {$path}");

    // if(!empty($url)){
    //     header("location: $url");
    // }
}
