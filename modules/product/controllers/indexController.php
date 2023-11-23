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
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentDate = date("Y-m-d");
        if (!empty($commentContent)) {
            $data = array(
                'content' => $commentContent,
                'id_user' => $id_user,
                'id_product' => $id_product,
                'date_comment' => $currentDate
            );
            add_comment($data);
            // show_array($_POST);
            // echo 'Bình luận của bạn đã được gửi thành công!';
        } else {
            // echo 'Vui lòng nhập nội dung bình luận.';
        }
    }

    $product_id = get_product_by_id($id_product);
    // show_array($product_id);
    $data['product_id'] = $product_id;

    $list_gallery = get_gallery($id_product);
    // show_array($list_gallery);
    $data['list_gallery'] = $list_gallery;

    $list_comment = get_comment_by_product_id($id_product);
    $data['list_comment'] = $list_comment;
    $data['id_product'] = $id_product;
    // view
    $view_product =  product_views($id_product);
    $data['view_product'] =  $view_product;
    load_view('index', $data);
}
function errorAction()
{
    if (isset($_GET['id'])) {
        $id_product = $_GET['id'];
        // echo  $id_product;
        $_SESSION['error'] = 'Mời bạn đăng nhập để bình luận !';
        $load_header = 'Location: ?mod=product&cation=index&id=' . $id_product;
        header($load_header);
    }
}

function productListAction()
{
    $cat_id = (int) $_GET['cat_id'];
    // echo $cat_id;

    //Lấy số lượng Sản phẩm
    $num_rows = db_num_rows("SELECT * FROM `product` WHERE `id_category` = {$cat_id}");
    // echo $num_rows;

    //num_per_page :số lượng sản phẩm được hiển thị trên trang
    $num_per_page = 10;

    //total_rows: Tổng số sản phẩm 
    $total_rows = $num_rows;

    //num_pages :Tổng số trang 
    $num_pages = ceil($total_rows / $num_per_page);
    // echo "Số trang: $num_pages <br>";

    //Page : Chỉ số trang hiện tại
    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    // echo "Trang: $page";

    //start : Chỉ số sản phẩm bắt đầu mỗi trang
    $start = ($page - 1) * $num_per_page;
    // echo " <br> Bắt đầu từ: $start"; 


    if (isset($_GET['cat_id'])) {
        if (isset($_GET['sort'])) {
            switch ($_GET['sort']) {
                case 'desc':
                    $where = "`id_category` = {$cat_id} ORDER BY `product_price` DESC";
                    break;
                case 'asc':
                    $where = "`id_category` = {$cat_id} ORDER BY `product_price` ASC";
                    break;
                case 'sale':
                    $where = "`id_category` = {$cat_id} ORDER BY ((`product_price` - `product_sale`)/`product_price`) * 100  DESC";
                    break;
                case 'view':
                    $where = "`id_category` = {$cat_id} ORDER BY  `product_view` DESC";
                    break;
                default:
                    $where = "`id_category` = {$cat_id}";
            }
        } else {
            $where = "`id_category` = {$cat_id}";
        }

        $info_cart = get_category_by_id($cat_id);
        // show_array($info_cart);

        //Truy xuất dữ liệu về theo điều kiện $where
        $list_cart_by_id = get_product_by_id_category($start, $num_per_page, $where);
        // show_array($list_cart_by_id);

        //===Để đưa dữ liệu qua form view===
        $data['info_cart_id'] = $info_cart;
        $data['list_cart_id'] = $list_cart_by_id;
    }

    //Gửi dữ liệu cho thanh phân trang
    $data['num_pages'] = $num_pages;
    $data['page'] = $page;
    $data['cat_id'] = $cat_id;


    load_view('productList', $data);
}

function productsearchAction()
{
    //Truy xuất dữ liệu về theo dữ liệu search người dùng nhập vào
    $list_product = get_product_search($_POST['search']);
    // show_array($list_product);

    //===Để đưa dữ liệu qua form view===
    $data['list_product'] = $list_product;


    load_view('productsearch', $data);
}
