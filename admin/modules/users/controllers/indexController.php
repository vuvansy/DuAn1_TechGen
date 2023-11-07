
<?php
function construct()
{
    // echo Dữ liệu chung, load đầu tiên
    load_model("index");
    load('lib', 'validation');
    load('lib', 'email');
}




function loginAction()
{


    load_view('login');
}

function resetAction()
{

    load_view('reset');
}

function newpassAction()
{
}

//Logout
function logoutAction()
{
}


function updateAction()
{

    load_view('update');
}


?>
