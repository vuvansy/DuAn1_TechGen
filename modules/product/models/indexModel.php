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
