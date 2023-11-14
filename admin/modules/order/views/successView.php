<?php
get_header();
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

                    <a href="?mod=order&action=confirm_list" class="cancel-btn-wait">
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
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="successs_check"><input name="successs_check" type="checkbox"></label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        giao thành công
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
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


