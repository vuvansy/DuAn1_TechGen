<?php

//Truy vấn danh sách SẢN PHẨM theo mã LOẠI HÀNG
function get_product_by_id_category($id_category)
{
    $item = db_fetch_array("SELECT *FROM `product` WHERE `id_category` = {$id_category} ORDER BY `id_product` DESC  LIMIT 0, 10 ");
    if (!empty($item))
        return $item;
}
