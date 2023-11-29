<?php
get_header();
$imagesURL = "public/images";
?>
<?php
$detailHtml = '';
foreach ($detail as $item) {
    $product = get_product_by_id($item['id_product']);
    $detailHtml .= '
            <tr>
                <td>IT' . $item['id_order'] . '</td>
                <td class="table-orders-product">
                    <div class="order-detail-tbody-img">
                        <img src="public/images/product/' . $product['product_image'] . '" alt="">
                    </div>
                    <div class="table-orders-detail">
                        <div class="orders-detail">
                            <p>' . $product['product_name'] . '</p>
                        </div>
                        <div class="orders-color">
                            <p>Color: Depp purple</p>
                        </div>
                        <div class="orders-category">
                            <p>Dung lượng: 128G</p>
                        </div>
                        <div class="orders-button">
                            <a href="">Xóa</a>
                        </div>
                    </div>
                </td>
                <td>' . $item['order_detail_quantity'] . '</td>
                <td>' . number_format(($item['order_detail_total'] / $item['order_detail_quantity']), 0, '', '.') . '</td>
                <td>' . number_format($item['order_detail_total'], 0, '', '.') . '</td>
            </tr>
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

            <!-- chi tiết đơn hàng -->
            <div class="detail-orders">
                <h2>Chi tiết đơn hàng</h2>
                <table class="table-orders-detail-list">
                    <thead class="order-detail-thead-list">
                        <tr>
                            <th class="th-order-detail-m">Mã đơn hàng</th>
                            <th class="th-order-detail-s">Sản phẩm</th>
                            <th class="th-order-detail-sl">Số lượng</th>
                            <th class="th-order-detail-g">Giá</th>
                            <th class="th-order-detail-t">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody class="order-detail-tbody-list">
                        <?= $detailHtml ?>
                    </tbody>
                </table>
                <div class="toal-orders">
                    <p>Tổng tiền: <?= number_format($totalOrder, 0, '', '.') ?></p>
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
                                <a href="?mod=product&action=index&id=<?php echo $item['id_product'] ?>">
                                    <img src="<?php echo $imagesURL ?>/product/<?php echo $item['product_image'] ?>" alt="<?php echo $category['category_name'] ?>" class="thumb">
                                </a>
                                <div class="product__info">
                                    <h3 class="product__info--title">
                                        <span class="product-brand"><?php echo $category['category_name'] ?></span>
                                        <a href="?mod=product&action=index&id=<?php echo $item['id_product'] ?>" class="line-clamp break-all line-2">
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
                </div>
            </section>


        </div>
        <!-- productRelated  -->

        </div>
    </section>
</main>

<?php
get_footer();
?>