<?php
//Truy xuất tất cả các sản phẩm theo ID_category kết hợp phân trang
//Hiển thị danh sách theo trang
function get_product_by_id_category($start = 1, $num_per_page = 5, $where = "")
{
    if (!empty($where)) {
        $where = "WHERE $where";
    }
    $list_user = db_fetch_array("SELECT * FROM `product` $where LIMIT $start,$num_per_page");
    return $list_user;
};

//Hàm phân trang
function get_pagging($num_pages, $page, $base_url = "", $cat_id)
{
    $str_pagging = "<ul class=\"pagging float-right\">";
    if ($page > 1) {
        $before = $page - 1;
        $str_pagging .= "<li><a href=\"?mod=product&action=productList&cat_id={$cat_id}&page=$before\">Trước</a></li>";
    }
    for ($i = 1; $i <= $num_pages; $i++) {
        if ($i == $page) {
            $active = "class=\"active\"";
        } else {
            $active = "";
        }
        $str_pagging .= "<li $active ><a href=\"{$base_url}={$cat_id}&page={$i}\">$i</a></li>";
    }
    if ($page < $num_pages) {
        $after = $page + 1;
        $str_pagging .= "<li><a href=\"?mod=product&action=productList&cat_id={$cat_id}&page=$after\">Sau</a></li>";
    }
    $str_pagging .= "</ul>";
    return $str_pagging;
}

function get_product_by_id($product_id)
{
    $products =   get_product();
    // Tìm sản phẩm trong mảng dựa trên ID sản phẩm
    foreach ($products as $product) {
        if ($product['id_product'] == $product_id) {
            return $product; // Trả về thông tin sản phẩm nếu tìm thấy
        }
    }
    return false; // Trả về false nếu không tìm thấy sản phẩm
}

// comment

function get_comment_by_product_id($id_product)
{
    $sql = "SELECT * FROM `comment` WHERE `id_product`  = " . $id_product . "  ORDER BY `id_comment` DESC";
    $item = db_fetch_array($sql);
    return $item;
}
function get_fullname_user_by_id_user($id_user)
{
    $sql = "SELECT `fullname` FROM `user` WHERE `id_user` = " . $id_user;
    $item = db_fetch_array($sql);
    return $item;
}
function get_user_by_id_user($id_user)
{
    $sql = "SELECT * FROM `user` WHERE `id_user`=" . $id_user;
    $item = db_fetch_array($sql);
    return $item;
}


// nhập bình luận
function add_comment($data)
{
    return db_insert('comment', $data);
}

// ========= Product Detail =========

function get_gallery($id_product)
{
    $list_gallery = db_fetch_array("SELECT * FROM `gallery` WHERE `id_product` = {$id_product}");
    return $list_gallery;
}
