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
                Danh sách hàng hóa
            </div>
            <div class="product-bar">
                <a href="#!" class="product-btn-list">Danh sách</a>
                <a href="#!" class="product-btn-add">Thêm mới</a>
            </div>
            <div class="container-product">
                <div class="head">
                    <div class="inline">
                        <div class="icon">
                            <img src="./public/images/icon/border-all.svg" alt="">
                        </div>
                        <div class="heading">
                            Danh sách hàng hóa
                        </div>
                    </div>
                </div>
                <div class="container-form">
                    <div class="container-form-input">
                        <div class="input-text">
                            <p>Mã sản phẩm</p>
                            <input type="text" placeholder="ps...">
                        </div>
                        <div class="input-text">
                            <p>Tên sản phẩm</p>
                            <input type="text" placeholder="Tên sản phẩm">
                        </div>
                        <div class="input-text">
                            <p>Đơn giá</p>
                            <input type="text" placeholder="Đơn giá">
                        </div>
                        <div class="input-text">
                            <p>Giảm giá</p>
                            <input type="text" placeholder="Giảm giá">
                        </div>
                        <div class="input-text">
                            <p>Số lượng</p>
                            <input type="text" placeholder="Số lượng">
                        </div>
                        <div class="input-text">
                            <p>Loại hàng</p>
                            <input type="text" placeholder="Loại hàng">
                        </div>
                        <div class="input-text">
                            <p>Ngày nhập</p>
                            <input type="text" placeholder="Ngày nhập">
                        </div>
                        <div class="input-text">
                            <p>Mã sản phẩm</p>
                            <div class="option">
                                <div class="option-input">
                                    <input class="input-checkbox" type="checkbox" id="block">
                                    <p class="text-checkbox">Hiển thị sản phẩm</p>
                                </div>
                                <div class="option-input">
                                    <input class="input-checkbox" type="checkbox" id="none">
                                    <p class="text-checkbox">Sản phẩm đặc biệt</p>
                                </div>
                            </div>
                        </div>
                        <div class="input-text">
                            <p>Hình ảnh</p>
                            <input class="input-file" type="file">
                        </div>
                        <div class="input-text">
                            <p>Ảnh chi tiết (4)</p>
                            <input class="input-file" type="file">
                        </div>
                        <div class="input-desc">
                            <p>Mô tả ngắn</p>
                            <input type="text" placeholder="Mô tả ngắn">
                        </div>
                        <div class="input-desc">
                            <p>Nội dung</p>
                            <input class="input-content" type="text" placeholder="Nội dung">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
   
</main>
<script>
       let check = document.getElementById("block");
       check.checked = true ; 
       let uncheck = document.getElementById("none");
       uncheck.checked = false ; 
    </script>
<?php
get_footer();
?>