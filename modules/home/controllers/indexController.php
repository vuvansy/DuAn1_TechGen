<?php

function construct()
{
    #Model dùng chung
    load_model('index');
}

function indexAction()
{

    $list_category = get_category();
    // show_array($list_category);

    // $get_category_by_id = get_category_by_id();

    $list_product = get_product();
    // show_array($list_product);

    //Laptop $id =1
    $get_product_by_id_category = get_product_by_id_category(1);


    //===Để đưa dữ liệu qua form view===
    // category 
    $data['category'] = $list_category;

    // Product 
    $data['product'] = $list_product;

    //Danh sách hàng hóa theo mã loại
    $data['product_get_by_id_category'] = $get_product_by_id_category;


    load_view('index', $data);
}
