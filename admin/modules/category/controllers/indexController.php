<?php

function construct()
{
    load('lib', 'validation');
    #Model dùng chung
    load_model('index');
}

function indexAction()
{
    $num_rows = db_num_rows("SELECT * FROM `category`");
    $where = '';
    if (isset($_POST['btn-search'])) {
        $search = $_POST['search_category'];
        var_dump($search);
        $where = "`category_name` LIKE '%$search%'";
    }
    $num_per_page = 6;
    $total_rows = $num_rows;
    $num_pages = ceil($total_rows / $num_per_page);

    // echo "Số trang: $num_pages <br>";
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    // echo "Trang: $page";

    $start = ($page - 1) * $num_per_page;
    // echo " <br> Bắt đầu từ: $start"; 

    $list_category = get_category_where($start, $num_per_page, $where);

    $data["list_category_search"] = $list_category;

    //Gửi dữ liệu cho thanh phân trang
    $data['num_pages'] = $num_pages;
    $data['page'] = $page;

    load_view('index', $data);
}


function addAction()
{
    global $error, $id_category, $category_name, $category_active, $category_image;

    if (isset($_POST['add_btn'])) {
        $error = array();

        if (empty($_POST['category_name'])) {
            $error['category_name'] = "Không được để trống họ tên";
        } else {
            $category_name = $_POST['category_name'];
        }

        if (empty($_POST['category_name'])) {
            $error['category_name'] = "Không được để trống họ tên";
        } else {
            $category_name = $_POST['category_name'];
        }

        // if (!empty($category_active)) {
        //     $category_active = 0;
        // } else {
        //     $category_active = $_POST['category_active'];
        // }

        //Giới tính 
        // if (empty($_POST['category_active'])) {
        //     $error['category_active'] = "Không đc để trống trường category_active";
        // } else {
        //     $category_active = $_POST['category_active'];
        // }
        // echo $category_active;

        // if (isset($_POST['category_active'])) {
        //     $category_active = 1;
        // } else if (is_null($_POST['category_active'])) {
        //     $category_active = 0;
        // }

        // extract($_REQUEST);

        isset($_POST['category_active']) ? $_POST['category_active'] : $_POST['category_active'] = 0;
        $category_active = $_POST['category_active'];

        //Xử lý images
        $save_image = save_file("new_image", "public/images/category/");
        // echo var_dump($_FILES['new_image']);
        $save_image ? $category_image = $save_image  : $category_image = $_POST['category_image'];

        #Dữ liệu gửi lên DATABASE
        if (empty($error)) {
            $data = array(
                'category_name' => $category_name,
                'category_active' => $category_active,
                'category_image' => $category_image,
            );
            // show_array($data);
            add_category($data);
            $error["account"] = '<i class="fa-regular fa-circle-check"></i> Thêm sản phẩm thành công!';
            header("refresh: 1; url=?mod=category&action=add");
        } else {
            $error['account'] = '<i class="fa-solid fa-triangle-exclamation"></i> Lỗi không thành công!';
        }
    }


    load_view('add');
}
function editAction()
{
    global $error, $id_category, $category_name, $category_active, $category_image;
    $cat_id = (int)($_GET['cat_id']);

    if (isset($_POST['edit_btn'])) {
        $error = array();

        if (empty($_POST['category_name'])) {
            $error['category_name'] = "Không được để trống họ tên";
        } else {
            $category_name = $_POST['category_name'];
        }

        if (empty($_POST['category_name'])) {
            $error['category_name'] = "Không được để trống họ tên";
        } else {
            $category_name = $_POST['category_name'];
        }


        isset($_POST['category_active']) ? $_POST['category_active'] : $_POST['category_active'] = 0;
        $category_active = $_POST['category_active'];

        //Xử lý images
        $save_image = save_file("new_image", "public/images/category/");
        // echo var_dump($_FILES['new_image']);
        $save_image ? $category_image = $save_image  : $category_image = $_POST['category_image'];

        #Dữ liệu gửi lên DATABASE
        if (empty($error)) {
            $data = array(
                'category_name' => $category_name,
                'category_active' => $category_active,
                'category_image' => $category_image,
            );
            // show_array($data);
            update_category($data, $cat_id);
            $error["account"] = '<i class="fa-regular fa-circle-check"></i> Cập nhật thành công!';
        } else {
            $error['account'] = '<i class="fa-solid fa-triangle-exclamation"></i> Lỗi, Cập nhật thành công!';
        }
    }
    $data['category'] = get_category_by_id($cat_id);
    // echo 'Detail';
    load_view('edit', $data);
}

function deleteAction()
{
    $cat_id = (int)($_GET['cat_id']);
    db_delete("category", "`id_category` = $cat_id");
    redirect("?mod=category&action=index");
}
