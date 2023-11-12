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
                <h1>Thêm mới loại hàng </h1>
            </div>
            <div class="product-bar">


                <div class="product-bar-itemss">
                    <a href="?mod=category&action=list" class="product-btn-list">Danh sách</a>
                </div>
                <div class="product-bar-items">
                    <a href="?mod=category&action=add" class="product-btn-add">Thêm mới</a>
                </div>


            </div>
            <div class="container-category">
                <div class="head">
                    <div class="inline">
                        <div class="icon">
                            <i class="fa-solid fa-border-all"></i>
                        </div>
                        <div class="heading">
                            <h3>Thêm mới loại hàng</h3>
                        </div>
                    </div>
                </div>
                <div class="container-form">
                    <div class="container-form-input">
                        <div class="input-text">
                            <p>Mã loại</p>
                            <input type="text" placeholder="it6903">
                        </div>
                        <div class="input-text">
                            <p>Tên loại</p>
                            <input type="text" placeholder="máy tính">
                        </div>
                        <div class="input-text-none">
                            <p>Trạng thái</p>
                            <div class="option">
                                <div class="option-input">
                                    <input class="input-checkbox" type="checkbox" id="block">
                                    <p class="text-checkbox">Hiển thị </p>
                                </div>

                            </div>
                        </div>
                        <div class="input-text-nones">
                            <p>Hình ảnh</p>
                            <input class="input-file" type="file">
                        </div>


                    </div>
                    <div class="box-btn-update">
                        <a href="?mod=category&action=list" class="btn-update">
                            <p>Thêm </p>
                        </a>
                    </div>





                </div>


            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>