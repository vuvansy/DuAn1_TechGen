<?php

function construct()
{
    #Model dùng chung
    load_model('index');
}

function indexAction()
{

    $list_category = get_category();
    //     show_array($list_category);

    // $get_category_by_id = get_category_by_id();

    $list_product = get_product();
    // show_array($list_product);

    //Laptop $id =1
    $get_product_laptop = get_product_by_id_category(1);
    //Phone
    $get_product_phone = get_product_by_id_category(5);
    // show_array($get_product_phone);
    //Clock
    $get_product_clock = get_product_by_id_category(10);

    //===Để đưa dữ liệu qua form view===
    // category 
    $data['category'] = $list_category;

    // Product 
    $data['product'] = $list_product;

    //Danh sách hàng hóa theo mã loại
    $data['product_laptop'] = $get_product_laptop;
    $data['product_phone'] = $get_product_phone;
    $data['product_clock'] = $get_product_clock;


    load_view('index', $data);
}
