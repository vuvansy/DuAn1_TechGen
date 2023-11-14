<?php
//Truy vấn tất cả LOẠI HÀNG
function  get_category()
{
    $item = db_fetch_array("SELECT *FROM `category`");
    if (!empty($item))
        return $item;
}

//Truy vấn một LOẠI HÀNG theo mã loại
function get_category_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM `category` WHERE `id_category` = {$id}");
    if (!empty($item))
        return $item;
}

// Lấy tất cả SẢN PHẨM
function  get_product()
{
    $item = db_fetch_array("SELECT *FROM `product`");
    if (!empty($item))
        return $item;
}

//Truy vấn danh sách SẢN PHẨM theo mã LOẠI HÀNG
function get_product_by_id_category($id_category)
{
    $item = db_fetch_array("SELECT *FROM `product` WHERE `id_category` = {$id_category} ORDER BY `id_product` DESC  LIMIT 0, 5 ");
    if (!empty($item))
        return $item;
}
