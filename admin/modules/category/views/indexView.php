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
                        <form action="" class="search-section" method="POST">
                            <div class="box-form-section">

                                <input type="text" name="search_category" class="search-section-input" placeholder="Tên sản phẩm" />
                                <input type="submit" name="btn-search" value="Tìm kiếm">

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
                                <h3>Danh sách loại hàng </h3>
                            </div>
                        </div>
                    </div>

                    <div class="section-list">
                        <table class="list-table-section">
                            <thead class="category-thead">
                                <tr class="list-section-desc">
                                    <th>Mã loại</th>
                                    <th class="category-tbody-img">Hình ảnh</th>
                                    <th>Tên loại</th>
                                    <th>Trạng Thái</th>
                                    <th>Tác Vụ</th>
                                </tr>
                            </thead>
                            <tbody class="category-tbody">
                                <?php
                                foreach ($list_category_search as $item) {
                                ?>
                                    <tr class="list-section-item">
                                        <td><?php echo $item['id_category'] ?></td>
                                        <td class="category-tbody-img">
                                            <img src="public/images/category/<?php echo $item['category_image'] ?>" alt="">
                                        </td>
                                        <td><?php echo $item['category_name'] ?></td>
                                        <td><?php echo show_active($item['category_active']) ?></td>
                                        <td>
                                            <div class="table-section-icon">
                                                <a href="?mod=category&action=edit&cat_id=<?php echo $item['id_category'] ?>"> <i class="fa-sharp fa-solid fa-pencil icons"></i></a>
                                                <a href="?mod=category&action=delete&cat_id=<?php echo $item['id_category'] ?>"> <i class="fa-solid fa-trash-can icons"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Pagination  -->
            <div class="pagination">
                <?php echo get_pagging($num_pages, $page, "?mod=category&action=index") ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>