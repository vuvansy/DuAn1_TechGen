
<?php
function construct()
{
    // echo Dữ liệu chung, load đầu tiên
    load_model("index");
    load('lib', 'validation');
    load('lib', 'email');
}

function indexAction()
{

    load_view('index');
}



function addAction()
{

    load_view('add');
}

function editAction()
{

    load_view('edit');
}

function updateAction()
{

    load_view('update');
}

function listAction()
{

    load_view('list');
}

?>
