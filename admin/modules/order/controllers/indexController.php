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
            1 => 'confirmed',
            2 => 'transport',
            3 => 'cancel',
            4 => 'success'
        ];
        $id = $_GET['key'];
        $data['order_status'] = $_POST['status_order'];
        $backLink = 'Location: ?mod=order&action=' . $page[$_POST['status_order']];
        $order_status = (get_part_order_by_id($id))[0]['order_status'];
        var_dump($order_status);
        if($order_status == 0) {
            if($_POST['status_order'] == 1) {
                $detail = get_detail_order_by_id_order($id);
                foreach($detail as $item) {
                    $id_product = $item['id_product'];
                    $product = get_product_by_id($id_product)[0];
                    $quantity_product = $product['product_quantity'];
                    $quantity_order = $item['order_detail_quantity'];
                    $new_quantity = $quantity_product - $quantity_order;
                    set_confirmed_quantity_product($id_product, $new_quantity);
                }
            }
        }
        if($order_status == 1 || $order_status == 2) {
            if($_POST['status_order'] == 3) {
                $detail = get_detail_order_by_id_order($id);
                foreach($detail as $item) {
                    $id_product = $item['id_product'];
                    $product = get_product_by_id($id_product)[0];
                    $quantity_product = $product['product_quantity'];
                    $quantity_order = $item['order_detail_quantity'];
                    $new_quantity = $quantity_order + $quantity_product;
                    set_cancel_quantity_product($id_product, $new_quantity);
                }
            }
        }
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

function confirmedAction() {
    $data['orderConfirmedList'] = get_order_confirm();
    load_view('confirmed', $data);
}

function detailAction()
{
    if(isset($_GET['key']) && ($_GET['key'] != '')) {
        $id = $_GET['key'];
        $data['order_detail'] = get_detail_order_by_id_order($id);
        $data['order_information'] = get_order_by_id_order($id);
        load_view('detail', $data);
    }
}
