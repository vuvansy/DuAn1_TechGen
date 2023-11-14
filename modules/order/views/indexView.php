<?php
get_header();
?>

<main>
    <section class="cartShow">
        <div class="container">
            <div class="cartView__control">
                <a href="?mod=order&action=index" class="btn cart__cta">Giỏ hàng</a>
                <a href="?mod=order&action=cartview" class="btn cart__cta">Quản lí đơn hàng</a>
            </div>
            <div class="box-order-all">
                <div class="box-order-left">
                    <h3>Giỏ hàng của bạn</h3>
                    <table class="order-detail-table">
                        <thead class="order-detail-thead">
                            <tr>

                                <th class="th-order-detail-h">Hình ảnh</th>
                                <th class="th-order-detail-s">Sản phẩm</th>
                                <th class="th-order-detail-sl">Số lượng</th>
                                <th class="th-order-detail-g">Giá</th>
                                <th class="th-order-detail-t">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody class="order-detail-tbody">
                            <tr>

                                <td>
                                    <div class="order-detail-tbody-img">
                                        <img src="public/images/category/laptop.webp" alt="">
                                    </div>

                                </td>
                                <td>
                                    <div class="table-orders-detail">
                                        <div class="orders-detail">
                                            <p>IPhone 14 Pro Max 128GB VNA - Bảo hành 12 tháng</p>
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
                                <td><input type="number" name="soluong" id="" value="0" min="0" max="10"></td>
                                <td>22.000.000đ</td>
                                <td>22.000.000đ</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="box-order-right">
                    <h3>Thanh toán</h3>
                    <div class="right-detail new">
                        <p>Sản phẩm: <span>3</span></p>
                        <p>22.000.000đ</p>
                    </div>
                    <h4>Thông tin vận chuyển</h4>
                    <form action="" method="post">
                        <input class="input-1" type="text" placeholder="Họ và tên">
                        <div class="input-b">
                            <input class="input-1 input--1 " type="text" placeholder="Email">
                            <input class="input-1 input-2" type="number" placeholder="Số điện thoại">
                        </div>
                        <input class="input-1" type="text" placeholder="Địa chỉ">

                        <h4>Phương thức thanh toán</h4>
                        <div class="input-text">

                            <div class="option">
                                <div class="option-input">
                                    <input class="input-checkbox" type="checkbox" id="product_status"
                                        name="product_status">
                                    <div class="option-detail">
                                        <p>Thanh toán khi nhận hàng</p>
                                        <p>Miễn phí</p>
                                    </div>

                                </div>
                                <div class="option-input">
                                    <input class="input-checkbox" type="checkbox" id="special" name="special">
                                    <p>Thanh toán online</p>
                                </div>
                            </div>
                        </div>
                        <div class="right-detail new">
                            <p>Tổng cộng: </p>
                            <p>22.000.000đ</p>
                        </div>
                        <div class="button-bottom">
                            <input type="submit" value="Thanh toán">
                        </div>
                    </form>

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
get_footer();
?>