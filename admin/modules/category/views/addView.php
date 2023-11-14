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
                <h2>Thêm mới loại hàng </h2>
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

                <a href="?mod=category&action=list" class="product-btn-list-category">Danh sách</a>


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
                <div class="section-form">
                    <form action="" enctype="multipart/form-data" method="POST">
                        <div class="section-form-input">
                            <div class="section-form-input-new">
                                <div class="input-texts">
                                    <p>Mã loại</p>
                                    <input class="input-texts-1" type="text" name="maloai" placeholder="it6903">
                                </div>
                                <div class="input-texts">
                                    <p>Tên loại</p>
                                    <input type="text" name="tenloai" placeholder="máy tính">
                                </div>
                                <div class="input-text-none">
                                    <span>Trạng thái</span>
                                    <div class="option">
                                        <div class="option-input-check">
                                            <input class="input-checkbox" name="check" type="checkbox" id="block">
                                            <p class="text-checkbox">Hiển thị </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="input-text-nones">
                                    <p>Hình ảnh</p>
                                    <input class="input-file" name="img" type="file">
                                </div>
                            </div>

                            <div class="section-add-category">
                                <a href="?mod=category&action=list">
                                    <input type="submit" name="add" value="Thêm">
                                </a>
                            </div>


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