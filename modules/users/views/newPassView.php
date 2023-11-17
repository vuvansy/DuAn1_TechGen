<?php
get_header();
?>

<main>
    <!-- New password Account -->
    <section class="newPassword">
        <div class="container">
            <div class="form__account">
                <div class="account__inner">
                    <div class="account__inner--title">
                        <h1 class="heading-title">NHẬP MẬT KHẨU MỚI</h1>
                        <?php echo form_error('account'); ?>
                    </div>
                    <form action="" id="form-login" method="POST">

                        <div class="form__group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" id="password" value="" placeholder="Password" />
                            <?php echo form_error('password'); ?>
                        </div>
                        <div class="form__group">
                            <label for="pass_confirm">Xác nhận mật khẩu</label>
                            <input type="password" name="pass_confirm" id="pass_confirm" placeholder="Mật khẩu mới">
                            <?php echo form_error('pass_confirm'); ?>
                        </div>

                        <input type="submit" name="btn-new-pass" class="btn user__cta" id="btn-login" value="GỬI YÊU CẦU" />
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