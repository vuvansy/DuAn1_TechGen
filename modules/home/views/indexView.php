<?php
get_header();
get_slideshow();
// Đường dẫn hình ảnh
$imagesURL = "public/images";
?>
<!-- Main  -->
<main>
    <!-- Flash-sales -->
    <section class="flash-sales">
        <div class="container">
            <div class="flash-sales__body">
                <div class="flash-sale__headline">
                    <img src="public/images/icon/sale.webp" alt="">
                    <h2 class="heading lv1"><span>HOT SALE</span> GIÁ SỐC</h2>
                </div>

                <div class="flash-sales__list">
                    <!-- Flash-sales__item 1 -->
                    <?php
                    foreach ($product_sale as $item) {
                        $category = get_category_by_id($item['id_category']);
                        if ($item['product_sale'] > 0) {
                            $sale = (($item['product_price'] - $item['product_sale']) / $item['product_price']) * 100;
                        } else {
                            $sale = 0;
                        }

                    ?>
                        <div class="product-sales__item">
                            <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>">
                                <img src="<?php echo $imagesURL ?>/product/<?php echo $item['product_image'] ?>" alt="" class="thumb">
                            </a>
                            <div class="product-sales__info">
                                <h3 class="product-sales__info--title">
                                    <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>" class="line-clamp break-all line-2">
                                        <?php echo $item['product_name'] ?>
                                    </a>
                                </h3>
                                <div class="product-sales__info--foot">
                                    <?php if ($sale == 0) :
                                        $gia = $item['product_price'];
                                    ?>

                                        <span class="latest-price"><?php echo currency_format($gia, 'đ'); ?></span>
                                        <span>&nbsp;</span>
                                        <!-- <span class="latest-price"><?php echo currency_format($gia, 'đ'); ?></span>
                                        <span class="price-and-discount">
                                            <label class="price-old"><?php echo currency_format($item['product_price'], 'đ'); ?></label>
                                            <small><?php echo round($sale, 1) ?>%</small>
                                        </span> -->
                                    <?php else :
                                        $gia = $item['product_sale'];
                                    ?>
                                        <span class="latest-price"><?php echo currency_format($gia, 'đ'); ?></span>
                                        <span class="price-and-discount">
                                            <label class="price-old"><?php echo currency_format($item['product_price'], 'đ'); ?></label>
                                            <small><?php echo round($sale, 1) ?>%</small>
                                        </span>
                                        <!-- <span class="latest-price"><?php echo currency_format($gia, 'đ'); ?></span>
                                        <span>&nbsp;</span> -->
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Category  -->
    <section class="category">
        <div class="container">
            <div class="category__body">
                <h2 class="category__heading heading lv1">DANH MỤC NỔI BẬT</h2>
                <div class="category__list">
                    <!-- Category item 1  -->
                    <?php
                    $category = get_category();
                    foreach ($category as $item) {
                        // show_array($item);
                    ?>
                        <div class="category-item">
                            <a href="?mod=product&action=productList&cat_id=<?php echo $item['id_category'] ?>">
                                <div class="category-item__thumb">
                                    <img src="admin/public/images/category/<?php echo $item['category_image'] ?>" alt="laptop">
                                </div>
                                <span><?php echo $item['category_name'] ?></span>
                            </a>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
    </section>
    <!-- Poster  -->
    <section class="post">
        <div class="container">
            <img src="public/images/slide/slide_h1.png" alt="" class="post_thumb">
        </div>
    </section>
    <!-- Product  Iphone-->
    <section class="product">
        <div class="container">
            <div class="product__body">
                <header class="product__header">
                    <div class="header">
                        <h4>
                            <a href="">ĐIỆN THOẠI NỔI BẬT</a>
                        </h4>
                    </div>
                </header>
                <div class="product__list">
                    <!-- Product item 1  -->
                    <?php
                    foreach ($product_phone as $item) {
                        $category = get_category_by_id($item['id_category']);
                        if ($item['product_sale'] > 0) {
                            $sale = (($item['product_price'] - $item['product_sale']) / $item['product_price']) * 100;
                        } else {
                            $sale = 0;
                        }
                    ?>
                        <div class="product__item">
                            <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>">
                                <img src="<?php echo $imagesURL ?>/product/<?php echo $item['product_image'] ?>" alt="<?php echo $category['category_name'] ?>" class="thumb">
                            </a>
                            <div class="product__info">
                                <h3 class="product__info--title">
                                    <span class="product-brand"><?php echo $category['category_name'] ?></span>
                                    <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>" class="line-clamp break-all line-2">
                                        <?php echo $item['product_name'] ?>
                                    </a>
                                </h3>
                                <div class="product__info--foot">
                                    <div class="product__price">
                                        <span class="latest-price"><?php echo currency_format($item['product_sale'], 'đ'); ?></span>
                                        <span class="price-and-discount">
                                            <label class="price-old"><?php echo currency_format($item['product_price'], 'đ'); ?></label>
                                            <small><?php echo round($sale, 1) ?>%</small>
                                        </span>
                                    </div>
                                    <a class="btn cart-btn" href="?mod=order&action=add&id=<?php echo $item['id_product'] ?>">
                                        Mua ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </section>
    <!-- Product Laptop  -->
    <section class="product">
        <div class="container">
            <div class="product__body">
                <header class="product__header">
                    <div class="header">
                        <h4>
                            <a href="">LAPTOP NỔI BẬT</a>
                        </h4>
                    </div>
                </header>
                <div class="product__list">
                    <!-- Product item 1  -->
                    <?php
                    foreach ($product_laptop as $item) {
                        $category = get_category_by_id($item['id_category']);
                        if ($item['product_sale'] > 0) {
                            $sale = (($item['product_price'] - $item['product_sale']) / $item['product_price']) * 100;
                        } else {
                            $sale = 0;
                        }
                    ?>
                        <div class="product__item">
                            <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>">
                                <img src="<?php echo $imagesURL ?>/product/<?php echo $item['product_image'] ?>" alt="<?php echo $category['category_name'] ?>" class="thumb">
                            </a>
                            <div class="product__info">
                                <h3 class="product__info--title">
                                    <span class="product-brand"><?php echo $category['category_name'] ?></span>
                                    <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>" class="line-clamp break-all line-2">
                                        <?php echo $item['product_name'] ?>
                                    </a>
                                </h3>
                                <div class="product__info--foot">
                                    <div class="product__price">
                                        <span class="latest-price"><?php echo currency_format($item['product_sale'], 'đ'); ?></span>
                                        <span class="price-and-discount">
                                            <label class="price-old"><?php echo currency_format($item['product_price'], 'đ'); ?></label>
                                            <small><?php echo round($sale, 1) ?>%</small>
                                        </span>
                                    </div>
                                    <a class="btn cart-btn" href="?mod=order&action=add&id=<?php echo $item['id_product'] ?>">
                                        Mua ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </section>
    <!-- Product Clock  -->
    <section class="product">
        <div class="container">
            <div class="product__body">
                <header class="product__header">
                    <div class="header">
                        <h4>
                            <a href="">ĐỒNG HỒ THÔNG MINH</a>
                        </h4>
                    </div>
                </header>
                <div class="product__list">
                    <!-- Product item 1  -->
                    <?php
                    foreach ($product_clock as $item) {
                        $category = get_category_by_id($item['id_category']);
                        if ($item['product_sale'] > 0) {
                            $sale = (($item['product_price'] - $item['product_sale']) / $item['product_price']) * 100;
                        } else {
                            $sale = 0;
                        }
                    ?>
                        <div class="product__item">
                            <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>">
                                <img src="<?php echo $imagesURL ?>/product/<?php echo $item['product_image'] ?>" alt="<?php echo $category['category_name'] ?>" class="thumb">
                            </a>
                            <div class="product__info">
                                <h3 class="product__info--title">
                                    <span class="product-brand"><?php echo $category['category_name'] ?></span>
                                    <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>" class="line-clamp break-all line-2">
                                        <?php echo $item['product_name'] ?>
                                    </a>
                                </h3>
                                <div class="product__info--foot">
                                    <div class="product__price">
                                        <span class="latest-price"><?php echo currency_format($item['product_sale'], 'đ'); ?></span>
                                        <span class="price-and-discount">
                                            <label class="price-old"><?php echo currency_format($item['product_price'], 'đ'); ?></label>
                                            <small><?php echo round($sale, 1) ?>%</small>
                                        </span>
                                    </div>
                                    <a class="btn cart-btn" href="?mod=order&action=add&id=<?php echo $item['id_product'] ?>">
                                        Mua ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </section>
    <!-- Poster Laptop -->
    <section class="poster-laptop">
        <div class="container">
            <div class="poster-laptop__body">
                <div class="poster-laptop__left">
                    <a href=""><img src="public/images/slide/slide_6.jpg" alt=""></a>
                    <div class="laptop__title">
                        <p class="heading lv1">Laptop Apple MacBook Air 13</p>
                        <span>Macbook Pro M1 giảm giá sâu nhất trong năm 2023</span>
                    </div>
                </div>
                <div class="poster-laptop__right">
                    <div class="laptop__top">
                        <div class="laptop__top--left">
                            <a href=""><img src="public/images/slide/slide_4.png" alt=""></a>
                            <div class="laptop__title">
                                <p class="heading lv1">Macbook Pro</p>
                            </div>
                        </div>
                        <div class="laptop__top--right">
                            <a href=""><img src="public/images/slide/slide_4.png" alt=""></a>
                            <div class="laptop__title">
                                <p class="heading lv1">Laptop Apple</p>
                            </div>
                        </div>
                    </div>
                    <div class="laptop__bottom">
                        <a href=""><img src="public/images/slide/slide_5.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Corevalue  -->
    <section>
        <div class="container">
            <div class="corevalue__list">
                <!-- corevalue item 1  -->
                <div class="corevalue__item">
                    <span class="corevalue__icon">
                        <i class="fa-regular fa-circle-check"></i>
                    </span>
                    <div class="corevalue__text">
                        <span>Sản phẩm</span>
                        <strong>CHÍNH HÃNG</strong>
                    </div>
                </div>
                <!-- corevalue item 1  -->
                <div class="corevalue__item">
                    <span class="corevalue__icon">
                        <i class="fa-solid fa-truck-fast"></i>
                    </span>
                    <div class="corevalue__text">
                        <span>Miễn phí vận chuyển</span>
                        <strong>TOÀN QUỐC</strong>
                    </div>
                </div>
                <!-- corevalue item 1  -->
                <div class="corevalue__item">
                    <span class="corevalue__icon">
                        <i class="fa-solid fa-headphones-simple"></i>
                    </span>
                    <div class="corevalue__text">
                        <span>Hotline hỗ trợ</span>
                        <strong>1900.2091</strong>
                    </div>
                </div>
                <!-- corevalue item 1  -->
                <div class="corevalue__item">
                    <span class="corevalue__icon">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </span>
                    <div class="corevalue__text">
                        <span>Thủ tục đổi trả</span>
                        <strong>DỄ DÀNG</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>