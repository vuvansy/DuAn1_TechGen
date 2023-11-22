<?php


function get_product()
{
   return db_fetch_array("SELECT * FROM `product` WHERE `id_product` ");
}

// số lươngj
function get_quantili_comment($id_product)
{
   $sql = "SELECT COUNT(`id_comment`) FROM `comment` WHERE `id_product` = " . $id_product;
   return db_fetch_array($sql);
}
// date cũ nhất mới nhất 
function get_date_comment($id_product)
{
   $sql = " SELECT 
   MIN(date_comment) AS oldest_comment_date,
   MAX(date_comment) AS newest_comment_date
    FROM comment where `id_product` = " . $id_product;
   return db_fetch_array($sql);
}

function search_product_by_name($name)
{
   $sql = "SELECT * FROM `product` WHERE `product_name`LIKE '%$name%'";
   return db_fetch_array($sql);
}

function get_product_search()
{
   return db_fetch_array("SELECT * FROM `product` WHERE 1");
}

// =====productDetail====
function get_comment_by_product_id($id_product)
{
   $sql = "SELECT * FROM `comment` WHERE `id_product`= " . $id_product;
   // echo    $sql;
   $item = db_fetch_array($sql);
   // var_dump($item);
   return $item;
}

function get_user_by_id_user($id_user)
{
   $sql = "SELECT * FROM `user` WHERE `id_user`=" . $id_user;
   $item = db_fetch_array($sql);
   return $item;
}
// xóa cmt theo id_product


function deleteCommentByID_comment($id_comment)
{
   return db_delete("comment", "`id_comment` = '{$id_comment}'");
}

function get_comment_by_id_comment($id_comment)
{
   $sql = "SELECT * FROM `comment` WHERE `id_comment`= " . $id_comment;
   // echo    $sql;
   $item = db_fetch_array($sql);
   // var_dump($item);
   return $item;
}

//  seacrh fullname detail
function search_comment_by_fullname($fullname, $id_product)
{
   $sql = "SELECT * 
   FROM comment 
   WHERE id_user IN (SELECT id_user FROM user WHERE fullname LIKE '%" . $fullname . "%')  AND `id_product` = " . $id_product;
   // echo   $sql;
   $item = db_fetch_array($sql);
   return $item;
}

// function delete_all($id_comment){
//    if(is_array($id_comment)) {
//       foreach ($id_comment as $item) {
//          db_delete("comment", "`id_comment` = '{$item}'");
//          // var_dump($item);
//       } 
//    } else {
//       db_delete("comment", "`id_comment` = '{$id_comment}'");
//    }

// } 

?>