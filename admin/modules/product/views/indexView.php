<?php
get_header();
?>

<?php
$product_html = "";
$status = [
    0 => "Ẩn",
    1 => "Hiện",
];
foreach ($get_product as $item) {

    $id_cta = get_category_by_id($item["id_category"]);
    // show_array($id_cta);
    $product_html .= '  <tr class="list-item">
        <td>' . $item["id_product"] . '</td>
        <td>' . $item["product_name"] . '</td>
        <td>' . $item["product_quantity"] . '</td>
        <td>' . $item["product_price"] . '</td>
        <td>' . $item["product_sale"] . '</td>
        <td>' . $id_cta[0]["category_name"] . '</td>
        <td>' . $status[$item["product_status"]] . '</td>
        <td>
            <div class="table-icon">
                <a  href="?mod=product&action=edit&id=' . $item["id_product"] . '" > <img src="./public/images/icon/pencil-alt.svg" alt=""></a>
                <a onclick="return ale()" id="remove" href="?mod=product&action=delete&id=' . $item["id_product"] . '"> <img  src="./public/images/icon/delete.svg" alt=""></a>
            </div>
        </td>
    </tr>';
}
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <div class="product-heading">
                Danh sách hàng hóa
            </div>
            <?php 
                if(isset($_SESSION['masew'])){
                    echo $_SESSION['masew'];
                    unset($_SESSION['masew']);
                }
            ?>
            <div class="product-bar">
                <form action="" id="search-product" class="search-product" method="POST">
                    <div class="box-form-product">
                        <!-- input -->
                        <input type="text" name="box-search-product" id="box-search-product" class="search-product-input" value="" placeholder="Tên sản phẩm" />
                    </div>
                    <input type="submit" id="search-product-btn" name="search-product-btn" class="search-product-btn" value="Tìm kiếm">
                </form>
                <a href="?mod=product&action=index" class="product-btn-list">Danh sách</a>
                <a href="?mod=product&action=add" class="product-btn-add">Thêm mới</a>
            </div>
            <div class="box-container-product">
                <div class="container-product">
                    <div class="head">
                        <div class="inline">
                            <div class="icon">
                                <img src="./public/images/icon/border-all.svg" alt="">
                            </div>
                            <div class="heading">
                                Danh sách hàng hóa
                            </div>
                        </div>
                    </div>
                    <div class="list-bar">
                        <table class="list-table">
                            <tr class="list-desc">
                                <th class="msp">Mã Sản Phẩm</th>
                                <th class="tsp">Tên Sản Phẩm</th>
                                <th class="sl">Số Lượng</th>
                                <th class="dg">Đơn Giá</th>
                                <th class="gg">Giảm Giá</th>
                                <th class="lh">Loại Hàng</th>
                                <th class="tt">Trạng Thái</th>
                                <th class="tv">Tác Vụ</th>
                            </tr>
                            <?= $product_html ?>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<script>
    // var remove = document.getElementById("remove");
    // console.log(remove);
    // remove.onclick = function(e) {
    //     // e.preventDefault();
    //     // e.stopPropagation();
    //     alert("thêm thành công");
    // }
    // remove.addEventListener('click', function(event) {
    //     event.preventDefault();

    // });

    function ale() {
        if (confirm("bạn có muốn xóa không ?")){
            return true;
        }else{
            return false;
        }
    }
</script>
<?php
get_footer();
?>