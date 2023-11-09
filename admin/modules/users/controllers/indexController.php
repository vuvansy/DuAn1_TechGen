
<?php
function construct()
{
    // echo Dữ liệu chung, load đầu tiên
    load_model("index");
    load('lib', 'validation');
    load('lib', 'email');
}




function addAction()
{

    load_view('add');
}

function editAction()
{

    load_view('edit');
}

function deleteAction()
{

    load_view('delete');
}

function listAction()
{

    load_view('list');
}

?>
