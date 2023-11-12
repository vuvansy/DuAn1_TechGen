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
                <h1>Danh sách loại hàng </h1>
            </div>
            <div class="product-bar">

                <div class="product-bar-item">
                    <form action="" class="search-product">
                        <div class="box-form-product">

                            <input type="text" class="search-product-input" placeholder="Tên sản phẩm" />
                            <button class="search-product-btn">Tìm kiếm</button>

                        </div>


                    </form>
                </div>
                <div class="product-bar-items">
                    <a href="?mod=category&action=list" class="product-btn-list">Danh sách</a>
                </div>
                <div class="product-bar-itemss">
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
                            <h3>Danh sách hàng hóa</h3>
                        </div>
                    </div>
                </div>
                <div class="list-bar">
                    <table class="list-table">
                        <tr class="list-desc">
                            <th class="msp">Mã loại</th>
                            <th class="tsp">Hình ảnh</th>
                            <th class="sl">Tên loại</th>

                            <th class="tt">Trạng Thái</th>
                            <th class="tv">Tác Vụ</th>
                        </tr>
                        <tr class="list-item">
                            <td>1</td>
                            <td><img src="public/images/category/laptop.webp" alt=""></td>
                            <td>Điện thoại</td>
                            <td>Hiển thị</td>

                            <td>
                                <div class="table-icon">
                                    <a href="?mod=category&action=update"> <i
                                            class="fa-sharp fa-solid fa-pencil icons"></i></a>
                                    <a href="#!"> <i class="fa-solid fa-trash-can icons"></i></a>
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