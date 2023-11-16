<?php
get_header();
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <div class="user-heading">
                Danh sách khách hàng
            </div>
            <div class="user-bar">
                <form action="" id="search-user" class="search-user" method="POST">
                    <div class="box-form-user">
                        <!-- input -->
                        <input type="text" name="box-search-user" id="box-search-user" class="search-user-input" value="" placeholder="Tên sản phẩm" />
                    </div>
                    <input type="submit" id="search-user-btn" class="search-user-btn" value="Tìm kiếm">
                </form>
                <a href="?mod=users&action=index" class="user-btn-list">Danh sách</a>
                <a href="?mod=users&action=add" class="user-btn-add">Thêm mới</a>
            </div>
            <div class="box-container-user">
                <div class="container-user">
                    <div class="head">
                        <div class="inline">
                            <div class="icon">
                                <img src="./public/images/icon/border-all.svg" alt="">
                            </div>
                            <div class="heading">
                                Danh sách khách hàng
                            </div>
                        </div>
                    </div>
                    <div class="list-bar">
                        <table class="list-table">
                            <tr class="list-desc">
                                <th class="mnd">Mã Người Dùng</th>
                                <th class="ht">Họ Tên</th>
                                <th class="sdt">Số Điện Thoại</th>
                                <th class="email">Email</th>
                                <th class="dd">Địa Chỉ</th>
                                <th class="vt">Vai Trò</th>
                                <th class="kh">Kích Hoạt</th>
                                <th class="tv">Tác Vụ</th>
                            </tr>
                            <?php if (!empty($list_user)) {
                                foreach ($list_user as $user) {
                            ?>
                                    <tr class="list-item">
                                        <td><?php echo intval($user['id_user']) ?></td>
                                        <td><?php echo $fullname = empty($user['fullname']) ? "Không có" : $user['fullname'] ?></td>
                                        <td><?php echo $phone = empty($user['phone']) ? "Không có" : $user['phone'] ?></td>
                                        <td><?php echo $email = empty($user['email']) ? "Không có" : $user['email'] ?></td>
                                        <td><?php echo $address = empty($user['address']) ? "Không có" : $user['address'] ?></td>
                                        <td><?php echo $roles = (int)($user['user_role']) === 1 ? "Quản trị viên" : 'Khách hàng' ?></td>
                                        <td><?php echo $active = (int)($user['is_active']) === 1 ? "Kích hoạt" : "Chưa kích hoạt" ?></td>
                                        <td>
                                            <div class="table-icon">
                                                <a href="?mod=users&action=edit&id=<?php echo intval($user['id_user']) ?>"> <img src="./public/images/icon/pencil-alt.svg" alt=""></a>
                                                <a href="?mod=users&action=delete&id=<?php echo intval($user['id_user']) ?>"> <img src="./public/images/icon/delete.svg" alt=""></a>
                                            </div>
                                        </td>
                                    </tr>
                            <?php   }
                            } ?>
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