<?php
get_header();
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <div class="comment-list">
                <div class="comment-title">
                    Danh sách danh sách bình luận
                </div>
            </div>
            <form action="" class="search-comment" method="POST">
                <div class="box-form-comment">
                    <!-- input -->
                    <input type="text" name="box-search-product" class="search-comment-input" id="box-search-product"
                        placeholder="Tên sản phẩm..." />
                    <input type="submit" name="search-product-btn" class="search-comment-submit" id="search-product-btn"
                        value="Tìm kiếm">
                </div>
                <!-- Submit button -->
                <!-- <button class="search-comment-btn">Tìm kiếm</button> -->
            </form>

            <div class="comment-content">
                <div class="head">
                    <div class="icon">
                        <img src="./public/images/icon/border-all.svg" alt="">
                    </div>
                    <div class="head-name">Danh sách bình luận</div>
                </div>
                <table class="table-comment-list">
                    <thead class="table-thead-comment">
                        <tr>
                            <th class="product">Hàng hóa</th>
                            <th class="quantity">Số lượng</th>
                            <th class="new">Mới nhất</th>
                            <th class="old">Cũ nhất</th>
                            <th class="detail">Chi tiết</th>
                        </tr>
                    </thead>
                    <tbody class="table-tbody">
                        <?php
                        $product_id = get_product();
                        foreach ( $get_product as $item) {
                            if ((get_quantili_comment($item['id_product']))[0]['COUNT(`id_comment`)'] == 0) {
                                continue;
                            }
                            ?>
                            <tr>
                                <td class="product">
                                    <?php echo $item['product_name'] ?>
                                </td>

                                <td class="quantity">
                                    <?php
                                    echo ((get_quantili_comment($item['id_product']))[0]['COUNT(`id_comment`)']);
                                    ?>
                                </td>
                                <td class="new">
                                    <?php
                                    $date_comment_new = get_date_comment($item['id_product']);
                                    echo ($date_comment_new[0]['newest_comment_date']);
                                    ?>
                                </td>
                                <td class="old">
                                    <?php
                                    $date_comment_old = get_date_comment($item['id_product']);
                                    echo ($date_comment_old[0]['oldest_comment_date']); ?>
                                </td>
                                <td class="detail">
                                    <a   href="?mod=comment&action=commentDetail&id=<?php echo $item['id_product'] ?>">Xem chi
                                        tiết</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        <!-- Thêm các dòng bình luận khác nếu cần -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</main>


<?php
get_footer();
?>