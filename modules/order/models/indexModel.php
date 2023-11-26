<?php

function get_product_by_id($product) {
    return db_fetch_row("SELECT `id_product`,`product_name`, `product_sale`, `product_price`, `product_image`, `product_quantity` FROM `product` WHERE `id_product` = " .$product);
}

function create_order($data) {
    return db_insert('order_tg',$data);
}

function get_id_order_by_user($user) {
    $sql = "SELECT `id_order` FROM `order_tg` WHERE `id_user` = ".$user." ORDER BY `id_order` DESC LIMIT 1";
    return db_fetch_row($sql);
}

function create_detail_order($data) {
    return db_insert('order_detail',$data);
}

function get_order_by_id_user($user) {
    $sql = "SELECT * FROM `order_tg` WHERE `id_user` = " . $user . " ORDER BY `id_order` DESC";
    return db_fetch_array($sql);
}

function get_detail_order($order) {
    return db_fetch_array("SELECT * FROM `order_detail` WHERE `id_order` = " .$order);
}

function get_total_order($order) {
    $sql = "SELECT `order_total` FROM `order_tg` WHERE `id_order` = " . $order;
    return db_fetch_row($sql);
}

function set_cancel_order($order) {
    $data['order_status'] = 3;
    $where = 'id_order = ' . $order ;
    return db_update('order_tg', $data, $where);
}

function set_up_product_quantity($id,$quantity) {
    $data['product_quantity'] = $quantity;
    $where = 'id_product = ' . $id;
    return db_update('product', $data, $where);
}

function get_status_order_by_id_order($id_order) {
    $sql = "SELECT `order_status` FROM `order_tg` WHERE `id_order` = " . $id_order;
    return db_fetch_row($sql);
}

function set_status_order_hidden($id_order) {
    $status_new = [
        3 => 5,
        4 => 6
    ];
    $status_now = (get_status_order_by_id_order($id_order))['order_status'];
    $data['order_status'] = $status_new[$status_now];
    $where = 'id_order = ' . $id_order;;
    return db_update('order_tg', $data, $where);
}


?>