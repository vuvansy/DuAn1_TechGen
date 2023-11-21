<?php
get_header();
?>

<?php
    $option = "";
    $category = get_all_category();
    // show_array($category); 
    $id_product_new = get_last_id();
    // var_dump($id_product_new);
    $id_product_last = (int)$id_product_new[0]['id_product'] + 1;
    foreach ($category as $item){
        $option.='<option value="'.$item['id_category'].'">'.$item['category_name'].'</option>';
    }

    $masew ="";

?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <div class="product-heading">
                Thêm mới hàng hóa
            </div>
            <?php 
                if(isset($_SESSION['masew'])){
                    echo $_SESSION['masew'];
                    unset($_SESSION['masew']);
                }
            ?>
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
                                Thêm mới hàng hóa
                            </div>
                        </div>
                    </div>
                    <div class="container-form">
                        <form action="" id="add-product" class="container-form-input" enctype="multipart/form-data" method="POST">
                            <div class="input-text">
                                <label for="">Mã sản phẩm</label>
                                <input value="<?=$id_product_last?>" type="text" id="id_product"  placeholder="ps..." disabled>
                                <input value="<?=$id_product_last?>" type="hidden" id="id_product" name="id_product" placeholder="ps..." >
                            </div>
                            <div class="input-text">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" id="product_name" name="product_name" placeholder="Tên sản phẩm">
                                <?php echo form_error("product_name") ?></p>
                            </div>
                            <div class="input-text">
                                <label for="">Đơn giá</label>
                                <input type="text" id="product_price" name="product_price" placeholder="Đơn giá">
                                <?php echo form_error("product_price") ?></p>
                            </div>
                            <div class="input-text">
                                <label for="">Giảm giá</label>
                                <input type="text" id="product_sale" name="product_sale" placeholder="Giảm giá">
                            </div>
                            <div class="input-text">
                                <label for="">Số lượng</label>
                                <input type="text" id="product_quantity" name="product_quantity" placeholder="Số lượng">
                                <?php echo form_error("product_quantity") ?></p>
                            </div>
                            <div class="input-text">
                                <label for="">Loại hàng</label>
                                <select class="select-box" name="id_category" id="">
                                    <?=$option?>
                                </select>
                            </div>
                            <div class="input-text">
                                <label for="">Ngày nhập</label>
                                <input type="date" id="date_import" name="date_import" placeholder="Ngày nhập">
                                <?php echo form_error("date_import") ?></p>
                            </div>
                            <div class="input-text">
                                <label for="">Tùy chọn</label>
                                <div class="option">
                                    <div class="option-input">
                                        <input class="input-checkbox" type="checkbox" id="product_status" name="product_status" value="hidden" checked>
                                        <p class="text-checkbox">Hiển thị sản phẩm</p>
                                    </div>
                                    <div class="option-input">
                                        <input class="input-checkbox" type="checkbox" id="special" value="special" name="special">
                                        <p class="text-checkbox">Sản phẩm đặc biệt</p>
                                    </div>
                                </div>
                            </div>
                            <div class="input-text">
                                <label for="">Hình ảnh</label>
                                <input class="input-file" name="product_image" id="product_image" type="file">
                                <?php echo form_error("product_image") ?></p>
                            </div>
                            <div class="input-text">
                                <label for="">Ảnh chi tiết (4)</label>
                                <input class="input-file" id="gallery_name" name="gallery_name[]" type="file" multiple>
                                <?php echo form_error('gallery_name') ?></p>
                            </div>

                            <div class="input-desc">
                                <label for="">Mô tả ngắn</label>
                                <textarea name="product_desc" id="product_desc">Mô tả ngắn</textarea>
                                <?php echo form_error("product_desc") ?></p>
                            </div>
                            <div class="input-desc">
                                <label for="">Nội dung</label>
                                <textarea name="product_content" id="product_content" class="input-content">Nội dung</textarea>
                                <?php echo form_error("product_content") ?></p>
                            </div>
                            <div class="box-btn-button">
                                <input  class="btn-button" type="submit" name="btn-add-product" id="btn-list" value="Thêm mới">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- <script>
        confirm("thêm thành công");
    </script> -->
</main>
<?php
get_footer();
?>