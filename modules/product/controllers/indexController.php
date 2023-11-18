<?php

function construct()
{

    load_model('index');
}

function indexAction()
{
    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment-form-submit'])) {
        $commentContent = $_POST['content'];
        $id_user = $_POST['id_user_name'];
        if (!empty($commentContent)) {
            $data = array(
                'content' => $commentContent,
                'id_user' => $id_user,
                'id_product' => $id_product
            );
            add_comment($data);
            // show_array($_POST);
            // echo 'Bình luận của bạn đã được gửi thành công!';
        } else {
            // echo 'Vui lòng nhập nội dung bình luận.';
        }
    }
    $list_comment = get_comment_by_product_id($id_product);
    $data['list_comment'] = $list_comment;
    $data['id_product'] = $id_product;
    load_view('index', $data);
}


function productListAction()
{
    $cat_id = (int) $_GET['cat_id'];
    // echo $cat_id;

    $info_cart = get_category_by_id($cat_id);
    // show_array($info_cart);
    $list_cart_by_id = get_product_by_id_category($cat_id);
    // show_array($list_cart_by_id);

    $data['info_cart_id'] = $info_cart;
    $data['list_cart_id'] = $list_cart_by_id;

    load_view('productList', $data);
}
