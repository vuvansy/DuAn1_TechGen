<?php
get_header();
?>
<main>
  <div class="main-wrapper">
    <?php
    get_sidebar();
    ?>
    <div class="sidebar-right">
      <section id="user">
        <div>
          <div class="user__top">
            <h2 class="user__heading">Cập nhật khách hàng</h2>
            <div class="user__actions">
              <a href="?mod=users&action=index" class="user-btn-list">Danh sách</a>
              <a href="?mod=users&action=add" class="user-btn-add">Thêm mới</a>
            </div>
          </div>
          <div class="user__content">
            <h3 class="user__title">
              <img src="./public/images/icon/border-all.svg" alt="" class="user__icon" />
              Cập nhật khách hàng
            </h3>
            <p style="padding: 2rem;"><?php if (!empty($data)) echo $toast = empty($success) ? $failed : $success  ?></p>
            <form action="" id="user__form" method="POST" enctype="multipart/form-data">
              <div class="user__wrapper">
                <div class="user__thumbnail">
                  <div class="user__img">
                    <img src="./public/images/user/<?php if (!empty($info_user)) echo $image = empty($info_user['image']) ? "user1.png" : $info_user['image'] ?>" alt="" class="user__thumb" />
                  </div>
                </div>
                <div class="user__inner user__inner--update">
                  <div class="user__group">
                    <label for="fullname" class="user__label">Họ và tên</label>
                    <input type="text" name="fullname" id="fullname" class="user__input" value="<?php if (!empty($info_user)) echo $info_user['fullname'] ?>" />
                    <?php echo form_error("fullname") ?>
                  </div>
                  <div class="user__group">
                    <label for="phone" class="user__label">Số điện thoại</label>
                    <input type="tel" name="phone" id="phone" class="user__input" value="<?php if (!empty($info_user)) echo $info_user['phone'] ?>" />
                    <?php echo form_error("phone") ?>
                  </div>
                  <div class="user__group">
                    <label for="email" class="user__label">Email</label>
                    <input type="email" name="email" id="email" class="user__input" value="<?php if (!empty($info_user)) echo $info_user['email'] ?>" />
                    <?php echo form_error("email") ?>
                  </div>
                  <div class="user__group">
                    <label for="address" class="user__label">Địa chỉ</label>
                    <input type="text" name="address" id="address" class="user__input" value="<?php if (!empty($info_user)) echo $info_user['address'] ?>" />
                    <?php echo form_error("address") ?>
                  </div>
                  <div class="user__group">
                    <label for="username" class="user__label">Tên đăng nhập</label>
                    <input type="text" name="username" id="username" class="user__input" value="<?php if (!empty($info_user)) echo $info_user['username'] ?>" />
                    <?php echo form_error("username") ?>
                  </div>
                  <div class="user__group">
                    <label for="password" class="user__label">Mật khẩu</label>
                    <input type="password" name="password" id="password" class="user__input" value="<?php if (!empty($info_user)) echo $info_user['password'] ?>" />
                    <?php echo form_error("password") ?>
                  </div>
                  <div class="user__group">
                    <label for="roles" class="user__label">Vai trò</label>
                    <select name="roles" id="roles" class="user__select">
                      <option value="0" <?php echo $select = (int)$info_user['user_role'] === 0 ? "selected" : "" ?>>Khách hàng</option>
                      <option value="1" <?php echo $select = (int)$info_user['user_role'] === 1 ? "selected" : "" ?>>Người quản trị</option>
                    </select>
                  </div>
                  <div class="user__group">
                    <label for="active" class="user__label">Kích hoạt</label>
                    <select name="active" id="active" class="user__select">
                      <option value="1" <?php echo $select = (int)$info_user['is_active'] === 1 ? "selected" : "" ?>>Kích hoạt</option>
                      <option value="0" <?php echo $select = strval($info_user['is_active']) === "" ? "selected" : "" ?>>Không kích hoạt</option>
                    </select>
                  </div>
                  <div class="user__group">
                    <label for="file" class="user__label">Hình ảnh</label>
                    <input type="file" name="file" id="file" class="user__file" />
                    <?php echo form_error("file") ?>
                    <?php echo notify("file") ?>
                  </div>
                </div>
              </div>
              <input type="submit" class="user__btn user__submit" value="Cập nhật" name="edit-user-btn">
            </form>
          </div>
        </div>
      </section>
    </div>
</main>
</div>
</div>

</main>

<?php
get_footer();
?>