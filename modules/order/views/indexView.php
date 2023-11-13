<?php
get_header();
?>

<main>
    <div class="button">
        <a href="?mod=order&action=index"><button class="button-1">Giỏ hàng</button></a>
        <a href="?mod=order&action=cartview"><button class="button-2">Quản lí đơn hàng</button></a>

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
    <h1 style="text-align: left">SẢN PHẨM LIÊN QUAN</h1>
    <div class="product">

        <div class="product-deal">
            <div class="box-product">
                <div class="img">
                    <a href=""><img src="public/images/category/iphone.webp" alt="TechGen" class="" /></a>


                </div>
                <div class="category">
                    <a href="">APPLE</a>


                </div>
                <div class="detail">
                    <a href="">IPhone 14 Pro Max - Chính hãng VN/A. Bảo hành 12 tháng.</a>

                </div>
                <div class="price">
                    <span>22.000.000đ</span>

                </div>
                <div class="price-sale">
                    <del>29.000.000đ</del>
                    <p>-10.01%</p>
                </div>
                <div class="button-shop">
                    <button class="button-shop-n">Mua ngay</button>
                </div>
            </div>
            <div class="box-product">
                <div class="img">
                    <a href=""><img src="public/images/category/iphone.webp" alt="TechGen" class="" /></a>


                </div>
                <div class="category">
                    <a href="">APPLE</a>


                </div>
                <div class="detail">
                    <a href="">IPhone 14 Pro Max - Chính hãng VN/A. Bảo hành 12 tháng.</a>

                </div>
                <div class="price">
                    <span>22.000.000đ</span>

                </div>
                <div class="price-sale">
                    <del>29.000.000đ</del>
                    <p>-10.01%</p>
                </div>
                <div class="button-shop">
                    <button class="button-shop-n">Mua ngay</button>
                </div>
            </div>
            <div class="box-product">
                <div class="img">
                    <a href=""><img src="public/images/category/iphone.webp" alt="TechGen" class="" /></a>


                </div>
                <div class="category">
                    <a href="">APPLE</a>


                </div>
                <div class="detail">
                    <a href="">IPhone 14 Pro Max - Chính hãng VN/A. Bảo hành 12 tháng.</a>

                </div>
                <div class="price">
                    <span>22.000.000đ</span>

                </div>
                <div class="price-sale">
                    <del>29.000.000đ</del>
                    <p>-10.01%</p>
                </div>
                <div class="button-shop">
                    <button class="button-shop-n">Mua ngay</button>
                </div>
            </div>
            <div class="box-product">
                <div class="img">
                    <a href=""><img src="public/images/category/iphone.webp" alt="TechGen" class="" /></a>


                </div>
                <div class="category">
                    <a href="">APPLE</a>


                </div>
                <div class="detail">
                    <a href="">IPhone 14 Pro Max - Chính hãng VN/A. Bảo hành 12 tháng.</a>

                </div>
                <div class="price">
                    <span>22.000.000đ</span>

                </div>
                <div class="price-sale">
                    <del>29.000.000đ</del>
                    <p>-10.01%</p>
                </div>
                <div class="button-shop">
                    <button class="button-shop-n">Mua ngay</button>
                </div>
            </div>
            <div class="box-product">
                <div class="img">
                    <a href=""><img src="public/images/category/iphone.webp" alt="TechGen" class="" /></a>


                </div>
                <div class="category">
                    <a href="">APPLE</a>


                </div>
                <div class="detail">
                    <a href="">IPhone 14 Pro Max - Chính hãng VN/A. Bảo hành 12 tháng.</a>

                </div>
                <div class="price">
                    <span>22.000.000đ</span>

                </div>
                <div class="price-sale">
                    <del>29.000.000đ</del>
                    <p>-10.01%</p>
                </div>
                <div class="button-shop">
                    <button class="button-shop-n">Mua ngay</button>
                </div>
            </div>


        </div>

    </div>



    </div>
</main>

<?php
get_footer();
?>