<?php

/* truy vấn sản phẩm */
function get_product()
{
   return db_fetch_array("SELECT * FROM `product` WHERE 1");
}

/* truy vấn sản phẩm theo id */

function get_category_by_id($id)
{
    $sql = "SELECT * FROM `category` WHERE `id_category` =" .$id;
   return db_fetch_array($sql);
}

// xóa sản phẩm theo id
function dell_product_by_id($id_product)
{  
   return db_delete("product", "`id_product` = '{$id_product}'");
   // $sql="id_product=".$id_product;
   // return db_delete('product',$sql);
}


/* truy vấn loại hàng */
function get_all_category()
{
   $sql = "SELECT * FROM `category` WHERE 1";
  return db_fetch_array($sql);
}

// truy vấn id cuối cùng trong mysql
function get_last_id()
{
   $sql = "SELECT `id_product` FROM `product` WHERE 1 ORDER BY `id_product` DESC LIMIT 1";
   return db_fetch_array($sql);
}

// truy vấn hình ảnh chi tiết của sp theo id_product
function get_gallery_product_by($id_product){
   $sql = "SELECT * FROM `gallery` WHERE `id_product`=".$id_product;
   return db_fetch_array($sql);
}

// xóa ảnh chi tiết theo id_product
function delete_gallery_by_id($id_product){
   // $sql="DELETE FROM `gallery` WHERE `id_product`=".$id_product;
   return db_delete("gallery", "`id_product` = '{$id_product}'");
}

// xóa cmt theo id_product

function delete_cmt_by_id($id_product){
   // $sql="DELETE FROM `gallery` WHERE `id_product`=".$id_product;
   return db_delete("comment", "`id_product` = '{$id_product}'");
}


// xóa oder theo id_product

function delete_order_detail_by_id($id_product){
   // $sql="DELETE FROM `gallery` WHERE `id_product`=".$id_product;
   return db_delete("order_detail", "`id_product` = '{$id_product}'");
}

// truy vấn sản phẩm theo id
function get_product_by_id($id_product){
   $sql = "SELECT * FROM `product` WHERE `id_product` =" .$id_product;
   return db_fetch_array($sql);
}

// cập nhật sản phẩm theo id
function update_product_by_id($data,$id_product){
   return db_update("product",$data,"`id_product` = '{$id_product}'");
}

// tìm kiếm sản phẩm theo tên
function search_product_by_name($name){
   $sql = "SELECT * FROM `product` WHERE `product_name`LIKE '%$name%'";
   return db_fetch_array($sql);
}



?>



