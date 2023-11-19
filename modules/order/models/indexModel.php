<?php

function get_product_by_id($product) {
    return db_fetch_row("SELECT `id_product`,`product_name`, `product_sale`, `product_image` FROM `product` WHERE `id_product` = " .$product);
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
    $sql = "SELECT * FROM `order_tg` WHERE `id_user` = " . $user;
    return db_fetch_array($sql);
}

function get_detail_order($order) {
    return db_fetch_array("SELECT * FROM `order_detail` WHERE `id_order` = " .$order);
}

function get_total_order($order) {
    $sql = "SELECT `order_total` FROM `order_tg` WHERE `id_order` = " . $order;
    return db_fetch_row($sql);
}


?>