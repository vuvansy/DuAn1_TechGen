<?php

function construct()
{

    load_model('index');
}

function indexAction()
{
    load_view('index');
}


function warningAction()
{
    load_view('warning');
}
