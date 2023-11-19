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
                    <p class="sidebar__user--desc">Bắt đầu mua sắm với chúng tôi. Nếu bạn đăng ký tài khoản thành công đăng nhập để mua sắm & thanh toán tiện lợi hơn.</p>
                    <div class="">
                        <a href="?mod=users&action=index"><button class="btn user__cta">ĐĂNG NHẬP</button></a>
                    </div>
                </div>
                <div class="account__inner">
                    <div class="account__inner--title">
                        <h1 class="heading-title">ĐĂNG KÝ</h1>
                        <?php echo form_error('account'); ?>
                    </div>
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
                                <input type="text" name="email" id="email" value="<?php echo set_value('email'); ?>" placeholder="Email..." />
                                <?php echo form_error('email'); ?>
                            </div>

                            <div class="form__group">
                                <label for="phone">Số Điện thoại</label>
                                <input type="text" name="phone" id="phone" value="<?php echo set_value('phone'); ?>" placeholder="Số điện thoại..." />
                                <?php echo form_error('phone'); ?>
                            </div>
                        </div>

                        <div class="form__group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" id="address" value="<?php echo set_value('address'); ?>" placeholder="Địa chỉ..." />
                            <?php echo form_error('address'); ?>
                        </div>

                        <div class="row-form__group">
                            <div class="form__group">
                                <label for="password">Mật khẩu</label>
                                <input type="password" name="password" id="password" value="" placeholder="Password" />
                                <?php echo form_error('password'); ?>
                            </div>

                            <div class="form__group">
                                <label for="confirm_pass">Xác nhận mật khẩu</label>
                                <input type="password" name="confirm_pass" id="confirm_pass" value="" placeholder="Password" />
                                <?php echo form_error('confirm_pass'); ?>
                            </div>
                        </div>

                        <input type="submit" name="btn-reg" class="btn user__cta" id="btn-login" value="ĐĂNG KÝ" />
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>