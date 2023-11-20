<!DOCTYPE html>
<html>

<head>
    <title>Admin TECHGEN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon  -->

    <!-- Reset CSS  -->
    <link href="public/reset.css" rel="stylesheet" type="text/css" />

    <!-- Embed fonts  -->
    <!-- <link rel="stylesheet" href="public/fonts/stylesheet.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Embed font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <!-- Import file Style CSS -->
    <link href="public/style.css" rel="stylesheet" type="text/css" />

    <!-- Import file responsive CSS -->
    <link href="public/responsive.css" rel="stylesheet" type="text/css" />

    <!-- JS Jquery  -->
    <script src="public/js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="public/js/app.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>

    <!-- JS Chart  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="public/js/cart.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header  -->
    <header class="header">
        <div class="header__body">
            <!-- Logo  -->
            <a href="?mod=home&action=index">
                <img src="public/images/logo/Logo1.jpg" alt="TechGen" class="logo" />
            </a>
            <!-- Dropdown user -->
            <div class="dropdown-user">
                <ul class="dropdown-user__main">
                    <li>
                        <!-- User Login  -->
                        <div class="admin">
                            <!-- Login Success  -->
                            <?php if (isset($_SESSION['user_login'])) : ?>
                                <button type="button" class="dropdown-user__cta">
                                    <!-- <img src="public/images/user/user.png" class="dropdown-user__img"> -->
                                    <?php if (info_user(user_login(), 'image') == '') : ?>
                                        <img class="dropdown-user__img" src="public/images/user/user2.jpg" alt="">
                                    <?php else : ?>
                                        <img class="dropdown-user__img" src="public/images/user/<?php echo info_user(user_login(), 'image'); ?>" alt="<?php echo info_user(is_login(), 'image') ?>">
                                    <?php endif; ?>
                                    <h3 class="heading lv2"><?php echo info_user(user_login(), 'fullname'); ?></h3>
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                            <?php else : ?>
                                <!-- No Login  -->
                                <button type="button" class="dropdown-user__cta">
                                    <!-- <img src="public/images/user/user.png" class="dropdown-user__img"> -->
                                    <?php if (info_user(user_login(), 'image') == '') : ?>
                                        <img class="dropdown-user__img" src="public/images/user/user2.jpg" alt="">
                                    <?php else : ?>
                                        <img class="dropdown-user__img" src="public/images/user/<?php echo info_user(user_login(), 'image'); ?>" alt="<?php echo info_user(is_login(), 'image') ?>">
                                    <?php endif; ?>
                                    <h3 class="heading lv2">ADMIN</h3>
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                            <?php endif ?>
                        </div>
                        <?php if (isset($_SESSION['user_login'])) : ?>
                            <ul class="dropdown-user__sub">
                                <li><a href="?mod=account&action=update" title="Thông tin cá nhân">Cập nhật thông tin</a></li>
                                <li><a href="?mod=account&action=logout" title="Thoát">Thoát</a></li>
                            </ul>
                        <?php endif ?>
                    </li>
                </ul>

            </div>
        </div>
    </header>