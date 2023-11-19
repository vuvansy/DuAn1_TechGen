<?php
get_header();
?>

<main>
    <!-- Success password Account -->
    <section class="resetOkPassword">
        <div class="container">
            <div class="form__account">
                <div class="account__inner">
                    <h1 class="heading-title">THIẾT LẬP MẬT KHẨU MỚI THÀNH CÔNG</h1>
                    <p>Bạn đã thay đổi mật khẩu mới thành công vui lòng click vào: <a href="<?php echo base_url("?mod=account&action=index"); ?>" id="lost-pass">Đăng nhập</a></p>

                </div>
                <div class="sidebar__user">
                    <div class="avatar__user">
                        <img src="public/images/user/user2.jpg" alt="">
                    </div>
                    <h2 class="subtitle__user">USER_ NAME</h2>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>