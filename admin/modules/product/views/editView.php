<?php
get_header();
?>

<?php
// show_array($product_by_id);
$item_id = $product_by_id["id_product"];
$item_name = $product_by_id["product_name"];
$item_price = $product_by_id["product_price"];
$item_sale = $product_by_id["product_sale"];
$item_quantity = $product_by_id["product_quantity"];
$item_date = $product_by_id["date_import"];
$item_desc = $product_by_id["product_desc"];
$item_content = $product_by_id["product_content"];
$item_status = $product_by_id["product_status"];
$item_special = $product_by_id["special"];
$item_id_category = $product_by_id["id_category"];
$item_product_image=$product_by_id["product_image"];
// echo($item_id_category);    
$check_status = "";
$check_special = "";
if ($item_status == 1) {
    $check_status = "checked";
}
if ($item_special == 1) {
    $check_special = "checked";
}


$option = "";
$category = get_all_category();
// show_array($category);
$id_product_new = get_last_id();
$id_product_last = (int)$id_product_new[0]['id_product'] + 1;
// if(){

// }
$category_new;
for ($i = 0; $i < count($category); $i++) {
    //    echo count($category), $i;
    if ($category[$i]["id_category"] == $item_id_category) {
        $option .= '<option value="' . $category[$i]['id_category'] . '">' . $category[$i]['category_name'] . '</option>';
    } else {
        $category_new[$category[$i]['category_name']] = $category[$i];
    }
}
foreach ($category_new as $value) {
    $option .= '<option value="' . $value['id_category'] . '">' . $value['category_name'] . '</option>';
}
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <div class="product-heading">
                Chỉnh sửa hàng hóa
            </div>
            <div class="product-bar">
                <a href="?mod=product&action=index" class="product-btn-list">Danh sách</a>
                <a href="?mod=product&action=add" class="product-btn-add">Thêm mới</a>
            </div>
            <div class="box-container-product">
                <div class="container-product">
                    <div class="head">
                        <div class="inline">
                            <div class="icon">
                                <img src="./public/images/icon/border-all.svg" alt="">
                            </div>
                            <div class="heading">
                                Chỉnh sửa hàng hóa
                            </div>
                        </div>
                    </div>
                    <div class="container-form">
                        <form action="" id="edit-product" class="container-form-input" enctype="multipart/form-data" method="POST">
                            <div class="input-text">
                                <label for="">Mã sản phẩm</label>
                                <input type="text" id="id_product" value="<?= $item_id ?>" disabled placeholder="ps...">
                                <input type="hidden" id="id_product" value="<?= $item_id ?>" name="id_product" placeholder="ps...">
                            </div>
                            <div class="input-text">
                                <label for="">Tên sản phẩm</label>
                                <input value="<?= $item_name ?>" type="text" id="product_name" name="product_name" placeholder="Tên sản phẩm">
                            </div>
                            <div class="input-text">
                                <label for="">Đơn giá</label>
                                <input value="<?= $item_price ?>" type="text" id="product_price" name="product_price" placeholder="Đơn giá">
                            </div>
                            <div class="input-text">
                                <label for="">Giảm giá</label>
                                <input value="<?= $item_sale ?>" type="text" id="product_sale" name="product_sale" placeholder="Giảm giá">
                            </div>
                            <div class="input-text">
                                <label for="">Số lượng</label>
                                <input value="<?= $item_quantity ?>" type="text" id="product_quantity" name="product_quantity" placeholder="Số lượng">
                            </div>
                            <div class="input-text">
                                <label for="">Loại hàng</label>
                                <select class="select-box" name="id_category" id="id_category ">
                                    <?= $option ?>
                                </select>
                            </div>
                            <div class="input-text">
                                <label for="">Ngày nhập</label>
                                <input value="<?= $item_date ?>" type="date" id="date_import" name="date_import" placeholder="Ngày nhập">
                            </div>
                            <div class="input-text">
                                <label for="">Tùy chọn</label>
                                <div class="option">
                                    <div class="option-input">
                                        <input class="input-checkbox" <?= $check_status ?> type="checkbox" id="product_status" name="product_status">
                                        <p class="text-checkbox">Hiển thị sản phẩm</p>
                                    </div>
                                    <div class="option-input">
                                        <input class="input-checkbox" <?= $check_special ?> type="checkbox" id="special" name="special">
                                        <p class="text-checkbox">Sản phẩm đặc biệt</p>
                                    </div>
                                </div>
                            </div>
                            <div class="input-text">
                                <label for="">Hình ảnh</label>
                                <input class="input-file" name="product_image_new" id="product_image" type="file">
                                <input class="input-file" value="<?=$item_product_image?>" name="product_image" id="product_image" type="hidden">    
                            </div>  
                            <div class="input-text">
                                <label for="">Ảnh chi tiết (4)</label>
                                <input class="input-file" id="delivery_name" name="delivery_name" type="file">
                            </div>
                            <div class="input-desc">
                                <label for="">Mô tả ngắn</label>
                                <textarea name="product_desc" id="product_desc"><?= $item_desc ?></textarea>
                            </div>
                            <div class="input-desc">
                                <label for="">Nội dung</label>
                                <textarea name="product_content" id="product_content" class="input-content"><?= $item_content ?></textarea>
                            </div>
                            <div class="box-btn-button">
                                <input class="btn-button" type="submit" name="btn-edit-product" id="btn-list" value="Cập Nhật">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</main>
<?php
get_footer();
?>