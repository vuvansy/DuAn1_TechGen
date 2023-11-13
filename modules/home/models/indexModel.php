<?php
//Lấy tất cả danh mục sản phẩm
function  get_category()
{
    $item = db_fetch_array("SELECT *FROM `category`");
    if (!empty($item))
        return $item;
}

// Lấy tất cả sản phẩm
function  get_product()
{
    $item = db_fetch_array("SELECT *FROM `product`");
    if (!empty($item))
        return $item;
}
