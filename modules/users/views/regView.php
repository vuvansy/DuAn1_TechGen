<?php
get_header();
?>

<main>
    <!-- Register  -->
    <section class="register">
        <div class="container">
            <div class="form__account">
                <div class="sidebar__user">
                    <h1 class="sidebar__user--heading">Xin chào, Bạn</h1>
                    <p class="sidebar__user--desc">Hãy bắt đầu với chúng tôi. Nếu bạn chưa có tài khoản.</p>
                    <div class="">
                        <a href="?mod=users&action=index"><button class="btn user__cta">ĐĂNG NHẬP</button></a>
                    </div>
                </div>
                <div class="account__inner">
                    <h1 class="heading-title">ĐĂNG KÝ</h1>
                    <form action="" id="form-login" method="POST">
                        <div class="row-form__group">
                            <div class="form__group">
                                <label for="fullname">Họ tên</label>
                                <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>" placeholder="Fullname..." />
                                <?php echo form_error('fullname'); ?>
                            </div>

                            <div class="form__group">
                                <label for="username">Tên đăng nhập</label>
                                <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>" placeholder="Username..." />
                                <?php echo form_error('username'); ?>
                            </div>
                        </div>

                        <div class="row-form__group">
                            <div class="form__group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="" placeholder="Email..." />
                                <?php echo form_error('email'); ?>
                            </div>

                            <div class="form__group">
                                <label for="phone">Số Điện thoại</label>
                                <input type="text" name="phone" id="phone" value="" placeholder="Số điện thoại..." />
                                <?php echo form_error('phone'); ?>
                            </div>
                        </div>

                        <div class="form__group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" id="address" value="" placeholder="Địa chỉ..." />
                            <?php echo form_error('address'); ?>
                        </div>

                        <div class="row-form__group">
                            <div class="form__group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" name="password" id="password" value="" placeholder="Password" />
                                <?php echo form_error('password'); ?>
                            </div>

                            <div class="form__group">
                                <label for="confirm-pass">Xác nhận mật khẩu</label>
                                <input type="password" name="confirm-pass" id="confirm-pass" value="" placeholder="Password" />
                                <?php echo form_error('password'); ?>
                            </div>
                        </div>

                        <input type="submit" name="btn-reg" class="btn user__cta" id="btn-login" value="ĐĂNG KÝ" />
                        <?php echo form_error('account'); ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>