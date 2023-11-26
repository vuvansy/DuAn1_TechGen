<?php
get_header();
?>
<?php
    $detail_html = '';
    $total_detail = 0;
    foreach ($order_detail as $detail) {
        if(is_array($detail)) {
            extract($detail);
        }
        $total_detail += $order_detail_total;
        $image = (get_image_by_id_order($id_product))[0]['product_image'];
        $name = (get_name_by_id_order($id_product))[0]['product_name'];
        $detail_html .= '
             <tr class="list-item">
                <td class="image-order">
                    <img src="../public/images/product/'.$image.'" alt="">
                </td>
                <td class="name-order">'.$name.'</td>
                <td class="price-order">'.number_format(($order_detail_total / $order_detail_quantity), 0, '', '.').'</td>
                <td class="quantity-order">'.$order_detail_quantity.'</td>
                <td class="total-order">'.number_format($order_detail_total, 0, '', '.').'</td>
            </tr>
        ';
    }
?>

<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <section class="detail-container">

                <div class="detail-heading">
                    Chi tiết hóa đơn
                </div>

                <div class="detail-bar">

                    <a href="?mod=order&action=index" class="cancel-btn-wait">
                        Chờ xác nhận
                    </a>

                    <a href="?mod=order&action=confirmed" class="cancel-btn-confirm">
                        Đã xác nhận
                    </a>

                    <a href="?mod=order&action=transport" class="cancel-btn-now">
                        Đang vận chuyển
                    </a>

                    <a href="?mod=order&action=cancel" class="cancel-btn-cancel">
                        Đã hủy
                    </a>

                    <a href="?mod=order&action=success" class="cancel-btn-success">
                        Đã hoàn thành
                    </a>

                </div>

                <div class="container-content">

                    <div class="head">
                        <div class="inline">
                            <div class="icon">
                                <img src="./public/images/icon/border-all.svg" alt="">
                            </div>
                            <div class="heading">
                                Chi tiết hóa đơn
                            </div>
                        </div>
                    </div>

                    <table class="content-list">

                        <thead>
                            <tr class="content-bar">
                                <td class="image">Hình ảnh</td>
                                <td class="name">Sản phẩm</td>
                                <td class="price">Đơn giá</td>
                                <td class="quantity">Số lượng</td>
                                <td class="total">Thành tiền</td>
                            </tr>
                        </thead>

                        <tbody class="list-group">

                            <?=$detail_html?>

                            <tr class="title">
                                <td>
                                    Thông tin đơn hàng
                                </td>
                                <td></td>
                            </tr>

                            <tr class="information">
                                <td>
                                    <div class="left">
                                        <div class="id_order">
                                            Mã đơn hàng: IT<?=$order_information[0]['id_order']?>
                                        </div>
                                        <div class="user_order">
                                            Tên người đặt hàng: <?=$order_information[0]['order_name']?>
                                        </div>
                                        <div class="phone_order">
                                            Số điện thoại người đặt hàng: <?=$order_information[0]['order_phone']?>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="email_order">
                                            Email: <?=$order_information[0]['order_email']?>
                                        </div>
                                        <div class="address_order">
                                            Địa chỉ đặt hàng: <?=$order_information[0]['order_address']?>
                                        </div>
                                        <div class="data_order">
                                            Thời gian đặt hàng: <?=$order_information[0]['order_date']?>
                                        </div>
                                    </div>
                                </td>


                            </tr>

                            <tr class="total-bar">

                                <td class="text">Tổng tiền</td>

                                <td class="total"><?=number_format($total_detail, 0, '', '.')?></td>

                            </tr>



                        </tbody>

                    </table>

                </div>

            </section>
        </div>
    </div>
</main>

<?php
get_footer();
?>