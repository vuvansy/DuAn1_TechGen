<?php

function construct()
{

    load_model('index');
}



function indexAction()
{

    load_view('index');
}
function cartviewAction()
{

    load_view('cartview');
}
function orderDetailAction()
{

    load_view('orderDetail');
}
function successAction()
{

    load_view('success');
}
