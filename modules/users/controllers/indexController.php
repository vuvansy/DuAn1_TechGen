
<?php
function construct()
{
    //Dữ liệu chung, load đầu tiên
    load_model("index");
    load('lib', 'validation');
    load('lib', 'email');
}

function indexAction()
{
    load_view('index');
}

function regAction()
{

    load_view('reg');
}

function resetAction()
{
    load_view('reset');
}
function newPassAction()
{

    load_view('newPass');
}

function editPassAction()
{

    load_view('editPass');
}

function resetOkAction()
{

    load_view('resetOk');
}

function logoutAction()
{
}


function activeAction()
{
}

function updateAction()
{
    load_view('update');
}



?>
