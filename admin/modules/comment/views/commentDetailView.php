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
            <form action="" class="search-comment-detail" method="POST">
                <div class="box-form-comment-detail">
                    <!-- input -->
                    <input type="text" class="search-comment-detail-input" name="box-search-product"
                        placeholder="Nhập tên..." />
                    <input type="submit" class="search-comment-detail-btn" name="search-product-btn" value="Tìm kiếm">
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
                        <?php
                        if (isset($_GET['id'])) {
                            $id_product = $_GET['id'];
                        }
                        foreach ($comment_list as $comment) {
                            $user_fullname = get_user_by_id_user($comment['id_user']);
                            ?>
                            <tr>
                                <td class="check-input-comment-detail">
                                    <input type="checkbox" id="myCheckbox" name="myCheckbox" value="selected" checked>
                                </td>
                                <td class="tbody-content-detail">
                                    <?php echo $comment['content'] ?>
                                </td>
                                <td class="date">
                                    <?php echo $comment['date_comment'] ?>
                                </td>
                                <td class="user-comment">
                                    <?php echo $user_fullname[0]['fullname'] ?>
                                </td>
                                <td class="delete"><a name="delete_comment"
                                        href="?mod=comment&action=deteleIdcomment&id=<?php echo $comment['id_comment'] ?>"><i
                                            class="fa-solid fa-trash-can"></i></a> </td>
                            </tr>
                            <?php
                        }
                        ?>
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
</script>
<?php
get_footer();
?>