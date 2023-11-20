<?php
//Số lượng User
function num_row_user()
{
    $num_row_user = db_num_rows("SELECT * FROM `user`");
    return $num_row_user;
}

//Số lượng Product
function num_row_product()
{
    $num_row_product = db_num_rows("SELECT * FROM `product`");
    return  $num_row_product;
}

//Số lượng Order
function num_row_order()
{
    $num_row_order = db_num_rows("SELECT * FROM `order_tg`");
    return $num_row_order;
}


//Số lượng Category
function num_row_category()
{
    $num_row_category = db_num_rows("SELECT * FROM `category`");
    return $num_row_category;
}
