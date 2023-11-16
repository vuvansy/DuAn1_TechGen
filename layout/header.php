<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ TechGen</title>
    <!-- Favicon  -->
    <link rel="apple-touch-icon" sizes="57x57" href="public/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="public/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="public/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="public/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="public/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="public/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="public/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="public/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/favicon/favicon-16x16.png">
    <link rel="manifest" href="public/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="public/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Reset CSS  -->
    <link href="public/css/reset.css" rel="stylesheet" type="text/css" />

    <!-- Embed fonts  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Embed Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Import file Style CSS -->
    <link href="public/style.css" rel="stylesheet" type="text/css" />

    <!-- Import file responsive CSS -->

    <!-- JS Jquery  -->
    <script src="public/js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="public/js/app.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
</head>

<body>
    <!-- Header  -->
    <header>
        <!-- Header Top  -->
        <div class="header-top">
            <div class="container">
                <ul class="navigation">
                    <li>
                        <a href="">
                            <i class="fa-solid fa-tag"></i>
                            Khuyến mãi
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-building"></i>
                            Hệ thống Showroom
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-briefcase"></i>
                            Tư vấn doanh nghiệp
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-headphones"></i>
                            Liên hệ
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-desktop"></i>
                            Tin công nghệ
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-wrench"></i>
                            Xây dựng cấu hình</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header heading -->
        <div class="header-heading">
            <div class="container">
                <div class="header-heading__body">
                    <!-- Logo  -->
                    <a href="?">
                        <img src="public/images/logo/logo2.jpg" alt="TechGen" class="logo" />
                    </a>
                    <!-- Search box  -->
                    <div class="search-box">
                        <div class="border-form">
                            <form action="" class="search-form">
                                <input type="text" class="search-form__input" placeholder="Nhập từ khóa cần tìm gì?" />
                                <!-- Submit button -->
                                <button type="submit" class="search-form__btn">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>

                                <!-- Clear button -->
                                <button type="reset" class="search-form__clear">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Order-tools  -->
                    <div class="order-tools">
                        <!-- User Login  -->
                        <div class="admin">
                            <!-- Login Success  -->
                            <?php if (isset($_SESSION['user_login'])) : ?>
                                <div class="dropdown__login">
                                    <ul class="main__login">
                                        <li>
                                            <div class="main__login--btn">
                                                <span>
                                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g id="user">
                                                            <path id="Vector" d="M21.6667 22.75V20.5833C21.6667 19.4341 21.2102 18.3319 20.3975 17.5192C19.5848 16.7065 18.4826 16.25 17.3334 16.25H8.66671C7.51744 16.25 6.41524 16.7065 5.60258 17.5192C4.78992 18.3319 4.33337 19.4341 4.33337 20.5833V22.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path id="Vector_2" d="M13 11.9167C15.3932 11.9167 17.3333 9.97657 17.3333 7.58333C17.3333 5.1901 15.3932 3.25 13 3.25C10.6067 3.25 8.66663 5.1901 8.66663 7.58333C8.66663 9.97657 10.6067 11.9167 13 11.9167Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <div class="subject__login">
                                                    <span>Xin chào,</span>
                                                    <span class="line-clamp break-all"><?php echo info_user(user_login(), 'fullname'); ?></span>
                                                </div>
                                            </div>
                                            <ul class="sub__login">
                                                <?php if (info_user(user_login(), 'user_role') == 1) : ?>
                                                    <li>
                                                        <a href="./admin/?"><i class="fa-solid fa-user-gear"></i> Trang quản trị</a>
                                                    </li>
                                                <?php endif ?>
                                                <li>
                                                    <a href="?mod=users&action=update"><i class="fa-solid fa-bookmark"></i> Cập nhật thông tin</a>
                                                </li>
                                                <li>
                                                    <a href="?mod=users&action=editPass"><i class="fa-solid fa-gear"></i> Đổi mật khẩu</a>
                                                </li>
                                                <li>
                                                    <a href="?mod=users&action=logout"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            <?php else : ?>
                                <!-- No Login  -->
                                <a href="?mod=users&action=index">
                                    <span>
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="user">
                                                <path id="Vector" d="M21.6667 22.75V20.5833C21.6667 19.4341 21.2102 18.3319 20.3975 17.5192C19.5848 16.7065 18.4826 16.25 17.3334 16.25H8.66671C7.51744 16.25 6.41524 16.7065 5.60258 17.5192C4.78992 18.3319 4.33337 19.4341 4.33337 20.5833V22.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path id="Vector_2" d="M13 11.9167C15.3932 11.9167 17.3333 9.97657 17.3333 7.58333C17.3333 5.1901 15.3932 3.25 13 3.25C10.6067 3.25 8.66663 5.1901 8.66663 7.58333C8.66663 9.97657 10.6067 11.9167 13 11.9167Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span>Đăng nhập</span>
                                </a>
                            <?php endif ?>
                        </div>
                        <!-- Cart  -->
                        <div class="cart">
                            <a href="?mod=order&action=index">
                                <span id="cart-total">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.5 2.16666L3.25 6.49999V21.6667C3.25 22.2413 3.47827 22.7924 3.8846 23.1987C4.29093 23.605 4.84203 23.8333 5.41667 23.8333H20.5833C21.158 23.8333 21.7091 23.605 22.1154 23.1987C22.5217 22.7924 22.75 22.2413 22.75 21.6667V6.49999L19.5 2.16666H6.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.25 6.5H22.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.3333 10.8333C17.3333 11.9826 16.8767 13.0848 16.0641 13.8975C15.2514 14.7101 14.1492 15.1667 13 15.1667C11.8507 15.1667 10.7485 14.7101 9.93583 13.8975C9.12317 13.0848 8.66663 11.9826 8.66663 10.8333" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <div>
                                    <span>Giỏ hàng của bạn</span>
                                    <span>(10) sản phẩm</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav -->
        <nav class="navbar">
            <div class="container">
                <div class="navbar__menu">
                    <!-- Dropdown category -->
                    <div class="dropdown">
                        <ul id="main-menu">
                            <li>
                                <button class="main-menu__cta"><i class="fa-solid fa-bars btn-icon"></i> Danh mục sản phẩm</button>
                                <ul class="sub-menu">
                                    <?php
                                    $category = get_category();
                                    foreach ($category as $item) {
                                    ?>
                                        <li><a href="?mod=product&action=productList&cat_id=<?php echo $item['id_category'] ?>"><?php echo $item['category_name'] ?></a></li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Navbar_list  -->
                    <ul class="navbar__list">
                        <li class="navbar__item">
                            <a href="?" class="navbar__link">Trang chủ</a>
                        </li>
                        <li class="navbar__item">
                            <a href="?mod=post&action=index" class="navbar__link">Giới thiệu</a>
                        </li>
                        <li class="navbar__item">
                            <a href="?mod=post&action=warranty" class="navbar__link">Bảo hành</a>
                        </li>
                        <li class="navbar__item">
                            <a href="?mod=page&action=index" class="navbar__link">Tin tức</a>
                        </li>
                        <li class="navbar__item">
                            <a href="" class="navbar__link">Hướng dẫn</a>
                        </li>
                        <li class="navbar__item">
                            <a href="?mod=page&action=contact" class="navbar__link">Liên hệ</a>
                        </li>
                    </ul>
                    <!-- Hotline  -->
                    <a href="tel:19008989" class="navbar__contact">
                        <div>
                            <p>Hotline</p>
                            <p>1900.89.89</p>
                        </div>
                        <i class="fa-solid fa-phone-volume"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>