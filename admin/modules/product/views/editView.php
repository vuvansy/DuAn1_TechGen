<?php
get_header();
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
                                <input type="text" id="id_product" name="id_product" placeholder="ps...">
                            </div>
                            <div class="input-text">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" id="product_name" name="product_name" placeholder="Tên sản phẩm">
                            </div>
                            <div class="input-text">
                                <label for="">Đơn giá</label>
                                <input type="text" id="product_price" name="product_price" placeholder="Đơn giá">
                            </div>
                            <div class="input-text">
                                <label for="">Giảm giá</label>
                                <input type="text" id="product_sale" name="product_sale" placeholder="Giảm giá">
                            </div>
                            <div class="input-text">
                                <label for="">Số lượng</label>
                                <input type="text" id="product_quantity" name="product_quantity" placeholder="Số lượng">
                            </div>
                            <div class="input-text">
                                <label for="">Loại hàng</label>
                                <select class="select-box" name="id_category " id="id_category ">
                                    <option value="1">Điện Thoại</option>
                                    <option value="2">Laptop</option>
                                </select>
                            </div>
                            <div class="input-text">
                                <label for="">Ngày nhập</label>
                                <input type="date" id="date_import" name="date_import" placeholder="Ngày nhập">
                            </div>
                            <div class="input-text">
                                <label for="">Tùy chọn</label>
                                <div class="option">
                                    <div class="option-input">
                                        <input class="input-checkbox" type="checkbox" id="product_status" name="product_status">
                                        <p class="text-checkbox">Hiển thị sản phẩm</p>
                                    </div>
                                    <div class="option-input">
                                        <input class="input-checkbox" type="checkbox" id="special" name="special">
                                        <p class="text-checkbox">Sản phẩm đặc biệt</p>
                                    </div>
                                </div>
                            </div>
                            <div class="input-text">
                                <label for="">Hình ảnh</label>
                                <input class="input-file" name="product_image" id="product_image" type="file">
                            </div>
                            <div class="input-text">
                                <label for="">Ảnh chi tiết (4)</label>
                                <input class="input-file" id="delivery_name" name="delivery_name" type="file">
                            </div>
                            <div class="input-desc">
                                <label for="">Mô tả ngắn</label>
                                <textarea name="product_desc" id="product_desc">Mô tả ngắn</textarea>
                            </div>
                            <div class="input-desc">
                                <label for="">Nội dung</label>
                                <textarea name="product_content" id="product_content" class="input-content">Nội dung</textarea>
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