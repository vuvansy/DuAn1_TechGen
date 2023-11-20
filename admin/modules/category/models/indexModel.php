<?php
// ====== ADD CATEGORY ======

//Thêm User vào Database
function add_category($data)
{
    return db_insert('category', $data);
}


//Truy vấn một LOẠI HÀNG theo mã loại
function get_category_by_id($id)
{
    $item = db_fetch_row("SELECT * FROM `category` WHERE `id_category` = {$id}");
    if (!empty($item))
        return $item;
}

// ====== LIST CATEGORY ======

//Truy vấn tất cả LOẠI HÀNG
function  get_category()
{
    $item = db_fetch_array("SELECT *FROM `category`");
    if (!empty($item))
        return $item;
}

// Hàm chuyển đổi kiểu value của category_active 
function show_active($category_active)
{
    $list_active = array(
        '0' => 'Đã ẩn',
        '1' => 'Hiện thị',
    );
    if (array_key_exists($category_active, $list_active)) {
        return $list_active[$category_active];
    }
}


// ====== UPDATE CATEGORY ======

//hàm Update User
function update_category($data, $cat_id)
{
    return db_update('category', $data, "`id_category` = '{$cat_id}'");
}

// ====== INDEX CATEGORY ======
function get_category_where($start = 1, $num_per_page = 10, $where = "")
{
    if (!empty($where)) {
        $where = "WHERE $where";
    }
    $list_category = db_fetch_array("SELECT * FROM `category` $where LIMIT $start,$num_per_page");
    return $list_category;
};

function get_pagging($num_pages, $page, $base_url = "")
{
    $str_pagging = "<ul class=\"pagging float-right\">";
    if ($page > 1) {
        $before = $page - 1;
        $str_pagging .= "<li><a href=\"?mod=category&action=index&page=$before\">Trước</a></li>";
    }
    for ($i = 1; $i <= $num_pages; $i++) {
        if ($i == $page) {
            $active = "class=\"active\"";
        } else {
            $active = "";
        }
        $str_pagging .= "<li $active ><a href=\"{$base_url}&page={$i}\">$i</a></li>";
    }
    if ($page < $num_pages) {
        $after = $page + 1;
        $str_pagging .= "<li><a href=\"?mod=category&action=index&page=$after\">Sau</a></li>";
    }
    $str_pagging .= "</ul>";
    return $str_pagging;
}

// ====== DELETE CATEGORY ======

function num_product_category($cat_id)
{
    $num_row = db_num_rows("SELECT * FROM `product` WHERE `id_category` = '{$cat_id}'");
    return $num_row;
    // if ($check_product > 0) {
    //     return true;
    // } else {
    //     return false;
    // }
}
