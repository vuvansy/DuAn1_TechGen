<?php
get_header();
?>

<main>
    <!-- Update Account -->
    <section class="updateAccount">
        <div class="container">
            <div class="form__account">
                <div class="account__inner">
                    <div class="account__inner--title">
                        <h1 class="heading-title">CẬP NHẬT THÔNG TIN</h1>
                        <?php echo form_error('account'); ?>
                    </div>
                    <form action="" id="form-login" enctype="multipart/form-data" method="POST">
                        <div class="row-form__group">
                            <div class="form__group">
                                <label for="fullname">Họ tên</label>
                                <input type="text" name="fullname" id="fullname" value="<?php echo $info_user_by_id['fullname'] ?>" placeholder="Fullname..." />
                                <?php echo form_error('fullname'); ?>
                            </div>

                            <div class="form__group">
                                <label for="username">Tên đăng nhập</label>
                                <input type="text" name="username" id="username" value="<?php echo $info_user_by_id['username'] ?>" readonly="readonly" placeholder="Username..." />
                                <?php echo form_error('username'); ?>
                            </div>
                        </div>

                        <div class="row-form__group">
                            <div class="form__group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="<?php echo $info_user_by_id['email'] ?>" placeholder="Email..." />
                                <?php echo form_error('email'); ?>
                            </div>

                            <div class="form__group">
                                <label for="phone">Số Điện thoại</label>
                                <input type="text" name="phone" id="phone" value="<?php echo $info_user_by_id['phone'] ?>" placeholder="Số điện thoại..." />
                                <?php echo form_error('phone'); ?>
                            </div>
                        </div>

                        <div class="form__group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" id="address" value="<?php echo $info_user_by_id['address'] ?>" placeholder="Địa chỉ..." />
                            <?php echo form_error('address'); ?>
                        </div>

                        <div class="form__group">
                            <label for="image" class="image__user">Hình</label>
                            <input type="file" name="image" id="image" value="<?php echo $info_user_by_id['image'] ?>" placeholder="Địa chỉ..." />
                            <?php echo form_error('image'); ?>
                        </div>

                        <input type="submit" name="btn-update" class="btn user__cta" id="btn-login" value="CẬP NHẬT" />

                    </form>
                </div>
                <div class="sidebar__user">
                    <div class="avatar__user">
                        <?php if (info_user(is_login(), 'image') == '') : ?>
                            <img src="public/images/user/user2.jpg" alt="">
                        <?php else : ?>
                            <img src="public/images/user/<?php echo $info_user_by_id['image'] ?>" alt="<?php echo info_user(is_login(), 'image') ?>">
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