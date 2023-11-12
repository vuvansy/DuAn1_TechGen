<?php

function construct()
{

    load_model('index');
}

function indexAction()
{

    load_view('index');
}

function addAction()
{
    load('lib', 'validation');
}

function updateAction()
{
}
function deleteAction()
{
}

function productDetailAction()
{
    load_view('productDetail');
}

function productListAction()
{
    load_view('productList');
}

