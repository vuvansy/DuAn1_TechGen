<?php
//Nơi Xử lý

function construct()
{
    #Model dùng chung
    load_model('index');
}

function indexAction()
{
    // echo 'Trang chủ';
    load_view('index');
}


function warrantyAction()
{
    // echo 'Trang chủ';
    load_view('warranty');
}