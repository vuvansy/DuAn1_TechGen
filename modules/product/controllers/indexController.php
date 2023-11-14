<?php

function construct()
{

    load_model('index');
}

function indexAction()
{

    load_view('index');
}


function productListAction()
{
    load_view('productList');
}
