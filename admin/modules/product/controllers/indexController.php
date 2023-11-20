<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    /*load_*/
    if (isset($_POST['search-product-btn'])) {

        $search_product = $_POST['box-search-product'];
        echo $search_product;
        $get_product = search_product_by_name($search_product);
    } else {
        $get_product = get_product();
    }
    // show_array($get_product);
    /* đưa dữ liệu qua form view*/
    $data['get_product'] = $get_product;
    load_view('index', $data);
}

function addAction()
{
    if (isset($_POST['btn-add-product'])) {
        $data['id_product'] = $_POST['id_product'];   /*id product*/
        $data['product_name'] = $_POST['product_name'];   /*tên product*/
        $data['product_price'] = $_POST['product_price']; /*giá product*/
        $data['product_sale'] = $_POST['product_sale'];   /*giảm giá product*/
        $data['product_quantity'] = $_POST['product_quantity'];   /*số lượng product*/
        $data['date_import'] = $_POST['date_import'];     /*ngày nhập product*/
        $data['product_image'] = $_FILES['product_image']['name']; /*hình product*/
        $fileTmpPath = $_FILES['product_image']['tmp_name'];
        $gallery['id_product'] = $_POST['id_product']; /*lấy id product qua bảng chi tiết*/
        $data['id_category'] = $_POST['id_category'];  /*id danh mục*/
        $data['product_desc'] = $_POST['product_desc']; /*mô tả ngắn product*/
        $data['product_content'] = $_POST['product_content']; /*nội dung product*/
        $data['product_status'] = 0; /*0 là hiện, 1 là ẩn*/
        $data['special'] = 0; /* 0 là ko check vào sp đặc biệt,1 là check vào là sp đặc biệt*/

        if (isset($_POST['product_status'])) {
            $data['product_status'] = 1;
        }
        if (isset($_POST['special'])) {
            $data['special'] = 1;
        }
        $destination = '../public/images/product/' . $data['product_image'];
        move_uploaded_file($fileTmpPath, $destination);
        db_insert('product', $data);

        $gallery_name = [];
        if($_FILES['gallery_name']['name'] != ''){
            for ($i = 0; $i <count($_FILES['gallery_name']['name']) ; $i++) {
                $gallery['id_gallery'] = null;
                $gallery['gallery_name'] = $_FILES['gallery_name']['name'][$i];
                $fileTmpPath = $_FILES['gallery_name']['tmp_name'][$i];
                $destination = '../public/images/gallery/' . $gallery['gallery_name'];
                move_uploaded_file($fileTmpPath, $destination);
                db_insert('gallery', $gallery);
            }
        }
        
        $_SESSION['masew'] = '<span class="massew">Thêm mới thành công !</span>';
        header('location: ?mod=product&action=add');
    } else {
        load_view('add');
    }
}

function editAction()
{

    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];
        $product_by_id = (get_product_by_id($id_product))[0];
        // show_array($product_by_id);
        $data["product_by_id"] = $product_by_id;
        // show_array($data["product_by_id"]);
        load_view('edit', $data);
    }

    if (isset($_POST['btn-edit-product'])) {
        $data_new['id_product'] = $_POST['id_product'];   /*id product*/
        $data_new['product_name'] = $_POST['product_name'];   /*tên product*/
        $data_new['product_price'] = $_POST['product_price']; /*giá product*/
        $data_new['product_sale'] = $_POST['product_sale'];   /*giảm giá product*/
        $data_new['product_quantity'] = $_POST['product_quantity'];   /*số lượng product*/
        $data_new['date_import'] = $_POST['date_import'];     /*ngày nhập product*/
        if (($_FILES['product_image_new']['name'] != '')) {
            // echo($_FILES['product_image_new']['name']);
            $data_new['product_image'] = $_FILES['product_image_new']['name']; /*hình product*/
            $fileTmpPath = $_FILES['product_image_new']['tmp_name'];
            $destination = 'public/images/product/' . $data_new['product_image'];
            move_uploaded_file($fileTmpPath, $destination);
        } else {
            $data_new['product_image'] = $product_by_id['product_image'];
        }
        // $gallery['id_product'] = $_POST['id_product']; /*lấy id product qua bảng chi tiết*/
        $data_new['id_category'] = $_POST['id_category'];  /*id danh mục*/
        $data_new['product_desc'] = $_POST['product_desc']; /*mô tả ngắn product*/
        $data_new['product_content'] = $_POST['product_content']; /*nội dung product*/
        $data_new['product_status'] = 0; /*0 là hiện, 1 là ẩn*/
        $data_new['special'] = 0; /* 0 là ko check vào sp đặc biệt,1 là check vào là sp đặc biệt*/

        // show_array($data_new);
        // echo($product_by_id['product_image']);
        if (isset($_POST['product_status'])) {
            $data_new['product_status'] = 1;
        }
        if (isset($_POST['special'])) {
            $data_new['special'] = 1;
        }
        $where = 'id_product = ' . $data_new['id_product'];
        db_update('product', $data_new, $where);
        header('location: ?mod=product&action=index');
        $_SESSION['masew'] = '<span class="massew">Cập nhật thành công !</span>';
    }
}

function deleteAction()
{
    // $id_product = $_GET['id'];
    // // echo($id_product);
    // dell_product_by_id($id_product);
    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];
        if(delete_order_detail_by_id($id_product)){
            header('location: ?mod=product');
        }
        if(delete_cmt_by_id($id_product)){
            header('location: ?mod=product');
        }
        if (delete_gallery_by_id($id_product)) {
            header('location: ?mod=product');
        }
        if (dell_product_by_id($id_product)) {
            header('location: ?mod=product');
        }
    } else {
        header('location: ?mod=product');
    }

    // load_view('index');
}
