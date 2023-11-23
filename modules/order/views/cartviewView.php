<?php
get_header();
$imagesURL = "public/images";
?>
<?php
if (isset($_SESSION['is_login'])) {
    $order_view = get_order_by_id_user(info_user(user_login(), 'id_user'));
    $order_html = '';
    if (empty($order_view)) {
        $order_html .= '<h1>bạn chưa có đơn hàng nào !</h1>';
    } else {
        $order_html = '
             <table>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>Hình thức thanh toán</th>
                    <th>Ngày đặt đơn hàng</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Hành động</th>
                </tr>
            <tbody id="dssp">
        ';
        $payOrder = [
            1 => 'Tiền mặt',
            2 => 'Trực tuyến'
        ];
        $status = [
            0 => 'chờ xác nhận',
            1 => 'đang vận chuyển',
            2 => 'đã hủy',
            3 => 'đã giao hàng',
        ];
        $canRemove = '';
        foreach ($order_view as $order_list) {
            if ($order_list['order_status'] == 4 || $order_list['order_status'] == 5) {
                continue;
            }
            if (($order_list['order_status'] == 3) || ($order_list['order_status'] == 2)) {
                $canRemove = '?mod=order&action=removeOrder&id=' . $order_list['id_order'];
            } else {
                $canRemove = '?mod=order&action=cannotRemove&id=' . $order_list['id_order'];
            }
            if ($order_list['order_status'] == 0) {
                $canCancel = '?mod=order&action=Cancel&id=' . $order_list['id_order'];
            } else {
                $canCancel = '?mod=order&action=cannotCancel&status=' . $order_list['order_status'];
            }
            $linkDetail = "?mod=order&action=orderDetail&keyOrder=" . $order_list['id_order'];
            $order_html .= '
             <tr>
                <td>IT' . $order_list['id_order'] . '</td>
                <td>' . $order_list['order_quantity'] . '</td>
                <td>' . number_format($order_list['order_total'], 0, ',', '.') . '</td>
                <td>' . $payOrder[$order_list['id_delivery']] . '</td>
                <td>' . $order_list['order_date'] . '</td>
                <td>' . $status[$order_list['order_status']] . '</td>
                <td>
                    <div class="bw">
                        <div class="left-tt">
                            <a style="color: blue;" href="' . $linkDetail . '">Chi tiết</a>
                        </div>
                        <div class="mid-tt">
                            <a href="' . $canCancel . '">Hủy</a>
                        </div>
                        <div class="right-tt">
                            <a style="color: red;" href="' . $canRemove . '">Xóa</a>
                        </div>
                    </div>
                </td>
            </tr>
        ';
        }
        $order_html .= '
            </tbody>
        </table>';
    }
} else {
    $order_html = '
            <h1>Bạn phải đăng nhập mới có thể quản lí đơn hàng</h1>
        ';
}
?>

<main>
    <section class="cartView">
        <div class="container">
            <div class="cartView__control">
                <a href="?mod=order&action=index" class="btn cart__cta">Giỏ hàng</a>
                <a href="?mod=order&action=cartview" class="btn cart__cta">Quản lí đơn hàng</a>
            </div>
            <h1>Quản lí đơn hàng</h1>
            <div class="box">
                <div class="box-left-0fnone">
                    <?= $order_html ?>
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
                </div>
            </section>
        </div>
    </section>
</main>

<?php
if (isset($_SESSION['alert_cannot_remove'])) {
    echo $_SESSION['alert_cannot_remove'];
    unset($_SESSION['alert_cannot_remove']);
}
?>

<?php
get_footer();
?>