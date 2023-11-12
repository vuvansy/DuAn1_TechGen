<?php
get_header();
?>

<main>
    <!-- Update Account -->
    <section class="register">
        <div class="container">
            <div class="form__account">
                <div class="account__inner">
                    <h1 class="heading-title">CẬP NHẬT THÔNG TIN</h1>
                    <form action="" id="form-login" method="POST">
                        <div class="row-form__group">
                            <div class="form__group">
                                <label for="fullname">Họ tên</label>
                                <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>" placeholder="Fullname..." />
                                <?php echo form_error('fullname'); ?>
                            </div>

                            <div class="form__group">
                                <label for="username">Tên đăng nhập</label>
                                <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>" readonly="readonly" placeholder="Username..." />
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

                        <div class="form__group">
                            <label for="image" class="image__user">Hình</label>
                            <input type="file" name="image" id="image" value="" placeholder="Địa chỉ..." />
                            <?php echo form_error('image'); ?>
                        </div>

                        <input type="submit" name="btn-update" class="btn user__cta" id="btn-login" value="CẬP NHẬT" />
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