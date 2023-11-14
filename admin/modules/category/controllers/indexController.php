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


function addAction()
{
    // echo 'Detail';
    load_view('add');
}
function editAction()
{
    // echo 'Detail';
    load_view('edit');
}
