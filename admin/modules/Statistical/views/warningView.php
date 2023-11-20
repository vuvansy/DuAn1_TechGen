<?php
get_header();
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <section class="warning-container">

                <div class="warning-heading">
                    Danh sách đơn bị hủy
                </div>

                <div class="warning-bar">

                    <a href="?mod=statistical&action=index" class="btn-total">
                        Doanh thu
                    </a>

                    <a href="?mod=statistical&action=warning" class="btn-revenue">
                        Sản phẩm sắp hết
                    </a>


                </div>

                <div class="container-content">

                    <div class="head">
                        <div class="inline">
                            <div class="icon">
                                <img src="./public/images/icon/border-all.svg" alt="">
                            </div>
                            <div class="heading">
                                Sản phẩm sắp hết
                            </div>
                        </div>
                    </div>

                    <table class="content-list">
                        <thead>
                            <tr>
                                <th>
                                    Hình ảnh
                                </th>
                                <th>
                                    Mã sản phẩm
                                </th>
                                <th>
                                    Tên sản phẩm
                                </th>
                                <th>
                                    Tồn kho
                                </th>
                                <th>
                                    Thêm
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($product_warning as $item) {
                            ?>
                                <tr>
                                    <td class="image-warning">
                                        <img src="../public/images/product/<?php echo $item['product_image'] ?>" alt="">
                                    </td>
                                    <td class="id-warning">
                                        <?php echo $item['id_product'] ?>
                                    </td>
                                    <td class="name-warning">
                                        <?php echo $item['product_name'] ?>
                                    </td>
                                    <td class="exists-warning">
                                        <?php echo $item['product_quantity'] ?>
                                    </td>
                                    <td class="add-warning">
                                        <a href="?mod=product&action=edit&id=<?php echo $item['id_product'] ?>">Thêm</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
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