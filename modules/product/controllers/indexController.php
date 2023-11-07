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
