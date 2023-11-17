<?php

function get_order_wait() {
    return db_fetch_array("SELECT * FROM `order_tg` WHERE `order_status` = 0");
}

function get_order_trans() {
    return db_fetch_array("SELECT * FROM `order_tg` WHERE `order_status` = 1");
}

function get_order_cancel() {
    return db_fetch_array("SELECT * FROM `order_tg` WHERE `order_status` = 2");
}

function get_order_success() {
    return db_fetch_array("SELECT * FROM `order_tg` WHERE `order_status` = 3");
}

function get_part_order_by_id($id_order) {
    $sql = "SELECT `id_order`, `order_status` FROM `order_tg` WHERE `id_order` = " . $id_order;
    return db_fetch_array($sql);
}

function update_order_status($data, $id_order) {
    return db_update('order_tg', $data, $id_order);
}

?>