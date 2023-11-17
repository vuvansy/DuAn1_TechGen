<?php

function construct()
{

    load_model('index');
}

function indexAction()
{

    load_view('index');
}


function productListAction()
{
    if (isset($_GET['cat_id'])) {
        $cat_id = (int)$_GET['cat_id'];
        $info_cart = get_category_by_id($cat_id);
        // show_array($info_cart);
        $list_cart_by_id = get_product_by_id_category($cat_id);
        // show_array($list_cart_by_id);
        $data['info_cart_id'] = $info_cart;
        $data['list_cart_id'] = $list_cart_by_id;
    }
    // echo $cat_id;
    // global $where;
    // $data = get_product_search($where);





    load_view('productList', $data);
}

function productsearchAction()
{

    $list_product = get_product_search($_POST['search']);
    // show_array($list_product);
    $data['list_product'] = $list_product;
    load_view('productsearch', $data);
}
