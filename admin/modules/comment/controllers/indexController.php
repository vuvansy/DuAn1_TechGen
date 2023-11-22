<?php

function construct()
{

    load_model('index');
}

function indexAction()
{
    // $product_id = get_product();
    //show_array($id_product);
    if (isset($_POST['search-product-btn'])) {
        $search_product = $_POST['box-search-product'];
        //echo $search_product;
        $get_product = search_product_by_name($search_product);
    } else {
        $get_product = get_product_search();
    }
    $data['get_product'] = $get_product;
    // var_dump($get_product) ;
    // $data['id_product'] = $product_id;
    load_view('index', $data);
}



function commentDetailAction()
{
    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];
    }
    if (isset($_POST['search-product-btn'])) {
        $search_product = $_POST['box-search-product'];
        // echo $search_product;
        $comment_list = search_comment_by_fullname($search_product,$id_product);
        //var_dump( $comment_list );
         } 
    else {
        $comment_list = get_comment_by_product_id($id_product);
    }
    $data['comment_list'] = $comment_list;
    load_view('commentDetail', $data);
}


function deteleIdcommentAction(){
    
    // if (isset($_GET['id'])) {
    //     $id_comment = $_GET['id'];
    //     $id_product = (get_comment_by_id_comment($id_comment))[0]['id_product'];
    //     // echo $id_product ;
    //     $detele = deleteCommentByID_comment($id_comment);
    //     header('Location: ?mod=comment&action=commentDetail&id='.$id_product);
    // }
    if (isset($_GET['id'])) {
        $id_comment = $_GET['id'];
        $id_product = (get_comment_by_id_comment($id_comment))[0]['id_product'];
        // show_array($id_comment);
    if(is_array($id_comment)) {
            foreach ($id_comment as $item) {
            show_array($id_comment);
            db_delete("comment", "`id_comment` = '{$item}'");
         // var_dump($item);
        
      } 
   } else {
      db_delete("comment", "`id_comment` = '{$id_comment}'");       
   }
      header('Location: ?mod=comment&action=commentDetail&id='.$id_product);
    }    
     
   
}


    



