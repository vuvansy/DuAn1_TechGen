<?php get_header();
$imagesURL = "public/images";
?>
<?php
if (isset($_SESSION['is_login'])) {
    $actionForm = '';
    $error_html = '';
    $id_user = info_user(user_login(), 'id_user');
    // echo  $id_user;
} else {
    $actionForm = '?mod=product&action=error&id=' . $id_product;
    // $load_error = 'Location: ?mod=product&cation=index&id= '. $id_product ;
    $id_user = 0;
    //var_dump($error);
    // $error_html = '';
    // if (isset($error)) {
    //     $error_html = 'Vui lòng đăng nhập !';

    // }
    // // header( $load_error );
}


$comment_list = get_comment_by_product_id($id_product);
$comment_html = '';
foreach ($comment_list as $comment) {
    $user_fullname = get_user_by_id_user($comment['id_user']);
    // $user_fullname = get_fullname_user_by_id_user($id_user);
    //show_array( $user_fullname);
    // var_dump($comment);
    $comment_html .= '
    <div class="comment-user">
    <div class="img-user"><img src="admin/public/images/user/' . info_user(user_login(), 'image') . '" alt=""></div> 
    <div class="info-user">
        <p><strong class="name">' . $user_fullname[0]['fullname'] . '</strong></p>
        <div class="conten-comment">
        ' . $comment['content'] . '
        </div>

    </div>
    </div>
    ';
}
$buyNow = '?mod=order&action=add&id=' . $id_product;
$addToCar = '?mod=order&action=addToCar&id=' . $id_product;

?>

<main>


    <div class="container">

        <div class="product-details">
            <!-- div hình ảnh -->
            <div class="product-image">

                <div id="wp-slider">
                    <div class="show-picture">
                        <img src="<?php echo $imagesURL ?>/product/<?php echo $product_id['product_image'] ?>?>" alt="">
                    </div>
                    <ul class="list-thumb">
                        <li class="thumb-item"><img src="<?php echo $imagesURL ?>/product/<?php echo $product_id['product_image'] ?>" alt=""></li>
                        <?php
                        foreach ($list_gallery as $item) {
                        ?>
                            <li class="thumb-item"><img src="<?php echo $imagesURL ?>/gallery/<?php echo $item['gallery_name'] ?>" alt=""></li>
                        <?php
                        }
                        ?>

                    </ul>
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
                        <?php echo $product_id['product_name']; ?>
                    </h2>
                    <p>Mã sản phẩm:
                        <?php echo $product_id['id_product']; ?> </p>
                    <p class="short-describe">
                        <?php echo $product_id['product_desc']; ?>
                    </p>
                </div>
                <!-- tên sp -->

                <!-- màu sắc -->
                <div class="product-color">
                    <p></p>
                    <!-- bảng màu -->
                    <div class="color-table">
                        <button class="color-cell"></button>
                        <button class="color-cell"></button>
                        <button class="color-cell"></button>
                        <button class="color-cell"></button>
                    </div>

                    <!-- bảng màu -->
                </div>
                <!-- màu sắc -->

                <!-- dụng lượng sản phẩm -->
                <div class="product-GB">
                    <p></p>
                    <div class="GB-table">
                        <button class="GB-cell"></button>
                        <button class="GB-cell"></button>
                        <button class="GB-cell"></button>
                        <button class="GB-cell"></button>
                    </div>
                </div>
                <!-- dụng lượng sản phẩm -->

                <!-- giá sp -->
                <div class="product-price">
                    <?php

                    if ($product_id['product_sale'] > 0) {
                        $sale = (($product_id['product_price'] - $product_id['product_sale']) / $product_id['product_price']) * 100;
                    } else {
                        $sale = 0;
                    }
                    ?>
                    <div class="cost">
                        <?php if ($sale == 0) :
                            $gia = $product_id['product_price'];
                        ?>
                            <p>
                                <?php echo currency_format($gia, 'đ'); ?>
                            </p>
                    </div>

                    <div class="sale">
                    <?php else :
                            $gia = $product_id['product_sale'];
                    ?>
                        <p class="sale">
                            <?php echo currency_format($gia, 'đ'); ?>
                        </p>
                        <span>
                            <?php echo currency_format($product_id['product_price'], 'đ'); ?>
                        </span>
                        <small>
                            <?php echo round($sale, 1); ?>%
                        </small>
                    <?php endif ?>
                    </div>
                </div>
                <!-- giá sp -->

                <!-- btn mua sp -->
                <div class="product-buy">
                    <a class="buybtn" href="<?= $buyNow ?>">Mua</a>
                    <a class="addbtn" href="<?= $addToCar ?>">Thêm vào giỏ hàng</a>
                </div>
                <!-- btn mua sp -->
            </div>
            <!-- thông tin sp -->
            <!-- div chứa thông tin sản phẩm -->
            <?php
            // } else {
            //     // Hiển thị thông báo nếu sản phẩm không tồn tại
            //     echo "Sản phẩm không tồn tại.";
            // }
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
                <?php echo $product_id['product_name']; ?>
            </h2>
            <p class="Content">
                <?php echo $product_id['product_content']; ?>
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
                    <?php echo $product_id['product_name']; ?>
                </h2>
            </div>
            <!-- indexView.php -->

            <form id="comment-form" method="POST" action="<?= $actionForm ?>">
                <h3>Bình luận</h3>
                <input type="text" name="content" id="comment-input" placeholder="Nhập bình luận của bạn">
                <input type="hidden" name="id_user_name" id="" value="<?= $id_user ?>">
                <input class="comment-form-submit" type="submit" name="comment-form-submit" value="Gửi">

                <span class="error">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>

                </span>

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
                    <?php
                    $product_new = get_product_new();
                    foreach ($product_new as $item) {
                        $category = get_category_by_id($item['id_category']);
                        if ($item['product_sale'] > 0) {
                            $sale = (($item['product_price'] - $item['product_sale']) / $item['product_price']) * 100;
                        } else {
                            $sale = 0;
                        }
                    ?>
                        <div class="product__item">
                            <a href="?mod=product&action=index&id=<?php echo $item['id_product'] ?>">
                                <img src="<?php echo $imagesURL ?>/product/<?php echo $item['product_image'] ?>" alt="<?php echo $category['category_name'] ?>" class="thumb">
                            </a>
                            <div class="product__info">
                                <h3 class="product__info--title">
                                    <span class="product-brand"><?php echo $category['category_name'] ?></span>
                                    <a href="?mod=product&action=index&id=<?php echo $item['id_product'] ?>" class="line-clamp break-all line-2">
                                        <?php echo $item['product_name'] ?>
                                    </a>
                                </h3>
                                <div class="product__info--foot">
                                    <div class="product__price">
                                        <?php if ($sale == 0) :
                                            $gia = $item['product_price'];
                                        ?>
                                            <span class="latest-price"><?php echo currency_format($gia, 'đ'); ?></span>
                                        <?php else :
                                            $gia = $item['product_sale'];
                                        ?>
                                            <span class="latest-price"><?php echo currency_format($gia, 'đ'); ?></span>
                                            <span class="price-and-discount">
                                                <label class="price-old"><?php echo currency_format($item['product_price'], 'đ'); ?></label>
                                                <small><?php echo round($sale, 1) ?>%</small>
                                            </span>
                                        <?php endif ?>
                                    </div>
                                    <a class="btn cart-btn" href="?mod=order&action=add&id=<?php echo $item['id_product'] ?>">
                                        Mua ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>

</main>

<?php
get_footer();
?>