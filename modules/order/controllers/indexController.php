<?php

function construct()
{
    load_model('index');
}

function addAction() {
    $id = $_GET['id'];
    $information = get_product_by_id($id);
    $count = 1;
    $check = true;
    $i = 0;
    if(isset($_SESSION['cart']) && is_array($_SESSION['cart']) ) {
        foreach ($_SESSION['cart'] as $item) {
            if($item['id'] == $id) {
                $number = $_SESSION['cart'][$i]['count'] + 1;
                $_SESSION['cart'][$i]['count'] = $number;
                $check = false;
                break;
            }
            $i++;
        }
    }
    if($check) {
        $_SESSION['cart'][] = [
            'id' => $information['id_product'],
            'name' => $information['product_name'],
            'price' => $information['product_sale'],
            'image' => $information['product_image'],
            'count' => $count
        ];
    }
    header('location: ?mod=order&action=index');
}

function removeAction() {
    $key = $_GET['key'];
    if(count($_SESSION['cart']) == 1) {
        header('location: ?mod=order&action=removeAll');
    } else {
        array_splice($_SESSION['cart'], $key, 1);
        header('location: ?mod=order&action=index');
    }
}

function upAction() {
    $key = $_GET['key'];
    if($_SESSION['cart'][$key]['count'] == 10) {
        header('location: ?mod=order&action=index');
    } else {
        $number = $_SESSION['cart'][$key]['count'] + 1;
        $_SESSION['cart'][$key]['count'] = $number;
        header('location: ?mod=order&action=index');
    }
}

function downAction() {
    $key = $_GET['key'];
    if($_SESSION['cart'][$key]['count'] == 1) {
        header('location: ?mod=order&action=remove&key='.$key);
    } else {
        $number = $_SESSION['cart'][$key]['count'] - 1;
        $_SESSION['cart'][$key]['count'] = $number;
        header('location: ?mod=order&action=index');
    }
}

function removeAllAction() {
    unset($_SESSION['cart']);
    header('location: ?mod=order&action=index');
}

function payAction() {
    if(isset($_POST)) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentDate = date("Y-m-d");
        $order['id_order'] = null;
        $order['id_user'] = $_SESSION['user']['id'];
        $order['id_delivery'] = 1;
        $order['order_name'] = $_POST['name_delivery'];
        $order['order_total'] = $_POST['order_total'];
        $order['order_email'] = $_POST['email_delivery'];
        $order['order_phone'] = $_POST['phone_delivery'];
        $order['order_address'] = $_POST['address_delivery'];
        $order['order_date'] = $currentDate;
        $order['order_status'] = 0;
        $order['order_quantity'] = $_POST['order_quantity'];
        create_order($order);
        $id_order = (get_id_order_by_user($_SESSION['user']['id']))['id_order'];
        show_array($_SESSION['cart']);
        foreach ($_SESSION['cart'] as $item) {
            $order_detail['id_order_detail'] = null;
            $order_detail['id_product'] = $item['id'];
            $order_detail['id_order'] = $id_order;
            $order_detail['order_detail_quantity'] = $item['count'];
            $order_detail['order_detail_total'] = ($item['price'] * $item['count']);
            show_array($order_detail);
            create_detail_order($order_detail);
        }
        header('location: ?mod=order&action=removeAll');
    }
}

function indexAction()
{
    load_view('index');
}

function cartviewAction()
{

    load_view('cartview');
}

function orderDetailAction()
{

    load_view('orderDetail');
}

function successAction()
{

    load_view('success');
}
?>