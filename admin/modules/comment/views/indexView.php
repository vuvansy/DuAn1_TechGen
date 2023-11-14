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
            <form action="" class="search-comment">
                <div class="box-form-comment">
                    <!-- input -->
                    <input type="text" class="search-comment-input" placeholder="Tên sản phẩm..." />
                    <input type="submit"  class="search-comment-submit" value="Tìm kiếm" >
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
                        <tr>
                            <td class="product">iPhone 14 Pro Max</td>
                            <td class="quantity">5</td>
                            <td class="new">2023-10-24</td>
                            <td class="old">2018-02-24</td>
                            <td class="detail">
                                <a href="?mod=comment&action=commentDetail">Xem chi tiết</a>
                            </td>
                        </tr>
                        <!-- Thêm các dòng bình luận khác nếu cần -->
                    </tbody>
                    <tbody class="table-tbody">
                        <tr>
                            <td class="product">iPhone 14 Pro Max</td>
                            <td class="quantity">5</td>
                            <td class="new">2023-10-24</td>
                            <td class="old">2018-02-24</td>
                            <td class="detail">
                             <a href="?mod=comment&action=commentDetail">Xem chi tiết</a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="table-tbody">
                        <tr>
                            <td class="product">iPhone 14 Pro Max</td>
                            <td class="quantity">5</td>
                            <td class="new">2023-10-24</td>
                            <td class="old">2018-02-24</td>
                            <td class="detail">
                             <a href="?mod=comment&action=commentDetail">Xem chi tiết</a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="table-tbody" >
                        <tr>
                            <td class="product">iPhone 14 Pro Max</td>
                            <td class="quantity">5</td>
                            <td class="new">2023-10-24</td>
                            <td class="old">2018-02-24</td>
                            <td class="detail">
                             <a href="?mod=comment&action=commentDetail">Xem chi tiết</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</main>


<?php
get_footer();
?>