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
            <h2 class="user__heading">Thêm mới khách hàng</h2>
            <div class="user__actions">
              <a href="?mod=users&action=index" class="user-btn-list">Danh sách</a>
              <a href="?mod=users&action=add" class="user-btn-add">Thêm mới</a>
            </div>
          </div>
          <div class="user__content">
            <h3 class="user__title">
              <img src="./public/images/icon/border-all.svg" alt="" class="user__icon" />
              Thêm mới khách hàng
            </h3>
            <form action="" id="user__form">
              <div class="user__inner">
                <div class="user__group">
                  <label for="fullname" class="user__label">Họ và tên</label>
                  <input type="text" name="fullname" id="fullname" class="user__input" />
                </div>
                <div class="user__group">
                  <label for="phone" class="user__label">Số điện thoại</label>
                  <input type="tel" name="phone" id="phone" class="user__input" />
                </div>
                <div class="user__group">
                  <label for="email" class="user__label">Email</label>
                  <input type="email" name="email" id="email" class="user__input" />
                </div>
                <div class="user__group">
                  <label for="address" class="user__label">Địa chỉ</label>
                  <input type="text" name="address" id="address" class="user__input" />
                </div>
                <div class="user__group">
                  <label for="username" class="user__label">Tên đăng nhập</label>
                  <input type="text" name="username" id="username" class="user__input" />
                </div>
                <div class="user__group">
                  <label for="password" class="user__label">Mật khẩu</label>
                  <input type="password" name="password" id="password" class="user__input" />
                </div>
                <div class="user__group">
                  <label for="roles" class="user__label">Vai trò</label>
                  <select name="roles" id="roles" class="user__select">
                    <option value="1">Khách hàng</option>
                    <option value="2">Người quản trị</option>
                  </select>
                </div>
                <div class="user__group">
                  <label for="roles" class="user__label">Kích hoạt</label>
                  <select name="roles" id="roles" class="user__select">
                    <option value="1">Kích hoạt</option>
                    <option value="2">Không kích hoạt</option>
                  </select>
                </div>
                <div class="user__group">
                  <label for="file" class="user__label">Hình ảnh</label>
                  <input type="file" name="file" id="file" class="user__file" />
                </div>
              </div>
              <input type="submit" class="user__btn user__submit" value="Thêm">
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
  </div>

</main>

<?php
get_footer();
?>