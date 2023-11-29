<?php

function construct()
{
    load('lib', 'validation');
    load_model('index');
}

function indexAction()
{
    /*load_*/
    if (isset($_POST['search-product-btn'])) {
        $search_product = $_POST['box-search-product'];
        // echo $search_product;
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
    global $error;
    $data = [];
    if (isset($_POST['btn-add-product'])) {
        $error = array();

        //tên sp
        if (empty($_POST['product_name'])) {
            $error['product_name'] = "Không được để trống tên sản phẩm";
            // echo "lỗi";
        } else {
            $data['product_name'] = $_POST['product_name'];
        }

        //giá sp
        if (empty($_POST['product_price'])) {
            $error['product_price'] = "Không được để trống giá sản phẩm";
            // echo "lỗi";
        } else {
            $data['product_price'] = $_POST['product_price'];
        }

        //số lượng sp
        if (empty($_POST['product_quantity'])) {
            $error['product_quantity'] = "Không được để trống số lượng";
            // echo "lỗi";
        } else {
            $data['product_quantity'] = $_POST['product_quantity'];
        }

        //ngày nhập sp
        if (empty($_POST['date_import'])) {
            $error['date_import'] = "Không được để trống ngày nhập";
            // echo "lỗi";
        } else {
            $data['date_import'] = $_POST['date_import'];
        }

        //hình ảnh sp
        if ($_FILES['product_image']['name'] == '') {
            $error['product_image'] = "Không được để trống hình ảnh";
            // echo "lỗi";
        } else {
            $data['product_image'] = $_FILES['product_image']['name'];
            $fileTmpPath = $_FILES['product_image']['tmp_name'];
        }

        //mô tả ngắn sp
        if (empty($_POST['product_desc'])) {
            $error['product_desc'] = "Không được để trống mô tả ngắn";
            // echo "lỗi";
        } else {
            $data['product_desc'] = $_POST['product_desc'];
        }

        //nội dung sp
        if (empty($_POST['product_content'])) {
            $error['product_content'] = "Không được để trống nội dung";
            // echo "lỗi";
        } else {
            $data['product_content'] = $_POST['product_content'];
        }

        //ảnh chi tiết sp
        if ($_FILES['gallery_name']['name'][0] == "") {
            $error['gallery_name'] = "Không được để trống hình ảnh";
        }
        // show_array($_FILES['gallery_name']);

        $data['product_sale'] = $_POST['product_sale'];
        $data['id_product'] = $_POST['id_product'];
        $gallery['id_product'] = $_POST['id_product']; 
        $data['id_category'] = $_POST['id_category'];
        $data['product_status'] = 0;
        $data['special'] = 0;
        if (isset($_POST['product_status'])) {
            $data['product_status'] = 1;
        }
        if (isset($_POST['special'])) {
            $data['special'] = 1;
        }

        if (empty($error)) {
            $destination = '../public/images/product/' . $data['product_image'];
            move_uploaded_file($fileTmpPath, $destination);
            db_insert('product', $data);
            $gallery_name = [];
            if ($_FILES['gallery_name']['name'] != '') {
                for ($i = 0; $i < count($_FILES['gallery_name']['name']); $i++) {
                    $gallery['id_gallery'] = null;
                    $gallery['gallery_name'] = $_FILES['gallery_name']['name'][$i];
                    $fileTmpPath = $_FILES['gallery_name']['tmp_name'][$i];
                    $destination = '../public/images/gallery/' . $gallery['gallery_name'];
                    move_uploaded_file($fileTmpPath, $destination);
                    db_insert('gallery', $gallery);
                }
            }
            $_SESSION['masew'] = '<span class="massew">Thêm mới thành công !</span>';
        } else {
            $_SESSION['masew'] = '<span class="massew">Có lỗi khi thêm !</span>';
        }
    }
    load_view('add', $data);
}
function editAction()
{
    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];
        $product_by_id = (get_product_by_id($id_product))[0];
    }
   
    global $error;

    if (isset($_POST['btn-edit-product'])) {
        $error = array();
        $data = [];

         //tên sp
         if (empty($_POST['product_name'])) {
            // $_SESSION['product_name'] = '<span class="massew">Vui lòng nhập đủ thông tin !</span>';
            $error['product_name'] = "Không được để trống tên sản phẩm";
            // echo "lỗi";
        } else {
            $data_new['product_name'] = $_POST['product_name'];
        }
         //giá sp
         if (empty($_POST['product_price'])) {
            // $_SESSION['product_price'] = '<span class="massew">Vui lòng nhập đủ thông tin !</span>';
            $error['product_price'] = "Không được để trống giá sản phẩm";
            // echo "lỗi";
        } else {
            $data_new['product_price'] = $_POST['product_price'];
        }

        //số lượng sp
        if (empty($_POST['product_quantity'])) {
            // $_SESSION['product_quantity'] = '<span class="massew">Vui lòng nhập đủ thông tin !</span>';
            $error['product_quantity'] = "Không được để trống số lượng";
            // echo "lỗi";
        } else {
            $data_new['product_quantity'] = $_POST['product_quantity'];
        }

        //ngày nhập sp
        if (empty($_POST['date_import'])) {
        
            // $_SESSION['date_import'] = '<span class="massew">Vui lòng nhập đủ thông tin !</span>';
            $error['date_import'] = "Không được để trống ngày nhập";
            // echo "lỗi";
        } else {
            $data_new['date_import'] = $_POST['date_import'];
        }
        //ảnh sp
        if (($_FILES['product_image_new']['name'] != '')) {
            $data_new['product_image'] = $_FILES['product_image_new']['name']; 
            $fileTmpPath = $_FILES['product_image_new']['tmp_name'];
            $destination = 'public/images/product/' . $data_new['product_image'];
            move_uploaded_file($fileTmpPath, $destination);
        } else {
            $data_new['product_image'] = $product_by_id['product_image'];
        }

         //mô tả ngắn sp
         if (empty($_POST['product_desc'])) {
            // $_SESSION['product_desc'] = '<span class="massew">Vui lòng nhập đủ thông tin !</span>';
            $error['product_desc'] = "Không được để trống mô tả ngắn";
            // echo "lỗi";
        } else {
            $data_new['product_desc'] = $_POST['product_desc'];
        }

        //nội dung sp
        if (empty($_POST['product_content'])) {
            // $_SESSION['product_content'] = '<span class="massew">Vui lòng nhập đủ thông tin !</span>';
            $error['product_content'] = "Không được để trống nội dung";
            // echo "lỗi";
        } else {
            $data_new['product_content'] = $_POST['product_content'];
        }
        
        $data_new['id_product'] = $_POST['id_product'];
        $data_new['product_sale'] = $_POST['product_sale'];             
        $data_new['id_category'] = $_POST['id_category']; 
        $data_new['product_status'] = 0;
        $data_new['special'] = 0; 

        // show_array($data_new);
        // echo($product_by_id['product_image']);
        if (isset($_POST['product_status'])) {
            $data_new['product_status'] = 1;
        }
        if (isset($_POST['special'])) {
            $data_new['special'] = 1;
        }
        $where = 'id_product = ' . $data_new['id_product'];

        if (empty($error)) {
            db_update('product', $data_new, $where);
            $_SESSION['maseww'] = '<span class="massew">Cập nhật thành công !</span>';
             header('location: ?mod=product&action=index');
            
        } else {
            $_SESSION['masew'] = '<span class="massew">Vui lòng nhập đủ thông tin !</span>';
        }
    }
    $data["product_by_id"] = $product_by_id;
    load_view('edit', $data);
   
}

function deleteAction()
{
    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];
        if (delete_order_detail_by_id($id_product)) {
            header('location: ?mod=product');
        }
        if (delete_cmt_by_id($id_product)) {
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
