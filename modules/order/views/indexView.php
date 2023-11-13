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
            <div class="box">
                <div class="box-left">
                    <h1>Giỏ hàng của bạn</h1>
                    <table class="tableStyle-2">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>

                        </tr>
                        <tbody id="dssp">
                            <tr>
                                <td>
                                    <div class="table-product">
                                        <div class="table-product-img">
                                            <img src="public/images/category/iphone.webp" alt="TechGen" class="" />
                                        </div>
                                        <div class="table-product-detail">
                                            <div class="product-detail">
                                                <p>IPhone 14 Pro Max 128GB VNA - Bảo hành 12 tháng</p>
                                            </div>
                                            <div class="product-color">
                                                <p>Color: Depp purple</p>

                                            </div>
                                            <div class="product-category">
                                                <p>Dung lượng: 128G</p>
                                            </div>
                                            <div class="product-button">
                                                <a href="">Xóa</a>
                                            </div>
                                        </div>
                                </td>
                                <td>1</td>
                                <td>22.000.000đ</td>
                                <td>22.000.000đ</td>


                            </tr>
                        </tbody>

                    </table>
                </div>
                <div class="box-right">
                    <h2>Thanh toán</h2>
                    <div class="right-detail">
                        <p>Sản phẩm: <span>3</span></p>
                        <p>22.000.000đ</p>
                    </div>
                    <h3>Thông tin vận chuyển</h3>
                    <form action="" method="get">
                        <input type="text" name="hovaten" placeholder="Họ và tên">
                        <div class="input-b">
                            <input class="input-1" name="email-" type="text" n placeholder="Email">
                            <input class="input-2" name="sdt" type="number" placeholder="Số điện thoại">
                        </div>
                        <input type="text" name="address" placeholder="Địa chỉ">


                    </form>


                    <h3>Phương thức thanh toán</h3>
                    <div class="pay-all">
                        <div class="pay">
                            <div class="pay-1">
                                <i class="fa-solid fa-record-vinyl"></i>
                                <p>Phương thức thanh toán</p>
                            </div>

                            <p>Miễn phí</p>
                        </div>
                        <div class="pay-2">
                            <i class="fa-solid fa-record-vinyl"></i>
                            <p>Thanh toán onilne</p>

                        </div>

                    </div>
                    <div class="right-detail new">
                        <p>Tổng cộng: </p>
                        <p>22.000.000đ</p>
                    </div>
                    <div class="button-bottom">
                        <a href="?mod=order&action=success"><button>Thanh toán</button></a>

                    </div>


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
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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
                                        Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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