<?php

function get_order_wait() {
    return db_fetch_array("SELECT * FROM `order_tg` WHERE `order_status` = 0 ORDER BY `id_order` DESC");
}

function get_order_trans() {
    return db_fetch_array("SELECT * FROM `order_tg` WHERE `order_status` = 1 ORDER BY `id_order` DESC");
}

function get_order_cancel() {
    return db_fetch_array("SELECT * FROM `order_tg` WHERE `order_status` = 2 OR `order_status` = 4 ORDER BY `id_order` DESC");
}

function get_order_success() {
    return db_fetch_array("SELECT * FROM `order_tg` WHERE `order_status` = 3 OR `order_status` = 5 ORDER BY `id_order` DESC");
}

function get_part_order_by_id($id_order) {
    $sql = "SELECT `id_order`, `order_status` FROM `order_tg` WHERE `id_order` = " . $id_order;
    return db_fetch_array($sql);
}

function update_order_status($data, $id_order) {
    return db_update('order_tg', $data, $id_order);
}

function get_detail_order_by_id_order($id) {
    $sql = "SELECT * FROM `order_detail` WHERE `id_order` = " . $id;
    return db_fetch_array($sql);
}

function get_image_by_id_order($id) {
    $sql = "SELECT `product_image` FROM `product` WHERE `id_product` = " . $id;
    return db_fetch_array($sql);
}

function get_name_by_id_order($id) {
    $sql = "SELECT `product_name` FROM `product` WHERE `id_product` = " . $id;
    return db_fetch_array($sql);
}

function get_order_by_id_order($id) {
    $sql = "SELECT * FROM `order_tg` WHERE `id_order` = " . $id;
    return db_fetch_array($sql);
}

?>