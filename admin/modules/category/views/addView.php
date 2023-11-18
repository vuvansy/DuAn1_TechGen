<?php
get_header();
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="section">
            <div class="account__inner--title">
                <h1 class="heading-title">Thêm mới loại hàng</h1>
                <?php echo form_error('account'); ?>
            </div>
            <div class="section-bar">

                <a href="?mod=category&action=index" class="product-btn-list-category">Danh sách</a>
                <a href="?mod=category&action=add" class="product-btn-add-category">Thêm mới</a>
            </div>
            <div class="container-section">
                <div class="header">
                    <div class="nav">
                        <div class="icon">
                            <i class="fa-solid fa-border-all"></i>
                        </div>
                        <div class="headier-h3">
                            <h3>Thêm mới loại hàng </h3>
                        </div>
                    </div>
                </div>
                <!-- Form Add  -->
                <div class="section-form">
                    <form action="" class="form__category" enctype="multipart/form-data" method="POST">
                        <div class="row-form__group">
                            <div class="form__group">
                                <label for="id_category">Mã loại</label>
                                <input type="text" name="id_category" id="id_category" value="" readonly="readonly" placeholder="AutoNumber..." />
                                <?php echo form_error('id_category'); ?>
                            </div>

                            <div class="form__group">
                                <label for="category_name">Tên loại</label>
                                <input type="text" name="category_name" id="category_name" value="" placeholder="Tên loại..." />
                                <?php echo form_error('category_name'); ?>
                            </div>

                            <div class="form__group">
                                <label class="title__input_m" for="category_active">Trạng thái</label>
                                <div class="checkbox-group">
                                    <input type="checkbox" name="category_active" id="category_active" value="1"><label class="col" for="kich_hoat">Hiển thị</label>
                                </div>
                                <!-- <select name="category_active">
                                    <option value="">---------------------Trạng Thái----------------</option>
                                    <option value="1" <?php if (!empty($category_active) && $category_active == '1') echo "selected ='selected'"; ?>>Hiển Thị</option>
                                    <option value="2" <?php if (!empty($category_active) && $category_active == '2') echo "selected ='selected'";  ?>>Đã ẩn</option>
                                </select> -->
                            </div>

                            <div class="form__group">
                                <label class="title__input_file" for="new_image">Hình</label>
                                <input type="file" name="new_image" id="new_image" value="" placeholder="Địa chỉ..." />
                                <input type="hidden" name="category_image" value="">
                                <?php echo form_error('new_image'); ?>
                            </div>
                        </div>

                        <div class="section-add-category">
                            <input type="submit" name="add_btn" value="Thêm">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>