<?php

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

function checkAction()
{
    // echo 'Trang chủ';
    load_view('check');
}



