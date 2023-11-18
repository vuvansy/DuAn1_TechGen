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

function get_product_by_id($product_id) {
    $products =   get_product();
    // Tìm sản phẩm trong mảng dựa trên ID sản phẩm
    foreach ($products as $product) {
        if ($product['id_product'] == $product_id) {
            return $product; // Trả về thông tin sản phẩm nếu tìm thấy
        }
    }
    return false; // Trả về false nếu không tìm thấy sản phẩm
}

// comment

function get_comment_by_product_id($id_product) {
    $sql = "SELECT * FROM `comment` WHERE `id_product`  = ".$id_product."  ORDER BY `id_comment` DESC" ;
  $item = db_fetch_array($sql);
        return $item;
}
function get_fullname_user_by_id_user($id_user) {
    $sql = "SELECT `fullname` FROM `user` WHERE `id_user` = ".$id_user;
    $item = db_fetch_array($sql);
    return $item;
}
function get_user_by_id_user($id_user){
    $sql = "SELECT * FROM `user` WHERE `id_user`=".$id_user;
    $item = db_fetch_array($sql);
    return $item;
}


// nhập bình luận
function add_comment($data){
      return db_insert('comment', $data);

}