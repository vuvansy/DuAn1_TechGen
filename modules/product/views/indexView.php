<?php get_header();


?>

<?php
// $check = get_user_by_id_user($id_user);
// if($check as $comment) {

// }
if (isset($_SESSION['is_login'])) {
    $actionForm = '';
    $id_user = info_user(user_login(), 'id_user');
    // echo  $id_user;
} else {
    $id_user = 0;
    $actionForm = '?mod=users&action=index';

}

$comment_list = get_comment_by_product_id($id_product);
$comment_html = '';
foreach ($comment_list as $comment) {
    $user_fullname = get_user_by_id_user($id_user);
   // var_dump( $user_fullname);
    $comment_html .= '
    <div class="comment-user">
    <div class="img-user"><img src="public/images/logo/avt-user.png" alt=""></div>
    <div class="info-user">
        <p><strong class="name">'.$user_fullname[0]['fullname'].'</strong></p>
        <div class="conten-comment">
        '.$comment['content'].'
        </div>
    </div>
    </div>
    ';
}

$buyNow = '?mod=order&action=add&id='.$id_product;
$addToCar ='?mod=order&action=addToCar&id='.$id_product;

?>

<main>


    <div class="container">
        <div class="product-details">
            <?php
            $imagesURL = "public/images";
            // Lấy thông tin sản phẩm dựa trên ID sản phẩm từ tham số truyền vào
            $product_id = $_GET['id'];
            $selected_product = get_product_by_id($product_id);
            // Kiểm tra xem sản phẩm có tồn tại hay không
            if ($selected_product) {
                // Lấy thông tin danh mục của sản phẩm
                $category = get_category_by_id($selected_product['id_category']);
                // Tính toán phần trăm giảm giá (tương tự như trong vòng lặp)
                $sale = ($selected_product['product_sale'] > 0) ? (($selected_product['product_price'] - $selected_product['product_sale']) / $selected_product['product_price']) * 100 : 0;
                ?>
                <!-- div hình ảnh -->
                <div class="product-image">
                    <div class="img-main">
                        <img src="<?php echo $imagesURL ?>/product/<?php echo $selected_product['product_image'] ?>"
                            alt="anh">
                    </div>
                    <div class="img-extra">
                        <img src="public/images/product/Iphone/iphone1.jpg" alt="anh">
                        <img src="public/images/product/Iphone/iphone2.jpg" alt="anh">
                        <img src="public/images/product/Iphone/iphone3.jpg" alt="anh">
                        <img src="public/images/product/Iphone/iphone4.jpg" alt="anh">
                    </div>
                </div>
                <!-- div hình ảnh -->

                <!-- div chứa thông tin sản phẩm -->
                <div class="product-info">
                    <!-- sản phẩm chi tiết -->
                    <!-- <div class="nav-info-detail"> -->
                    <!-- thông tin sp -->
                    <!-- tên sp -->
                    <div class="product-name">
                        <h2>
                            <?php echo $selected_product['product_name']; ?>
                        </h2>
                        <p>Thương hiệu APPLE SKU | 220909018Mã vạch | 381525 </p>
                        <p class="short-describe">
                            <?php echo $selected_product['product_desc']; ?>
                        </p>
                    </div>
                    <!-- tên sp -->

                    <!-- màu sắc -->
                    <div class="product-color">
                        <p>MÀU SẮC: DEEP PURPLE</p>
                        <!-- bảng màu -->
                        <div class="color-table">
                            <button class="color-cell">Deep Purple</button>
                            <button class="color-cell">Gold</button>
                            <button class="color-cell">Silver</button>
                            <button class="color-cell">Space Black</button>
                        </div>

                        <!-- bảng màu -->
                    </div>
                    <!-- màu sắc -->

                    <!-- dụng lượng sản phẩm -->
                    <div class="product-GB">
                        <p>DUNG LƯỢNG (ROM): 256GB</p>
                        <div class="GB-table">
                            <button class="GB-cell">1TB</button>
                            <button class="GB-cell">512GB</button>
                            <button class="GB-cell">256GB</button>
                            <button class="GB-cell">128GB</button>
                        </div>
                    </div>
                    <!-- dụng lượng sản phẩm -->

                    <!-- giá sp -->
                    <div class="product-price">
                        <div class="cost">
                            <p>
                                <?php echo currency_format($selected_product['product_sale'], 'đ'); ?>
                            </p>
                        </div>
                        <div class="sale">
                            <p>
                                <?php echo currency_format($selected_product['product_price'], 'đ'); ?>
                            </p>
                            <small>
                                <?php echo round($sale, 1); ?>%
                            </small>
                        </div>
                    </div>
                    <!-- giá sp -->

                    <!-- btn mua sp -->
                    <div class="product-buy">
                        <a class="buybtn" href="<?=$buyNow?>">Mua</a>
                        <a class="addbtn" href="<?=$addToCar?>">Thêm vào giỏ hàng</a>
                    </div>
                    <!-- btn mua sp -->
                </div>
                <!-- thông tin sp -->
                <!-- div chứa thông tin sản phẩm -->
                <?php
            } else {
                // Hiển thị thông báo nếu sản phẩm không tồn tại
                echo "Sản phẩm không tồn tại.";
            }
            ?>


        </div>

        <!-- thông tố và phẩm phẩm kèm theo -->

        <div class="products-other">
            <div class="other-main">
                <div class="other-conten">
                    <h2>Sản phẩm mua kèm</h2>
                </div>
                <div class="other">
                    <div class="other-1">
                        <img src="public/images/product/Iphone/phonemian.jpg" alt="">
                        <p>APPLE</p>
                        <h5>IPhone 14 Pro Max - Chính hãng VN/A. Bảo hành 12 tháng</h5>
                    </div>
                    <div class="other-1">
                        <img src="public/images/product/Iphone/phonemian.jpg" alt="">
                        <p style="font-size: 11px; color: #4F4E4E;">APPLE</p>
                        <h5>IPhone 14 Pro Max - Chính hãng VN/A. Bảo hành 12 tháng</h5>
                    </div>
                    <div class="other-1">
                        <img src="public/images/product/Iphone/phonemian.jpg" alt="">
                        <p style="font-size: 11px; color: #4F4E4E;">APPLE</p>
                        <h5>IPhone 14 Pro Max - Chính hãng VN/A. Bảo hành 12 tháng</h5>
                    </div>
                </div>
            </div>

            <div class="parameter">
                <div class="parameter-conten">
                    <h2>Thông số kĩ thuật</h2>
                </div>
                <table>
                    <tr>
                        <td>Màn hình</td>
                        <td>6.7 inch, OLED, Super Retina XDR, 2796 x 1290 Pixels</td>
                    </tr>
                    <tr>
                        <td>Camera sau</td>
                        <td>48.0 MP + 12.0 MP + 12.0 MP</td>
                    </tr>
                    <tr>
                        <td>Camera Selfie</td>
                        <td>12.0 MP</td>
                    </tr>
                    <tr>
                        <td>RAM</td>
                        <td>6 GB</td>
                    </tr>
                    <tr>
                        <td>CPU</td>
                        <td>Apple A16 Bionic</td>
                    </tr>
                    <tr>
                        <td>GPU</td>
                        <td>Apple GPU 5 nhân</td>
                    </tr>
                </table>
                <div class="parameter-more">
                    <a href="">Xem chi tiết</a>
                </div>

            </div>
        </div>
        <!-- thông tố và phẩm phẩm kèm theo -->

        <!-- bài viết -->
        <div class="posts">
            <h2>
                <?php echo $selected_product['product_name']; ?>
            </h2>
            <p class="Content">
                <?php echo $selected_product['product_content']; ?>
            </p>
            <div class="posts-more">
                <button>Xem thêm</button>
            </div>
        </div>
        <!-- bài viết -->
        <!-- comment -->
        <div class="comment-full">
            <div class="comment-heading">
                <h2>Bình luận về:
                    <?php echo $selected_product['product_name']; ?>
                </h2>
            </div>
            <!-- indexView.php -->

            <form id="comment-form" method="POST" action="<?= $actionForm ?>">
                <h3>Bình luận</h3>
                <input type="text" name="content" id="comment-input" placeholder="Nhập bình luận của bạn">
                <input type="hidden" name="id_user_name" id="" value="<?= $id_user ?>">
                <input class="comment-form-submit" type="submit" name="comment-form-submit" value="Gửi">
            </form>
            <div id="comment-list">
                <?= $comment_html ?>
                <!-- <div class="comment-user">
                    <div class="img-user"><img src="public/images/logo/avt-user.png" alt=""></div>
                    <div class="info-user">
                        <p><strong class="name">khang</strong></p>
                        <div class="conten-comment">
                            Mình cần mua trả góp iphone14promax 256gb trả trước 30%
                        </div>
                    </div>
                </div> -->
                <!-- admin -->
                <!-- trả lời admin -->
                <!-- Danh sách các bình luận sẽ được hiển thị ở đây -->
                <!-- <div class="comment-user">
                    <div class="img-user"><img src="public/images/logo/avt-user.png" alt=""></div>
                    <div class="info-user">
                        <p><strong class="name">khang</strong></p>
                        <div class="conten-comment">
                            Mình cần mua trả góp iphone14promax 256gb trả trước 30%
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- productRelated  -->
        <section class="productRelated">
            <div class="productRelated__body">
                <div class="productRelated__heading">
                    <h2 class="heading lv1">SẢN PHẨM MỚI</h2>
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
                                    Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động
                                    iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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
                                    Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động
                                    iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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
                                    Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động
                                    iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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
                                    Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động
                                    iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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
                                    Điện thoại di động iPhone 14 Pro Max (128GB) - Chính hãng VN/A Điện thoại di động
                                    iPhone 14 Pro Max (128GB) - Chính hãng VN/A
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
</main>


<?php
get_footer();
?>