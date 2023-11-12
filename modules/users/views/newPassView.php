<?php
get_header();
?>

<main>
    <!-- New password Account -->
    <section class="newPassword">
        <div class="container">
            <div class="form__account">
                <div class="account__inner">
                    <h1 class="heading-title">MẬT KHẨU MỚI</h1>
                    <form action="" id="form-login" method="POST">

                        <div class="form__group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" id="password" value="" placeholder="Password" />
                            <?php echo form_error('password'); ?>
                        </div>

                        <input type="submit" name="btn-new-pass" class="btn user__cta" id="btn-login" value="GỬI YÊU CẦU" />
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