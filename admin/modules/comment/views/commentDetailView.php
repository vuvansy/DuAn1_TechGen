<?php
get_header();
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <div class="comment-detail-title">
                Chi tiết bình luận
            </div>
            <form action="" class="search-comment-detail">
                <div class="box-form-comment-detail">
                    <!-- input -->
                    <input type="text" class="search-comment-detail-input" placeholder="Nhập tên..." />
                    <input type="submit" class="search-comment-detail-btn" value="Tìm kiếm">
                </div>
                <!-- Submit button -->

            </form>

            <div class="comment-detail-content">
                <div class="head-comment-detail">
                    <div class="icon">
                        <img src="./public/images/icon/border-all.svg" alt="">
                    </div>
                    <div class="head-name">Chi tiết bình luận</div>
                </div>
                <table class="table-detail">
                    <thead class="table-thead-detail">
                        <tr>
                            <th class="thead-none"></th>
                            <th class="thead-content-detail">Nội dung</th>
                            <th class="date">Ngày bình luận</th>
                            <th class="user-comment">Người bình luận</th>
                            <th class="delete">Xóa</th>

                        </tr>
                    </thead>
                    <tbody class="table-tbody-detail">
                        <tr>
                            <form action="">
                            <td class="check-input-comment-detail">
                                <input type="checkbox" id="myCheckbox" name="myCheckbox" value="selected">
                            </td>
                            <td class="tbody-content-detail">
                                Chả biết 15 như nào chứ thấy 14prm vẫn đỉnh cao mà, đầm tay thật
                            </td>
                            <td class="date">2018-02-24</td>
                            <td class="user-comment">Khang</td>
                            <td class="delete"><a href=""><i class="fa-solid fa-trash-can"></i></a>
                            </form>
                        </tr>
                        <tr>
                        <form action="">
                            <td class="check-input-comment-detail">
                                <input type="checkbox" id="myCheckbox" name="myCheckbox" value="selected">
                            </td>
                            <td class="tbody-content-detail">
                                Chả biết 15 như nào chứ thấy 14prm vẫn đỉnh cao mà, đầm tay thật
                            </td>
                            <td class="date">2018-02-24</td>
                            <td class="user-comment">Khang</td>
                            <td class="delete"><a href=""><i class="fa-solid fa-trash-can"></i></a>
                            </form>
                        </tr>
                    </tbody>
                </table>

                <div class="full-btn-comment-detail">
                    <a class="check-all" href="">Chọn tất cả</a>
                    <a class="cancel-all" href="">Bỏ chọn tất cả</a>
                    <a class="delete-all" href="">Xóa tất cả</a>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
get_footer();
?>