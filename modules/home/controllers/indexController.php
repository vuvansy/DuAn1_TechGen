<?php

function construct()
{
    #Model dùng chung
    load_model('index');
}

function indexAction()
{




    $get_product_sale = get_product_sale();
    // show_array($get_product_new);

    //Laptop $id =1
    $get_product_laptop = get_product_by_id_category(1);
    //Phone
    $get_product_phone = get_product_by_id_category(5);
    // show_array($get_product_phone);
    //Clock
    $get_product_clock = get_product_by_id_category(10);

    //===Để đưa dữ liệu qua form view===

    //Danh sách hàng hóa theo loại
    $data['product_laptop'] = $get_product_laptop;
    $data['product_phone'] = $get_product_phone;
    $data['product_clock'] = $get_product_clock;
    //Danh sách hàng hóa Flash-sales
    $data['product_sale'] = $get_product_sale;


    load_view('index', $data);
}
