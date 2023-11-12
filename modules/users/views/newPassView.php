<?php
get_header();
?>

<main>
    <!-- Reset New password Account -->
    <section class="newPassword">
        <div class="container">
            <div class="form__account">
                <div class="account__inner">
                    <h1 class="heading-title">ĐỔI MẬT KHẨU</h1>
                    <form action="" id="form-login" method="POST">

                        <div class="form__group">
                            <label for="old-pass">Mật khẩu cũ</label>
                            <input type="password" name="pass-old" id="pass-old" placeholder="Mật khẩu cũ">
                            <?php echo form_error('pass-old'); ?>
                        </div>

                        <div class="form__group">
                            <label for="new-pass">Mật khẩu mới</label>
                            <input type="password" name="pass-new" id="pass-new" placeholder="Mật khẩu mới">
                            <?php echo form_error('pass-new'); ?>
                        </div>

                        <div class="form__group">
                            <label for="confirm-pass">Xác nhận mật khẩu</label>
                            <input type="password" name="confirm-pass" id="confirm-pass" placeholder="Mật khẩu mới">
                            <?php echo form_error('confirm-pass'); ?>
                        </div>

                        <input type="submit" name="btn-new-pass" class="btn user__cta" id="btn-login" value="CẬP NHẬT" />
                        <?php echo form_error('account'); ?>
                    </form>

                </div>
                <div class="sidebar__user">
                    <div class="avatar__user">
                        <img src="public/images/user/user2.jpg" alt="">
                    </div>
                    <h2 class="subtitle__user">Vũ Văn Sỹ</h2>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>