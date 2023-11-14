<?php

function construct()
{

    load_model('index');
}

function indexAction()
{
    load_view('index');
}

function cancelAction()
{


    load_view('cancel');
}

function successAction()
{
    load_view('success');
}



function confirm_updateAction()
{
    load_view('confirm_update');
}

function transportAction()
{
    load_view('transport');
}

function detailAction()
{
    load_view('detail');
}
