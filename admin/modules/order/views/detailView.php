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
                                    Chi tiết hóa đơn
                                </div>
                            </div>
                        </div>

                        <div class="content-list">

                            <div class="content-bar">
                                <div class="image">Hình ảnh</div>
                                <div class="name">Sản phẩm</div>
                                <div class="price">Đơn giá</div>
                                <div class="quantity">Số lượng</div>
                                <div class="total">Thành tiền</div>
                            </div>

                            <div class="list-group">

                                <div class="list-item">

                                    <div class="image">
                                        <img src="public/images/product/Iphone/iphone1.jpg" alt="">
                                    </div>
                                    <div class="name">IPhone 14 Pro Max</div>
                                    <div class="price">44.000.000đ</div>
                                    <div class="quantity">1</div>
                                    <div class="total">44.000.000đ</div>

                                </div>
                                <div class="list-item">

                                    <div class="image">
                                        <img src="public/images/product/Iphone/iphone1.jpg" alt="">
                                    </div>
                                    <div class="name">IPhone 14 Pro Max</div>
                                    <div class="price">44.000.000đ</div>
                                    <div class="quantity">1</div>
                                    <div class="total">44.000.000đ</div>

                                </div>
                                <div class="list-item">

                                    <div class="image">
                                        <img src="public/images/product/Iphone/iphone1.jpg" alt="">
                                    </div>
                                    <div class="name">IPhone 14 Pro Max</div>
                                    <div class="price">44.000.000đ</div>
                                    <div class="quantity">1</div>
                                    <div class="total">44.000.000đ</div>

                                </div>
                                <div class="list-item">

                                    <div class="image">
                                        <img src="public/images/product/Iphone/iphone1.jpg" alt="">
                                    </div>
                                    <div class="name">IPhone 14 Pro Max</div>
                                    <div class="price">44.000.000đ</div>
                                    <div class="quantity">1</div>
                                    <div class="total">44.000.000đ</div>

                                </div>
                                <div class="list-item">

                                    <div class="image">
                                        <img src="public/images/product/Iphone/iphone1.jpg" alt="">
                                    </div>
                                    <div class="name">IPhone 14 Pro Max</div>
                                    <div class="price">44.000.000đ</div>
                                    <div class="quantity">1</div>
                                    <div class="total">44.000.000đ</div>

                                </div>
                                <div class="list-item">

                                    <div class="image">
                                        <img src="public/images/product/Iphone/iphone1.jpg" alt="">
                                    </div>
                                    <div class="name">IPhone 14 Pro Max</div>
                                    <div class="price">44.000.000đ</div>
                                    <div class="quantity">1</div>
                                    <div class="total">44.000.000đ</div>

                                </div>
                                <div class="list-item">

                                    <div class="image">
                                        <img src="public/images/product/Iphone/iphone1.jpg" alt="">
                                    </div>
                                    <div class="name">IPhone 14 Pro Max</div>
                                    <div class="price">44.000.000đ</div>
                                    <div class="quantity">1</div>
                                    <div class="total">44.000.000đ</div>

                                </div>

                            </div>

                            <div class="total-bar">

                                <div class="text">Tổng tiền</div>

                                <div class="total">88.000.000đ</div>

                            </div>

                        </div>

                    </div>

                </section>
            </div>
        </div>
    </main>

<?php
get_footer();
?>