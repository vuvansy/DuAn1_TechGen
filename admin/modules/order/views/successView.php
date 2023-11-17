<?php
get_header();
?>
<?php
$status = [
    0 => 'chờ xác nhận',
    1 => 'đang vận chuyển',
    2 => 'đã hủy',
    3 => 'đã giao hàng',
];
$oder_success_html = '';
foreach ($orderListSuccess as $value) {
    $detailLink = "?mod=order&action=detail&key=" . $value['id_order'] ;
    $oder_success_html .= '
        <tr class="list-item">

            <td class="icon-order">
                <label for="successs_check"><input name="successs_check" type="checkbox"></label>
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
            <section class="success-container">

                <div class="success-heading">
                    Danh sách đơn hoàn thành
                </div>

                <div class="success-bar">

                    <a href="?mod=order&action=index" class="cancel-btn-wait">
                        Chờ xác nhận
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
                                Đơn đã hoàn thành
                            </div>
                        </div>
                    </div>

                    <form action="">
                        <table class="content-list">
                            <thead>
                                <tr class="content-bar">
                                    <td></td>
                                    <td>Mã đơn hàng</td>
                                    <td>Ngày đặt hàng</td>
                                    <td>Số lượng</td>
                                    <td>Tổng tiền</td>
                                    <td>Trạng thái</td>
                                    <td>Chi tiết</td>
                                </tr>
                            </thead>
                            <tbody class="list-group">
                                <?=$oder_success_html?>
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