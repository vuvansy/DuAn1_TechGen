<?php

//Truy vấn một LOẠI HÀNG theo mã loại
function get_category_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM `category` WHERE `id_category` = {$id}");
    if (!empty($item))
        return $item;
}

//Truy vấn danh sách SẢN PHẨM theo mã LOẠI HÀNG
function get_product_by_id_category($id_category)
{
    $item = db_fetch_array("SELECT *FROM `product` WHERE `id_category` = {$id_category} ORDER BY `id_product` DESC  LIMIT 0, 10 ");
    if (!empty($item))
        return $item;
}
