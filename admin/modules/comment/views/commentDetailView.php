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
                    <input type="text" class="search-comment-input" placeholder="" />
                </div>
                <!-- Submit button -->
                <button class="search-comment-detail-btn">Tìm kiếm</button>
            </form>

            <div class="comment-detail-content">
                <div class="head">
                    <div class="icon">
                        <img src="./public/images/icon/border-all.svg" alt="">
                    </div>
                    <div class="head-name">Chi tiết bình luận</div>
                </div>
                <table class="table-detail">
                    <thead>
                        <tr>
                            <th class="content-detail">Nội dung</th>
                            <th class="date">Bình luận</th>
                            <th class="user-comment">Người bình luận</th>
                            <th class="delete">Xóa</th>

                        </tr>
                    </thead>
                    <tbody class="tbody-detail">
                        <tr>
                            <td class="content-detail">
                                <input type="checkbox" id="myCheckbox" name="myCheckbox" value="selected">
                                Chả biết 15 như nào chứ thấy 14prm vẫn đỉnh cao mà, đầm tay thật
                            </td>
                            <td class="date">2018-02-24</td>
                            <td class="user-comment">Khang</td>
                            <td class="delete"><button><i class="fa-solid fa-trash-can"></i></button></td>
                        </tr>
                        <tr>
                            <td class="content-detail">
                                <input type="checkbox" id="myCheckbox" name="myCheckbox" value="selected">
                                Chả biết 15 như nào chứ thấy 14prm vẫn đỉnh cao mà, đầm tay thật
                            </td>
                            <td class="date">2018-02-24</td>
                            <td class="user-comment">Khang</td>
                            <td class="delete"><button><i class="fa-solid fa-trash-can"></i></button></td>
                        </tr>
                        <!-- Thêm các dòng bình luận khác nếu cần -->
                    </tbody>
                </table>
                 
                <div class="full-btn">
                        <button class="check-all">Chọn tất cả</button>
                        <button class="cancel-all">Bỏ chọn tất cả</button>
                        <button class="delete-all">Xóa tất cả</button>
                    </div>
            </div>
        </div>
    </div>


</main>


<?php
get_footer();
?>