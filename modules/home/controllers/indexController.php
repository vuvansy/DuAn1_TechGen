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

    $list_product = get_product();
    // show_array($list_product);

    //Để đưa dữ liệu qua form view

    // category 
    $data['category'] = $list_category;
    // Product 
    $data['product'] = $list_product;


    load_view('index', $data);
}
