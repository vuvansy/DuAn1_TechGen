<?php
get_header();
?>

<main>
    <!-- Reset Edit password Account -->
    <section class="editPassword">
        <div class="container">
            <div class="form__account">
                <div class="account__inner">
                    <div class="account__inner--title">
                        <h1 class="heading-title">ĐỔI MẬT KHẨU</h1>
                        <?php echo form_error('account'); ?>
                    </div>
                    <form action="" id="form-login" method="POST">

                        <div class="form__group">
                            <label for="pass_old">Mật khẩu cũ</label>
                            <input type="password" name="pass_old" id="pass_old" placeholder="Mật khẩu cũ">
                            <?php echo form_error('pass_old'); ?>
                        </div>

                        <div class="form__group">
                            <label for="pass_new">Mật khẩu mới</label>
                            <input type="password" name="pass_new" id="pass_new" placeholder="Mật khẩu mới">
                            <?php echo form_error('pass_new'); ?>
                        </div>

                        <div class="form__group">
                            <label for="pass_confirm">Xác nhận mật khẩu</label>
                            <input type="password" name="pass_confirm" id="pass_confirm" placeholder="Mật khẩu mới">
                            <?php echo form_error('pass_confirm'); ?>
                        </div>

                        <input type="submit" name="btn-editPass" class="btn user__cta" id="btn-login" value="CẬP NHẬT" />
                    </form>

                </div>
                <div class="sidebar__user">
                    <div class="avatar__user">
                        <?php if ($info_user_by_id['image'] == '') : ?>
                            <img src="public/images/user/user2.jpg" alt="">
                        <?php else : ?>
                            <img src="admin/public/images/user/<?php echo info_user(user_login(), 'image'); ?>" alt="<?php echo info_user(is_login(), 'image') ?>">
                        <?php endif; ?>
                    </div>
                    <h2 class="subtitle__user"><?php echo $info_user_by_id['fullname'] ?></h2>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>