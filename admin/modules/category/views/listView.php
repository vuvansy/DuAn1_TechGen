<?php
get_header();

?>

<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <div class="section">
                <div class="section-heading">
                    <h2>Danh sách loại hàng </h2>
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
                                <h3>Danh sách loại hàng </h3>
                            </div>
                        </div>
                    </div>

                    <div class="section-list">
                        <table class="list-table-section">
                            <thead class="category-thead">
                                <tr class="list-section-desc">
                                    <th>Mã loại</th>
                                    <th>Hình ảnh</th>
                                    <th>Tên loại</th>

                                    <th>Trạng Thái</th>
                                    <th>Tác Vụ</th>
                                </tr>

                            </thead>
                            <tbody class="category-tbody">
                                <tr class="list-section-item">
                                    <td>1</td>
                                    <td class="category-tbody-img">
                                        <!-- <img src="macbook.webp" alt=""> -->
                                        <img src="public/images/category/laptop.webp" alt="">
                                    </td>
                                    <td>Điện thoại</td>
                                    <td>Hiển thị</td>

                                    <td>
                                        <div class="table-section-icon">
                                            <a href="?mod=category&action=update"> <i
                                                    class="fa-sharp fa-solid fa-pencil icons"></i></a>
                                            <a href="#!"> <i class="fa-solid fa-trash-can icons"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>



                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>