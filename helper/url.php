<?php

function base_url($url = "")
{
    global $config;
    return $config['base_url'] . $url;
}

//Hàm chuyển hướng
function redirect($url = "")
{
    global $config;
    $path = $config['base_url'] . $url;
    header("Location: {$path}");

    // if(!empty($url)){
    //     header("location: $url");
    // }
}
