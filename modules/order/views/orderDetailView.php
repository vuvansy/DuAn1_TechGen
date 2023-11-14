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

            <!-- chi tiết đơn hàng -->
            <div class="detail-orders">
                <h2>Chi tiết đơn hàng</h2>
                <table class="order-detail-table">
                    <thead class="order-detail-thead">
                        <tr>
                            <th class="th-order-detail-m">Mã đơn hàng</th>
                            <th class="th-order-detail-h">Hình ảnh</th>
                            <th class="th-order-detail-s">Sản phẩm</th>
                            <th class="th-order-detail-sl">Số lượng</th>
                            <th class="th-order-detail-g">Giá</th>
                            <th class="th-order-detail-t">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody class="order-detail-tbody">
                        <tr>
                            <td>IT123</td>
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
                            <td>2</td>
                            <td>22.000.000đ</td>
                            <td>22.000.000đ</td>
                        </tr>
                        <tr>
                            <td>IT123</td>
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
                            <td>2</td>
                            <td>22.000.000đ</td>
                            <td>22.000.000đ</td>
                        </tr>
                        <tr>
                            <td>IT123</td>
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
                            <td>2</td>
                            <td>22.000.000đ</td>
                            <td>22.000.000đ</td>
                        </tr>
                    </tbody>
                </table>
                <div class="toal-orders">
                    <p>Tổng tiền: 90.000.000đ</p>
                </div>
            </div>



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
        <!-- productRelated  -->

        </div>
    </section>
</main>

<?php
get_footer();
?>