<?php
get_header();
$imagesURL = "public/images";
?>

<?php
$cartHtm = '';
$key = 0;
$cartQuantity = 0;
$cartTotal = 0;
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    $cartHtm .= '
            <table class="order-detail-table">
                <thead class="order-detail-thead">
                    <tr>
                        <th class="th-order-detail-s">Sản phẩm</th>
                        <th class="th-order-detail-sl">Số lượng</th>
                        <th class="th-order-detail-g">Giá</th>
                        <th class="th-order-detail-t">Thành tiền</th>
                    </tr>
                </thead>
                <tbody class="order-detail-tbody">
        ';
    foreach ($_SESSION['cart'] as $item) {
        $cartQuantity += $item['count'];
        $cartTotal += $item['price'] * $item['count'];
        $cartHtm .= '
            <tr>
                <td class="order-detail-tbody-product">
                    <a href="?mod=product&cation=index&id='.$item['id'].'"><img src="public/images/product/' . $item['image'] . '" alt=""></a>
                    <div class="table-orders-detail">
                        <a href="?mod=product&cation=index&id='.$item['id'].'" class="orders-detail">' . $item['name'] . '</a>
                        <p class="orders-color">Color: Depp purple</p>
                        <p class="orders-category">Dung lượng: 128G</p>
                        <a href="?mod=order&action=remove&key=' . $key . '" class="orders-button" >Xóa</a>
                    </div>
                </td>
                <td class="update-order-count">
                    <a href="?mod=order&action=up&key=' . $key . '" class="count-down">+</a>
                    <div class="count">' . $item['count'] . '</div>
                    <a href="?mod=order&action=down&key=' . $key . '" class="count-up">-</a>
                </td>
                <td class="price-oder-number">' . number_format($item['price'], 0, ',', '.') . '</td>
                <td class="total-oder-number">' . number_format(($item['price'] * $item['count']), 0, ',', '.') . '</td>
            </tr>
        ';
        $key++;
    }
    $cartHtm .= '</tbody>
            </table>';
    $noti = '
        <script> 
            function validation() {    
                const name_delivery = document.getElementById("name_delivery");
                const email_delivery = document.getElementById("email_delivery");
                const phone_delivery = document.getElementById("phone_delivery");
                const address_delivery = document.getElementById("address_delivery");
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const phoneNumberRegex = /^[0-9]+$/;
                const addressRegex = /^\d+$/;
                const check = true;
                
                if(address_delivery.value === "") { 
                    return false;
                } else if(addressRegex.test(address_delivery.value)) { 
                    return false;
                } else if(address_delivery.value.length < 20) { 
                    return false;
                }
  
                if(name_delivery.value === "") { 
                    return false;
                } else if(name_delivery.value.length < 10) {
                    return false;
                }
                if(email_delivery.value === "") { 
                     return false;
                } else if(!emailRegex.test(email_delivery.value)) {
                    return false;
                }
                
                if(phone_delivery.value === "") {  
                    return false;
                } else if(phone_delivery.value.length !== 10) { 
                    return false;
                } else if(!phoneNumberRegex.test(phone_delivery.value)) {  
                    return false;
                }
           
                return true;  
            }
        </script>
    ';
} else {
    $cartHtm .= '
          <h1> Bạn chưa thêm sản phẩm nào vào giỏ hàng !</h1>  
    ';
    $noti = '
        <script> 
            function validation() {
                confirm("bạn không có sản phầm nào để thanh toán !");
                return false;
            }
        </script>
    ';
}
if (isset($_SESSION['is_login'])) {
    $actionForm = "?mod=order&action=pay";
} else {
    $actionForm = "?mod=users&action=index";
    $noti = '
        <script> 
            function validation() {
                if(confirm("bạn phải đăng nhập để thanh toán !")) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    ';
}

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
                        <?= $cartHtm ?>
                    </div>
                    <div class="box-order-right">
                        <h3>Thanh toán</h3>
                        <div class="right-detail new">
                            <p>Sản phẩm: <span><?= $cartQuantity ?></span></p>
                            <p><?= number_format($cartTotal, 0, ',', '.') ?></p>
                        </div>
                        <h4>Thông tin vận chuyển</h4>
                        <form action="<?= $actionForm ?>" method="POST">
                            <input class="input-1" name="name_delivery" id="name_delivery" type="text" value="<?php
                            if (isset($_SESSION['is_login'])) {
                                echo info_user(user_login(), 'fullname');
                            } else {
                                echo '';
                            }
                            ?>" placeholder="Họ và tên">
                            <span class="name_delivery-message"></span>
                            <div class="input-b">
                                <input class="input-1 input--1" name="email_delivery" id="email_delivery" type="text" value="<?php
                                if (isset($_SESSION['is_login'])) {
                                    echo info_user(user_login(), 'email');
                                } else {
                                    echo '';
                                }
                                ?>" placeholder="Email">
                                <span class="email_delivery-message"></span>
                                <input class="input-1 input-2" name="phone_delivery" id="phone_delivery" type="text" value="<?php
                                if (isset($_SESSION['is_login'])) {
                                    echo info_user(user_login(), 'phone');
                                } else {
                                    echo '';
                                }
                                ?>" placeholder="Số điện thoại">
                                <span class="phone_delivery-message"></span>
                            </div>
                            <input class="input-1" name="address_delivery" id="address_delivery" value="<?php
                            if (isset($_SESSION['is_login'])) {
                                echo info_user(user_login(), 'address');
                            } else {
                                echo '';
                            }
                            ?>" type="text" placeholder="Địa chỉ">
                            <span class="address_delivery-message"></span>

                            <h4>Phương thức thanh toán</h4>
                            <div class="input-text">
                                <div class="option">
                                    <div class="option-input">
                                        <input value="1" class="input-checkbox" name="delivery-order" type="radio"
                                               checked id="product_status" name="product_status">
                                        <div class="option-detail">
                                            <p>Thanh toán khi nhận hàng</p>
                                            <p>Miễn phí</p>
                                        </div>

                                    </div>
                                    <div class="option-input">
                                        <input value="2" class="input-checkbox" name="delivery-order" type="radio"
                                               id="special" name="special">
                                        <p>Thanh toán online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right-detail new">
                                <p>Tổng cộng: </p>
                                <p><?= number_format($cartTotal, 0, ',', '.') ?></p>
                                <input type="hidden" name="order_total" value="<?= $cartTotal ?>">
                                <input type="hidden" name="order_quantity" value="<?= $cartQuantity ?>">
                            </div>
                            <div class="button-bottom">
                                <input onclick="return validation();" type="submit" value="Thanh toán">
                            </div>
                        </form>

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
                                    <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>">
                                        <img src="<?php echo $imagesURL ?>/product/<?php echo $item['product_image'] ?>"
                                             alt="<?php echo $category['category_name'] ?>" class="thumb">
                                    </a>
                                    <div class="product__info">
                                        <h3 class="product__info--title">
                                            <span class="product-brand"><?php echo $category['category_name'] ?></span>
                                            <a href="?mod=product&cation=index&id=<?php echo $item['id_product'] ?>"
                                               class="line-clamp break-all line-2">
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
                                            <a class="btn cart-btn"
                                               href="?mod=order&action=add&id=<?php echo $item['id_product'] ?>">
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
        </section>
    </main>

    <?=$noti?>

    <script>
        (function validate() {
            const name_delivery = document.getElementById("name_delivery");
            const name_error = document.querySelector(".name_delivery-message");

            if(name_delivery.value === "") {
                name_delivery.style.outline = "1px solid red";
                name_error.textContent = "Bạn phải nhập họ và tên để đặt hàng !";
            } else if(name_delivery.value.length < 10) {
                name_delivery.style.outline = "1px solid red";
                name_error.textContent = "Họ và tên người đặt hàng ít nhất 10 kí tự !";
            }

            name_delivery.onblur= function() {
                if(name_delivery.value === "") {
                    name_delivery.style.outline = "1px solid red";
                    name_error.textContent = "Bạn phải nhập họ và tên để đặt hàng !";
                } else if(name_delivery.value.length < 10) {
                    name_delivery.style.outline = "1px solid red";
                    name_error.textContent = "Họ và tên người đặt hàng ít nhất 10 kí tự !";
                }
            }

            name_delivery.onfocus = function() {
                name_delivery.style.outline = "1px solid #000";
                name_error.textContent = "";
            }

            const email_delivery = document.getElementById("email_delivery");
            const email_error = document.querySelector(".email_delivery-message");
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            email_delivery.onblur= function() {
                if(email_delivery.value === "") {
                    email_delivery.style.outline = "1px solid red";
                    email_error.textContent = "Bạn phải nhập email để đặt hàng !";
                } else if(!emailRegex.test(email_delivery.value)) {
                    email_delivery.style.outline = "1px solid red";
                    email_error.textContent = "Bạn đã nhập email sai !";
                }
            };

            email_delivery.onfocus = function() {
                email_delivery.style.outline = "1px solid #000";
                email_error.textContent = "";
            }

            if(email_delivery.value === "") {
                email_delivery.style.outline = "1px solid red";
                email_error.textContent = "Bạn phải nhập email để đặt hàng !";
            } else if(!emailRegex.test(email_delivery.value)) {
                email_delivery.style.outline = "1px solid red";
                email_error.textContent = "Bạn đã nhập email sai !";
            }

            const phone_delivery = document.getElementById("phone_delivery");
            const phone_error = document.querySelector(".phone_delivery-message");
            const phoneNumberRegex = /^[0-9]+$/;

            if(phone_delivery.value === "") {
                phone_delivery.style.outline = "1px solid red";
                phone_error.textContent = "Bạn phải nhập số điện thoại !";
            } else if(phone_delivery.value.length !== 10) {
                phone_delivery.style.outline = "1px solid red";
                phone_error.textContent = "Số điện thoại gồm 10 số !";
            } else if(!phoneNumberRegex.test(phone_delivery.value)) {
                phone_delivery.style.outline = "1px solid red";
                phone_error.textContent = "Số điện thoại không gồm kí tự !";
            }

            phone_delivery.onblur= function() {
                if(phone_delivery.value === "") {
                    phone_delivery.style.outline = "1px solid red";
                    phone_error.textContent = "Bạn phải nhập số điện thoại !";
                } else if(phone_delivery.value.length !== 10) {
                    phone_delivery.style.outline = "1px solid red";
                    phone_error.textContent = "Số điện thoại gồm 10 số !";
                } else if(!phoneNumberRegex.test(phone_delivery.value)) {
                    phone_delivery.style.outline = "1px solid red";
                    phone_error.textContent = "Số điện thoại không gồm kí tự !";
                }
            }

            phone_delivery.onfocus= function() {
                phone_delivery.style.outline = "1px solid #000";
                phone_error.textContent = "";
            }

            const address_delivery = document.getElementById("address_delivery");
            const address_error = document.querySelector(".address_delivery-message");
            const addressRegex = /^\d+$/;

            if(address_delivery.value === "") {
                address_delivery.style.outline = "1px solid red";
                address_error.textContent = "Bạn phải nhập địa chỉ để đặt hàng !";
            } else if(addressRegex.test(address_delivery.value)) {
                address_delivery.style.outline = "1px solid red";
                address_error.textContent = "Địa chỉ đặt hàng phải là chuỗi kí tự !";
            } else if(address_delivery.value.length < 20) {
                address_delivery.style.outline = "1px solid red";
                address_error.textContent = "Địa chỉ đặt hàng ít nhất 20 kí tự !";
            }

            address_delivery.onblur= function() {
                if(address_delivery.value === "") {
                    address_delivery.style.outline = "1px solid red";
                    address_error.textContent = "Bạn phải nhập địa chỉ để đặt hàng !";
                } else if(address_delivery.value > 0) {
                    address_delivery.style.outline = "1px solid red";
                    address_error.textContent = "Địa chỉ đặt hàng phải là chuỗi kí tự !";
                } else if(address_delivery.value.length < 20) {
                    address_delivery.style.outline = "1px solid red";
                    address_error.textContent = "Địa chỉ đặt hàng ít nhất 20 kí tự !";
                }
            }

            address_delivery.onfocus= function() {
                address_delivery.style.outline = "1px solid #000";
                address_error.textContent = "";
            }

        })();
    </script>

<?php
get_footer();
?>