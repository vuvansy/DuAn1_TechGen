<?php
get_header();
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

                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
                                    </td>

                                    <td class="detail-order">
                                        <a href="?mod=order&action=detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="cancel_check"><input name="cancel_check" type="checkbox"></label>
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
                                        Đã hủy
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