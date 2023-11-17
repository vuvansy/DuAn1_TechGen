<?php

function construct()
{

    load_model('index');
}

function indexAction()
{
    $data['orderListWait'] = get_order_wait();
    load_view('index', $data);
}

function cancelAction()
{
    $data['orderListCancel'] = get_order_cancel();
    load_view('cancel', $data);
}

function successAction()
{
    $data['orderListSuccess'] = get_order_success();
    load_view('success', $data);
}

function confirm_updateAction()
{
    if(isset($_GET['key']) && ($_GET['key'] != '')) {
        $id = $_GET['key'];
        $data['order_update'] = get_part_order_by_id($id);
        $data['id'] = $id;
        load_view('confirm_update',$data);
    } else {
        header('Location: ?mod=order');
    }
}

function update_statusAction() {
    if(isset($_GET['key']) && ($_GET['key'] != '')) {
        $page = [
            0 => 'index',
            1 => 'transport',
            2 => 'cancel',
            3 => 'success'
        ];
        $id = $_GET['key'];
        $data['order_status'] = $_POST['status_order'];
        $backLink = 'Location: ?mod=order&action=' . $page[$_POST['status_order']];
        $where = "id_order = " . $id;
        update_order_status($data, $where);
        header($backLink);
    } else {
        header('Location: ?mod=order');
    }
}

function transportAction()
{
    $data['orderListTrans'] = get_order_trans();
    load_view('transport', $data);
}

function detailAction()
{
    if(isset($_GET['key']) && ($_GET['key'] != '')) {
        $id = $_GET['key'];
        echo $id;
    }
//    load_view('detail');
}
