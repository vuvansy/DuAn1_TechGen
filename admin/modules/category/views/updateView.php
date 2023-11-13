<?php
get_header();
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="section">
            <div class="section-heading">
                <h2>Cập nhập loại hàng </h2>
            </div>
            <div class="section-bar">

                <div class="section-bar-items">
                    <form action="" class="search-section">
                        <div class="box-form-section">

                            <input type="text" class="search-section-input" placeholder="Tên sản phẩm" />
                            <button class="search-section-btn">Tìm kiếm</button>

                        </div>


                    </form>
                </div>
                <div class="section-right-a">
                    <div class="section-right-i">
                        <a href="?mod=category&action=list" class="product-btn-list">Danh sách</a>
                    </div>
                    <div class="section-right-i">
                        <a href="?mod=category&action=add" class="product-btn-add">Thêm mới</a>
                    </div>


                </div>


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
                <div class="section-form">
                    <form action="" enctype="multipart/form-data" method="POST">

                        <div class="section-form-input">
                            <div class="input-update-img">

                                <img src="public/images/category/laptop.webp" alt="">
                            </div>
                            <div class="input-texts-update">
                                <p>Mã loại</p>
                                <input class="input-texts-update-1" type="text" name="maloai" placeholder="it6903">
                            </div>
                            <div class="input-texts-update">
                                <p>Tên loại</p>
                                <input type="text" name="tenloai" placeholder="máy tính">
                            </div>
                            <div class="input-update-text-none">
                                <span>Trạng thái</span>
                                <div class="option">
                                    <div class="option-update-input-check">
                                        <input class="input-checkbox-update" name="check" type="checkbox" id="block">
                                        <p class="text-checkbox-update">Hiển thị </p>
                                    </div>

                                </div>
                            </div>
                            <div class="input-update-text-nones">
                                <p>Hình ảnh</p>
                                <input class="input-update-file" name="img" type="file">
                            </div>


                        </div>
                        <div class="section-add-category">
                            <a href="?mod=category&action=list">
                                <button class="btn-add-category" name="capnhap" value="Thêm">Cập nhập</button>
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