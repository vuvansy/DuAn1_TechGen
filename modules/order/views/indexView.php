<?php
get_header();
$imagesURL = "public/images";
?>

<?php
//    $_SESSION['user'] = [
//        'id_user' => 3,
//        'fullname' => 'tiến',
//        'email' => 'ngyasuooo@gmail.com',
//        'phone' => '0338015163',
//        'address' => 'hòa lạc, phường hoànd đông, thành phố Hồ Chí Minh'
//    ];
//    unset($_SESSION['user']);
if (isset($_SESSION['user']) && ($_SESSION['user'] != '')) {
    $actionForm = "?mod=order&action=pay";
} else {
    $actionForm = "?mod=users&action=index";
}
$cartHtm = '';
$key = 0;
$cartQuantity = 0;
$cartTotal = 0;
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    $cartHtm .= '
            <table class="order-detail-table">
                <thead class="order-detail-thead">
                    <tr>
                        <th class="th-order-detail-s">Sản phẩm</th>
                        <th class="th-order-detail-sl">Số lượng</th>
                        <th class="th-order-detail-g">Giá</th>
                        <th class="th-order-detail-t">Thành tiền</th>
                    </tr>
                </thead>
                <tbody class="order-detail-tbody">
        ';
    foreach ($_SESSION['cart'] as $item) {
        $cartQuantity += $item['count'];
        $cartTotal += $item['price'] * $item['count'];
        $cartHtm .= '
            <tr>
                <td class="order-detail-tbody-product">
                    <img src="public/images/product/' . $item['image'] . '" alt="">
                    <div class="table-orders-detail">
                        <p class="orders-detail">' . $item['name'] . '</p>
                        <p class="orders-color">Color: Depp purple</p>
                        <p class="orders-category">Dung lượng: 128G</p>
                        <a href="?mod=order&action=remove&key=' . $key . '" class="orders-button" >Xóa</a>
                    </div>
                </td>
                <td class="update-order-count">
                    <a href="?mod=order&action=up&key=' . $key . '" class="count-down">+</a>
                    <div class="count">' . $item['count'] . '</div>
                    <a href="?mod=order&action=down&key=' . $key . '" class="count-up">-</a>
                </td>
                <td class="price-oder-number">' . number_format($item['price'], 0, ',', '.') . '</td>
                <td class="total-oder-number">' . number_format(($item['price'] * $item['count']), 0, ',', '.') . '</td>
            </tr>
        ';
        $key++;
    }
    $cartHtm .= '</tbody>
            </table>';
} else {
    $cartHtm .= '
          <h1> Bạn chưa thêm sản phẩm nào vào giỏ hàng !</h1>  
        ';
}
?>

    <main>
        <section class="cartShow">
            <div class="container">
                <div class="cartView__control">
                    <a href="?mod=order&action=index" class="btn cart__cta">Giỏ hàng</a>
                    <a href="?mod=order&action=cartview" class="btn cart__cta">Quản lí đơn hàng</a>
                </div>
                <div class="box-order-all">
                    <div class="box-order-left">
                        <h3>Giỏ hàng của bạn</h3>
                        <?= $cartHtm ?>
                    </div>
                    <div class="box-order-right">
                        <h3>Thanh toán</h3>
                        <div class="right-detail new">
                            <p>Sản phẩm: <span><?= $cartQuantity ?></span></p>
                            <p><?= number_format($cartTotal, 0, ',', '.') ?></p>
                        </div>
                        <h4>Thông tin vận chuyển</h4>
                        <form action="<?= $actionForm ?>" method="POST">
                            <input class="input-1" name="name_delivery" type="text" value="<?php
                            if (isset($_SESSION['user'])) {
                                echo $_SESSION['user']['fullname'];
                            } else {
                                echo '';
                            }
                            ?>" placeholder="Họ và tên">
                            <div class="input-b">
                                <input class="input-1 input--1" name="email_delivery" type="text" value="<?php
                                if (isset($_SESSION['user'])) {
                                    echo $_SESSION['user']['email'];
                                } else {
                                    echo '';
                                }
                                ?>" placeholder="Email">
                                <input class="input-1 input-2" name="phone_delivery" type="text" value="<?php
                                if (isset($_SESSION['user'])) {
                                    echo $_SESSION['user']['phone'];
                                } else {
                                    echo '';
                                }
                                ?>" placeholder="Số điện thoại">
                            </div>
                            <input class="input-1" name="address_delivery" value="<?php
                            if (isset($_SESSION['user'])) {
                                echo $_SESSION['user']['address'];
                            } else {
                                echo '';
                            }
                            ?>" type="text" placeholder="Địa chỉ">

                            <h4>Phương thức thanh toán</h4>
                            <div class="input-text">
                                <div class="option">
                                    <div class="option-input">
                                        <input value="1" class="input-checkbox" name="delivery-order" type="radio"
                                               checked id="product_status" name="product_status">
                                        <div class="option-detail">
                                            <p>Thanh toán khi nhận hàng</p>
                                            <p>Miễn phí</p>
                                        </div>

                                    </div>
                                    <div class="option-input">
                                        <input value="2" class="input-checkbox" name="delivery-order" type="radio"
                                               id="special" name="special">
                                        <p>Thanh toán online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right-detail new">
                                <p>Tổng cộng: </p>
                                <p><?= number_format($cartTotal, 0, ',', '.') ?></p>
                                <input type="hidden" name="order_total" value="<?= $cartTotal ?>">
                                <input type="hidden" name="order_quantity" value="<?= $cartQuantity ?>">
                            </div>
                            <div class="button-bottom">
                                <input type="submit" value="Thanh toán">
                            </div>
                        </form>

                    </div>
                </div>


                <!-- productRelated  -->
                <section class="productRelated">
                    <div class="productRelated__body">
                        <div class="productRelated__heading">
                            <h2 class="heading lv1">SẢN PHẨM MỚI</h2>
                        </div>
                        <div class="product__list">
                            <!-- Product item 1  -->
                            <?php
                            $product_new = get_product_new();
                            foreach ($product_new as $item) {
                                $category = get_category_by_id($item['id_category']);
                                if ($item['product_sale'] > 0) {
                                    $sale = (($item['product_price'] - $item['product_sale']) / $item['product_price']) * 100;
                                } else {
                                    $sale = 0;
                                }
                                ?>
                                <div class="product__item">
                                    <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>">
                                        <img src="<?php echo $imagesURL ?>/product/<?php echo $item['product_image'] ?>"
                                             alt="<?php echo $category['category_name'] ?>" class="thumb">
                                    </a>
                                    <div class="product__info">
                                        <h3 class="product__info--title">
                                            <span class="product-brand"><?php echo $category['category_name'] ?></span>
                                            <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>"
                                               class="line-clamp break-all line-2">
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
                                            <a class="btn cart-btn"
                                               href="?mod=order&action=add&id=<?php echo $item['id_product'] ?>">
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
                </section>
            </div>
        </section>
    </main>

<?php
get_footer();
?>