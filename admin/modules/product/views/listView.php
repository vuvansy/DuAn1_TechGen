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
                        <!-- input -->
                        <input type="text" class="search-product-input" placeholder="Tên sản phẩm" />
                        <!-- Clear button -->
                        <!-- <button type="reset" class="search-product-clear">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </button> -->
                    </div>
                    <!-- Submit button -->
                    <button class="search-product-btn">
                        Tìm kiếm
                    </button>
                </form>
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
                <div class="list-bar">
                    <table class="list-table">
                        <tr class="list-desc">
                            <th class="msp">Mã Sản Phẩm</th>
                            <th class="tsp">Tên Sản Phẩm</th>
                            <th class="sl">Số Lượng</th>
                            <th class="dg">Đơn Giá</th>
                            <th class="gg">Giảm Giá</th>
                            <th class="lh">Loại Hàng</th>
                            <th class="tt">Trạng Thái</th>
                            <th class="tv">Tác Vụ</th>
                        </tr>
                        <tr class="list-item">
                            <td>1</td>
                            <td>Lenovo IdeaPad 3 15ITL6 i7 1165G7 (82H803CUVN)</td>
                            <td>99</td>
                            <td>290.000.000</td>
                            <td>250.000.000</td>
                            <td>Laptop</td>
                            <td>Hiện</td>
                            <td>
                                <div class="table-icon">
                                   <a href="#!"> <img src="./public/images/icon/pencil-alt.svg" alt=""></a>
                                  <a href="#!">  <img src="./public/images/icon/delete.svg" alt=""></a>
                                </div>
                            </td>
                        </tr>
                        <tr class="list-item">
                            <td>2</td>
                            <td>MacBook Air 13 inch M1 2020 8CPU 7GPU 8GB/256GB</td>
                            <td>99</td>
                            <td>290.000.000</td>
                            <td>250.000.000</td>
                            <td>MacBook</td>
                            <td>Hiện</td>
                            <td>
                                <div class="table-icon">
                                   <a href="#!"> <img src="./public/images/icon/pencil-alt.svg" alt=""></a>
                                    <a href="#!"><img src="./public/images/icon/delete.svg" alt=""></a>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>