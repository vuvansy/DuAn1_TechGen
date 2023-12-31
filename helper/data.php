<?php
//Tất cả các hàm truy vấn dùng chung

function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

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

function  get_product_new()
{
    $item = db_fetch_array("SELECT *FROM `product` ORDER BY `id_product` DESC  LIMIT 0, 5 ");
    if (!empty($item))
        return $item;
}




function get_product_search($search = "")
{
    $list_product = db_fetch_array("SELECT * FROM `product` WHERE `product_name` LIKE '%$search%'");
    return  $list_product;
};
