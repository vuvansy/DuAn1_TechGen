<?php
get_header();
?>
<?php
$status = [
    0 => 'chờ xác nhận',
    1 => 'đã xác nhận',
    2 => 'đang vận chuyển',
    3 => 'đã hủy',
    4 => 'đã giao hàng',
    5 => 'đã hủy',
    6 => 'đã giao hàng',
];
$oder_cancel_html = '';
foreach ($orderListCancel as $value) {
    $detailLink = "?mod=order&action=detail&key=" . $value['id_order'] ;
    $oder_cancel_html .= '
        <tr class="list-item">

            <td class="icon-order">
                <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
            </td>

            <td class="id-order">
                IT'.$value['id_order'].'
            </td>

            <td class="date-order">
                '.$value['order_date'].'
            </td>

            <td class="quantity-order">
                '.$value['order_quantity'].'
            </td>

            <td class="total-order">
                '.number_format($value['order_total'], 0, '', '.').'
            </td>

            <td class="status-order">
                '.$status[$value['order_status']].'
            </td>

            <td class="detail-order">
                <a href="'.$detailLink.'">
                    Chi tiết
                </a>
            </td>

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
            <section class="cancel-container">

                <div class="cancel-heading">
                    Danh sách đơn bị hủy
                </div>

                <div class="cancel-bar">

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
                                Đơn bị hủy
                            </div>
                        </div>
                    </div>

                    <form action="">
                        <table class="content-list">

                            <thead>
                                <tr class="content-bar">
                                    <th></th>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Chi tiết</th>
                                </tr>
                            </thead>

                            <tbody class="list-group">

                            <?=$oder_cancel_html?>

<!--                                <tr class="list-item">-->
<!---->
<!--                                    <td class="icon-order">-->
<!--                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="id-order">-->
<!--                                        IT96281-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="date-order">-->
<!--                                        03/11/2023-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="quantity-order">-->
<!--                                        2-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="total-order">-->
<!--                                        44.000.000đ-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="status-order">-->
<!--                                        Đã hủy-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="detail-order">-->
<!--                                        <a href="?mod=order&action=detail">-->
<!--                                            Chi tiết-->
<!--                                        </a>-->
<!--                                    </td>-->
<!---->
<!--                                </tr>-->
<!--                                <tr class="list-item">-->
<!---->
<!--                                    <td class="icon-order">-->
<!--                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="id-order">-->
<!--                                        IT96281-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="date-order">-->
<!--                                        03/11/2023-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="quantity-order">-->
<!--                                        2-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="total-order">-->
<!--                                        44.000.000đ-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="status-order">-->
<!--                                        Đã hủy-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="detail-order">-->
<!--                                        <a href="?mod=order&action=detail">-->
<!--                                            Chi tiết-->
<!--                                        </a>-->
<!--                                    </td>-->
<!---->
<!--                                </tr>-->
<!--                                <tr class="list-item">-->
<!---->
<!--                                    <td class="icon-order">-->
<!--                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="id-order">-->
<!--                                        IT96281-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="date-order">-->
<!--                                        03/11/2023-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="quantity-order">-->
<!--                                        2-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="total-order">-->
<!--                                        44.000.000đ-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="status-order">-->
<!--                                        Đã hủy-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="detail-order">-->
<!--                                        <a href="?mod=order&action=detail">-->
<!--                                            Chi tiết-->
<!--                                        </a>-->
<!--                                    </td>-->
<!---->
<!--                                </tr>-->
<!--                                <tr class="list-item">-->
<!---->
<!--                                    <td class="icon-order">-->
<!--                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="id-order">-->
<!--                                        IT96281-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="date-order">-->
<!--                                        03/11/2023-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="quantity-order">-->
<!--                                        2-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="total-order">-->
<!--                                        44.000.000đ-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="status-order">-->
<!--                                        Đã hủy-->
<!--                                    </td>-->
<!---->
<!--                                    <td class="detail-order">-->
<!--                                        <a href="?mod=order&action=detail">-->
<!--                                            Chi tiết-->
<!--                                        </a>-->
<!--                                    </td>-->
<!---->
<!--                                </tr>-->

                            </tbody>

                        </table>
                    </form>

                </div>

            </section>
        </div>
    </div>
</main>

<?php
get_footer();
?>