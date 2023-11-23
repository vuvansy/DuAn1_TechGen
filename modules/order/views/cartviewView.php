<?php
get_header();
?>
<?php
    if(isset($_SESSION['is_login'])) {
        $order_view = get_order_by_id_user(info_user(user_login(), 'id_user'));
        $order_html = '';
        if(empty($order_view)) {
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
                if($order_list['order_status'] == 4 || $order_list['order_status'] == 5) {
                    continue;
                }
                if(($order_list['order_status'] == 3) || ($order_list['order_status'] == 2))  {
                    $canRemove = '?mod=order&action=removeOrder&id=' . $order_list['id_order'];
                } else {
                    $canRemove = '?mod=order&action=cannotRemove&id=' . $order_list['id_order'];
                }
                if($order_list['order_status'] == 0) {
                    $canCancel = '?mod=order&action=Cancel&id='.$order_list['id_order'];
                } else {
                    $canCancel = '?mod=order&action=cannotCancel&status=' . $order_list['order_status'];
                }
                $linkDetail ="?mod=order&action=orderDetail&keyOrder=" .$order_list['id_order'];
                $order_html .= '
             <tr>
                <td>IT'.$order_list['id_order'].'</td>
                <td>'.$order_list['order_quantity'].'</td>
                <td>'.number_format($order_list['order_total'], 0, ',', '.').'</td>
                <td>'.$payOrder[$order_list['id_delivery']].'</td>
                <td>'.$order_list['order_date'].'</td>
                <td>'.$status[$order_list['order_status']].'</td>
                <td>
                    <div class="bw">
                        <div class="left-tt">
                            <a style="color: blue;" href="'.$linkDetail.'">Chi tiết</a>
                        </div>
                        <div class="mid-tt">
                            <a href="'.$canCancel.'">Hủy</a>
                        </div>
                        <div class="right-tt">
                            <a style="color: red;" href="'.$canRemove.'">Xóa</a>
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
                    <?=$order_html?>
                </div>

            </div>
            <!-- productRelated  -->
            <section class="productRelated">
                <div class="productRelated__body">
                    <div class="productRelated__heading">
                        <h2 class="heading lv1">SẢN PHẨM LIÊN QUAN</h2>
                    </div>
                    <div class="product__list">
                        <!-- Product item 1  -->
                        <div class="product__item">
                            <a href="">
                                <img src="public/images/product/iphone/iphone14.webp" alt="" class="thumb">
                            </a>
                            <div class="product__info">
                                <h3 class="product__info--title">
                                    <span class="product-brand">Apple</span>
                                    <a href="!#" class="line-clamp break-all line-2">
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di
                                        động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
                                    </a>
                                </h3>
                                <div class="product__info--foot">
                                    <div class="product__price">
                                        <span class="latest-price">22.900.000đ</span>
                                        <span class="price-and-discount">
                                            <label class="price-old">29.900.000đ</label>
                                            <small>10.1%</small>
                                        </span>
                                    </div>
                                    <button class="btn cart-btn">
                                        Mua ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Product item 2  -->
                        <div class="product__item">
                            <a href="">
                                <img src="public/images/product/iphone/iphone14.webp" alt="" class="thumb">
                            </a>
                            <div class="product__info">
                                <h3 class="product__info--title">
                                    <span class="product-brand">Apple</span>
                                    <a href="!#" class="line-clamp break-all line-2">
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di
                                        động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
                                    </a>
                                </h3>
                                <div class="product__info--foot">
                                    <div class="product__price">
                                        <span class="latest-price">22.900.000đ</span>
                                        <span class="price-and-discount">
                                            <label class="price-old">29.900.000đ</label>
                                            <small>10.1%</small>
                                        </span>
                                    </div>
                                    <button class="btn cart-btn">
                                        Mua ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Product item 3  -->
                        <div class="product__item">
                            <a href="">
                                <img src="public/images/product/iphone/iphone14.webp" alt="" class="thumb">
                            </a>
                            <div class="product__info">
                                <h3 class="product__info--title">
                                    <span class="product-brand">Apple</span>
                                    <a href="!#" class="line-clamp break-all line-2">
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di
                                        động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
                                    </a>
                                </h3>
                                <div class="product__info--foot">
                                    <div class="product__price">
                                        <span class="latest-price">22.900.000đ</span>
                                        <span class="price-and-discount">
                                            <label class="price-old">29.900.000đ</label>
                                            <small>10.1%</small>
                                        </span>
                                    </div>
                                    <button class="btn cart-btn">
                                        Mua ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Product item 4  -->
                        <div class="product__item">
                            <a href="">
                                <img src="public/images/product/iphone/iphone14.webp" alt="" class="thumb">
                            </a>
                            <div class="product__info">
                                <h3 class="product__info--title">
                                    <span class="product-brand">Apple</span>
                                    <a href="!#" class="line-clamp break-all line-2">
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di
                                        động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
                                    </a>
                                </h3>
                                <div class="product__info--foot">
                                    <div class="product__price">
                                        <span class="latest-price">22.900.000đ</span>
                                        <span class="price-and-discount">
                                            <label class="price-old">29.900.000đ</label>
                                            <small>10.1%</small>
                                        </span>
                                    </div>
                                    <button class="btn cart-btn">
                                        Mua ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Product item 5  -->
                        <div class="product__item">
                            <a href="">
                                <img src="public/images/product/iphone/iphone14.webp" alt="" class="thumb">
                            </a>
                            <div class="product__info">
                                <h3 class="product__info--title">
                                    <span class="product-brand">Apple</span>
                                    <a href="!#" class="line-clamp break-all line-2">
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di
                                        động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
                                    </a>
                                </h3>
                                <div class="product__info--foot">
                                    <div class="product__price">
                                        <span class="latest-price">22.900.000đ</span>
                                        <span class="price-and-discount">
                                            <label class="price-old">29.900.000đ</label>
                                            <small>10.1%</small>
                                        </span>
                                    </div>
                                    <button class="btn cart-btn">
                                        Mua ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>

<?php
    if(isset($_SESSION['alert_cannot_remove'])) {
        echo $_SESSION['alert_cannot_remove'];
        unset($_SESSION['alert_cannot_remove']);
    }
?>

<?php
get_footer();
?>