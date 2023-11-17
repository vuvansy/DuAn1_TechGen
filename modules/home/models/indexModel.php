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
    $item = db_fetch_array("SELECT *FROM `product` WHERE `id_category` = {$id_category} ORDER BY `id_product` DESC  LIMIT 0, 5 ");
    if (!empty($item))
        return $item;
}

//Truy vấn Top 4 sản phẩm SALE 
function get_product_sale()
{
    $item = db_fetch_array("SELECT *FROM `product`  ORDER BY ((`product_price` - `product_sale`)/`product_price`) * 100  DESC  LIMIT 0, 4 ");
    if (!empty($item))
        return $item;
}

function get_users($start = 1, $num_per_page = 10, $where = "")
{
    if (!empty($where)) {
        $where = "WHERE $where";
    }
    $list_user = db_fetch_array("SELECT * FROM `tbl_users` $where LIMIT $start,$num_per_page");
    return $list_user;
};
