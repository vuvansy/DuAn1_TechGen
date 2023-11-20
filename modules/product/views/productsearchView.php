<?php
get_header();
$imagesURL = "public/images";
?>
<main>
    <!-- Product Detail  -->
    <section class="productDetail">
        <div class="container">
            <!-- ProductDetail heading  -->
            <div class="productDetail__heading">
                <h2 class="heading">Sản phẩm cần tìm của bạn</h2>
                <p class="desc heading lv2">
                    Sắp xếp theo
                </p>
                <div class="control__option">
                    <a href="" class="control__option--item btn">
                        <i class="fa-solid fa-arrow-down-short-wide"></i>
                        Giá Cao - Thấp
                    </a>
                    <a href="" class="control__option--item btn">
                        <i class="fa-solid fa-arrow-up-wide-short"></i>
                        Giá Thấp - Cao
                    </a>
                    <a href="" class="control__option--item btn">
                        <i class="fa-solid fa-percent"></i>
                        Khuyến Mãi Hót
                    </a>
                    <a href="" class="control__option--item btn">
                        <i class="fa-solid fa-eye"></i>
                        Xem Nhiều
                    </a>
                </div>
            </div>
            <!-- Product list  -->
            <div class="product__list">
                <!-- Product item 1  -->
                <?php
                foreach ($list_product as $item) {
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
                                    <?php if ($sale == 0) :
                                        $gia = $item['product_price'];
                                    ?>
                                        <span class="latest-price"><?php echo currency_format($gia, 'đ'); ?></span>
                                    <?php else :
                                        $gia = $item['product_sale'];
                                    ?>
                                        <span class="latest-price"><?php echo currency_format($gia, 'đ'); ?></span>
                                        <span class="price-and-discount">
                                            <label class="price-old"><?php echo currency_format($item['product_price'], 'đ'); ?></label>
                                            <small><?php echo round($sale, 1) ?>%</small>
                                        </span>
                                    <?php endif ?>
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
            <!-- Pagination  -->
            <div class="pagination">
                <ul class="pagging">
                    <li>
                        <a href="" class="control__btn">
                            < </a>
                    </li>
                    <li class="active"><a href="?mod=users&act=main&page=1">1</a></li>
                    <li><a href="?mod=users&act=main&page=2">2</a></li>
                    <li><a href="?mod=users&act=main&page=3">3</a></li>
                    <li>
                        <a href="" class="control__btn">
                            >
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>


<?php
get_footer();
?>