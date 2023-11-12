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

function detailAction()
{
    // echo 'Detail';
    load_view('detail');
}

function listAction()
{
    // echo 'Detail';
    load_view('list');
}

function addAction()
{
    // echo 'Detail';
    load_view('add');
}
function updateAction()
{
    // echo 'Detail';
    load_view('update');
}