<?php

function construct()
{

    load_model('index');
}

function indexAction()
{

    load_view('index');
}

function updateAction()
{
}

function commentListAction()
{

    load_view('commentList');
}

function commentDetailAction()
{

    load_view('commentDetail');
}

