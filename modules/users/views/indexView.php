<?php
get_header();
?>

<main>
    <!-- Login  -->
    <section class="login">
        <div class="container">
            <div class="form__account">
                <div class="account__inner">
                    <div class="account__inner--title">
                        <h1 class="heading-title">ĐĂNG NHẬP</h1>
                        <?php echo form_error('account'); ?>
                    </div>
                    <form action="" id="form-login" method="POST">
                        <div class="form__group">
                            <label for="username">Tên đăng nhập</label>
                            <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>" placeholder="Tên đăng nhập..." />
                            <?php echo form_error('username'); ?>
                        </div>

                        <div class="form__group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" id="password" value="" placeholder="Password" />
                            <?php echo form_error('password'); ?>
                        </div>

                        <div class="form__group">
                            <input type="checkbox" name="remember_me" id="remember_me">
                            <label for="remember_me" class="remember">Ghi nhớ thông tin</label>
                            <a class="control__reset" href="?mod=users&action=reset">Quên mật khẩu?</a>
                        </div>

                        <input type="submit" name="btn-login" class="btn user__cta" id="btn-login" value="ĐĂNG NHẬP" />

                    </form>
                </div>
                <div class="sidebar__user">

                    <h2 class="sidebar__user--heading">Xin chào, Bạn</h2>
                    <p class="sidebar__user--desc">Hãy bắt đầu với chúng tôi. Nếu bạn chưa có tài khoản.</p>
                    <div class="">
                        <a href="?mod=users&action=reg"><button class="btn user__cta">ĐĂNG KÝ</button></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>