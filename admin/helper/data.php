<?php

//Show dữ liệu Array
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
