<?php
get_header();
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

                            <tr class="list-item">

                                <td class="image-order">
                                    <img src="public/images/product/Iphone/iphone1.jpg" alt="">
                                </td>
                                <td class="name-order">IPhone 14 Pro Max</td>
                                <td class="price-order">44.000.000đ</td>
                                <td class="quantity-order">1</td>
                                <td class="total-order">44.000.000đ</td>

                            </tr>

                            <tr class="total-bar">

                                <td class="text">Tổng tiền</td>

                                <td class="total">88.000.000đ</td>

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