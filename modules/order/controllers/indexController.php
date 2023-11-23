<?php

function construct()
{
    load_model('index');
}

function addAction() {
    if(isset($_GET['id']) && ($_GET['id'] != '')) {
        $id = $_GET['id'];
        $information = get_product_by_id($id);
        if($information['product_quantity'] > 1 ) {
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
            if($information['product_sale'] > 0) {
                $price_product = $information['product_sale'];
            } else {
                $price_product = $information['product_price'];
            }
            if($check) {
                $_SESSION['cart'][] = [
                    'id' => $information['id_product'],
                    'name' => $information['product_name'],
                    'price' => $price_product,
                    'image' => $information['product_image'],
                    'count' => $count
                ];
            }
        }
    }
    header('location: ?mod=order&action=index');
}

function addToCarAction() {
    if(isset($_GET['id']) && ($_GET['id'] != '')) {
        $id = $_GET['id'];
        $information = get_product_by_id($id);
        if($information['product_quantity'] > 1 ) {
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
            if($information['product_sale'] > 0) {
                $price_product = $information['product_sale'];
            } else {
                $price_product = $information['product_price'];
            }
            if($check) {
                $_SESSION['cart'][] = [
                    'id' => $information['id_product'],
                    'name' => $information['product_name'],
                    'price' => $price_product,
                    'image' => $information['product_image'],
                    'count' => $count
                ];
            }
        }
        header('location: ?mod=product&action=index&id='.$id);
    } else {
        header('location: ?mod=order&action=index');
    }
}

function removeAction() {
    if(isset($_GET['key']) && ($_GET['key'] != '')) {
        $key = $_GET['key'];
        if(count($_SESSION['cart']) == 1) {
            header('location: ?mod=order&action=removeAll');
        } else {
            array_splice($_SESSION['cart'], $key, 1);
            header('location: ?mod=order&action=index');
        }
    } else {
        header('location: ?mod=order&action=index');
    }
}

function upAction() {
    if(isset($_GET['key']) && ($_GET['key'] != '')) {
        $key = $_GET['key'];
        if($_SESSION['cart'][$key]['count'] == 10) {
            header('location: ?mod=order&action=index');
        } else {
            $number = $_SESSION['cart'][$key]['count'] + 1;
            $_SESSION['cart'][$key]['count'] = $number;
            header('location: ?mod=order&action=index');
        }
    } else {
        header('location: ?mod=order&action=index');
    }
}

function downAction() {
    if(isset($_GET['key']) && ($_GET['key'] != '')) {
        $key = $_GET['key'];
        if($_SESSION['cart'][$key]['count'] == 1) {
            echo $_SESSION['cart'][$key]['count'];
            header('location: ?mod=order&action=remove&key='.$key);
        } else {
            $number = $_SESSION['cart'][$key]['count'] - 1;
            $_SESSION['cart'][$key]['count'] = $number;
            header('location: ?mod=order&action=index');
        }
    } else {
        header('location: ?mod=order&action=index');
    }
}

function removeAllAction() {
    unset($_SESSION['cart']);
    header('location: ?mod=order&action=index');
}

function payAction() {
    if(isset($_POST) && isset($_SESSION['cart'])) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentDate = date("Y-m-d");
        $order['id_order'] = null;
        $order['id_user'] = info_user(user_login(), 'id_user');;
        $order['id_delivery'] = $_POST['delivery-order'];
        $order['order_name'] = $_POST['name_delivery'];
        $order['order_total'] = $_POST['order_total'];
        $order['order_email'] = $_POST['email_delivery'];
        $order['order_phone'] = $_POST['phone_delivery'];
        $order['order_address'] = $_POST['address_delivery'];
        $order['order_date'] = $currentDate;
        $order['order_status'] = 0;
        $order['order_quantity'] = $_POST['order_quantity'];
        create_order($order);
        $id_order = (get_id_order_by_user(info_user(user_login(), 'id_user')))['id_order'];
//        show_array($_SESSION['cart']);
//        show_array($order);
        foreach ($_SESSION['cart'] as $item) {
            set_down_quantity($item['id'], $item['count']);
            $order_detail['id_order_detail'] = null;
            $order_detail['id_product'] = $item['id'];
            $order_detail['id_order'] = $id_order;
            $order_detail['order_detail_quantity'] = $item['count'];
            $order_detail['order_detail_total'] = ($item['price'] * $item['count']);
            create_detail_order($order_detail);
        }
        unset($_SESSION['cart']);
        header('location: ?mod=order&action=success');
    } else {
        header('location: ?mod=order&action=index');
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
    if(isset($_GET['keyOrder']) && ($_GET['keyOrder'] != '')) {
        $id = $_GET['keyOrder'];
        $detail = get_detail_order($id);
        $data['detail'] = $detail;
        $data['totalOrder'] = (get_total_order($id))['order_total'];
        load_view('orderDetail', $data);
    } else {
        header('location: ?mod=order&action=cartview');
    }
}

function removeOrderAction() {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        set_status_order_hidden($id);
        $_SESSION['alert_cannot_remove'] = '<script>
        alert("Bạn đã xóa đơn hàng có mã IT'.$id.' !")
        </script>';
        header('location: ?mod=order&action=cartview');
    }
}

function CancelAction() {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        set_cancel_order($id);
        $_SESSION['alert_cannot_remove'] = '<script>
        alert("Bạn đã hủy đơn hàng có mã IT'.$id.' !")
        </script>';
        header('location: ?mod=order&action=cartview');
    }
}

function cannotRemoveAction() {
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    $_SESSION['alert_cannot_remove'] = '<script>
        alert("Đơn hàng IT'.$id.' đang trong trạng thái xử lý ! Bạn không thể xóa")
    </script>';
    header('location: ?mod=order&action=cartview');
    } else {
        header('location: ?mod=order&action=cartview');
    }
}

function cannotCancelAction() {
    if(isset($_GET['status'])) {
        $status = $_GET['status'];
    } else {
        $status = 6;
    }
    $status_arr = [
        1 => 'đang vận chuyển',
        2 => 'đã hủy',
        3 => 'đã giao hàng',
        6 => 'đang xử lý',
    ];
    $_SESSION['alert_cannot_remove'] = '<script>
        alert("Bạn không thể hủy đơn hàng có trạng thái '.$status_arr[$status].' !")
    </script>';
    header('location: ?mod=order&action=cartview');
}

function successAction()
{
    load_view('success');
}
?>