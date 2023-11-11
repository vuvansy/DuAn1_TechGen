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

                <form action="" class="search-product">
                    <div class="box-form-product">
                        <input type="text" class="search-product-input" placeholder="Tên sản phẩm" />
                        <!-- Clear button -->
                        <button type="reset" class="search-product-clear">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </button>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="search-product-btn" disabled>
                        Tìm kiếm
                    </button>


                </form>



                <a href="#!" class="product-btn-add">Thêm mới</a>
                <a href="#!" class="product-btn-list">Danh sách</a>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>