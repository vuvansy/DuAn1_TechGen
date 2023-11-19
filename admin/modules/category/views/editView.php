<?php
get_header();
?>
<main>
    <div class="main-wrapper">

        <?php
        get_sidebar();
        ?>
        <div class=" section">
            <div class="account__inner--title">
                <h1 class="heading-title">Cập nhật loại hàng</h1>
                <?php echo form_error('account'); ?>
            </div>
            <div class="section-bar">

                <div class="section-bar-items">
                    <form action="" class="search-section">
                        <div class="box-form-section">

                            <input type="text" class="search-section-input" placeholder="Tên sản phẩm" />
                            <input type="submit" name="search" value="Tìm kiếm">

                        </div>

                    </form>
                </div>

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
                            <h3>Cập nhập loại hàng </h3>
                        </div>
                    </div>
                </div>
                <!-- Form Edit  -->
                <div class="section-form__edit">
                    <div class="image__category">
                        <div class="image__category--img">
                            <?php if ($category['category_image'] == '') : ?>
                                <img src="public/images/user/" alt="">
                            <?php else : ?>
                                <img src="public/images/category/<?php echo $category['category_image'] ?>" alt="<?php echo $category['category_image'] ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <form action="" class="form__category" enctype="multipart/form-data" method="POST">
                        <div class="row-form__group">
                            <div class="form__group">
                                <label for="id_category">Mã loại</label>
                                <input type="text" name="id_category" id="id_category" value="<?php echo $category['id_category'] ?>" readonly="readonly" placeholder="AutoNumber..." />
                                <?php echo form_error('id_category'); ?>
                            </div>

                            <div class="form__group">
                                <label for="category_name">Tên loại</label>
                                <input type="text" name="category_name" id="category_name" value="<?php echo $category['category_name'] ?>" placeholder="Tên loại..." />
                                <?php echo form_error('category_name'); ?>
                            </div>
                        </div>

                        <div class="row-form__group">
                            <div class="form__group">
                                <label class="title__input_m" for="category_active">Trạng thái</label>
                                <div class="checkbox-group">
                                    <input type="checkbox" name="category_active" id="category_active" value="1"><label class="col" for="kich_hoat">Hiển thị</label>
                                </div>
                            </div>

                            <div class="form__group">
                                <label for="new_image">Hình</label>
                                <input type="file" name="new_image" id="new_image" value="" placeholder="Địa chỉ..." />
                                <input type="hidden" name="category_image" value="<?php echo $category['category_image'] ?>">
                                <?php echo form_error('new_image'); ?>
                            </div>
                        </div>

                        <div class="section-add-category">
                            <a href="?mod=category&action=list">
                                <input type="submit" name="edit_btn" value="Cập nhật">
                            </a>
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