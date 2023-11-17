<?php
get_header();
?>
<?php
$status = [
    [
        'status' => 'chờ xác nhận',
        'value' => 0
    ],
    [
        'status' => 'đang vận chuyển',
        'value' => 1
    ],
    [
        'status' => 'đã hủy',
        'value' => 2
    ],
    [
        'status' => 'đã giao hàng',
        'value' => 3
    ],
];
$newStatus = [];
$option_html = '';
$index = 0;
$newStatus = [];
while($index < count($status)) {
    if($order_update[0]['order_status'] == $index) {
        $option_html .= '
            <option value="'.$status[$index]['value'].'">'.$status[$index]['status'].'</option>
        ';
    } else {
        $newStatus[$index] = $status[$index];
    }
    $index++;
}
foreach ($newStatus as $item) {
    $option_html .= '
            <option value="'.$item['value'].'">'.$item['status'].'</option>
    ';
}
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <section class="confirm_update-container">

                <div class="confirm_update-heading">
                    Danh sách chờ xác nhận
                </div>

                <div class="confirm_update-bar">

                    <a href="?mod=order&action=index" class="cancel-btn-wait">
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
                        </div>
                    </div>

                    <div class="content-list">

                        <div class="content-bar">

                            <div class="id">Mã đơn hàng</div>

                            <div class="status">Trạng thái</div>

                        </div>

                        <form method="post" action="?mod=order&action=update_status&key=<?=$id?>" class="list-group">

                            <label>
                                <select class="id" name="id_order" disabled>
                                    <option value="id">IT<?=$order_update[0]['id_order']?></option>
                                </select>
                            </label>

                            <label class="status">
                                <select name="status_order" id="">
<!--                                    <option value="0">Chờ xác nhận</option>-->
<!--                                    <option value="1">Đang vận chuyển</option>-->
<!--                                    <option value="3">Đã hủy</option>-->
<!--                                    <option value="4">Đã giao hàng</option>-->
                                    <?=$option_html?>
                                </select>
                            </label>

                            <input type="submit" class="button_update" value="Cập nhật">

                        </form>

                    </div>

                </div>

            </section>
        </div>
    </div>
</main>

<?php
get_footer();
?>