<?php
get_header();
?>

<main>
    <!-- Reset password Account -->
    <section class="resetPassword">
        <div class="container">
            <div class="form__account">
                <div class="account__inner">
                    <h1 class="heading-title">KHÔI PHỤC MẬT KHẨU</h1>
                    <form action="" id="form-login" method="POST">

                        <div class="form__group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="" placeholder="Email..." />
                            <?php echo form_error('email'); ?>
                        </div>

                        <input type="submit" name="btn-reset" class="btn user__cta" id="btn-login" value="GỬI YÊU CẦU" />
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