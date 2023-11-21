<?php

function construct()
{

    load_model('index');
}

function indexAction()
{

    $data["num_rows_user"] =  num_row_user();
    $data["num_row_product"] =  num_row_product();
    $data['num_row_order'] = num_row_order();
    $data['num_row_category'] = num_row_category();



    load_view('index', $data);
}


function warningAction()
{

    $product_warning = product_warning();
    // show_array($product_warning);

    $data["num_row_product"] =  num_row_product();

    $data['product_warning'] =  $product_warning;
    load_view('warning', $data);
}
