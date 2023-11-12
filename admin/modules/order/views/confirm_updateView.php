<?php
get_header();
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

                        <a href="?mod=order&action=confirm_list" class="cancel-btn-wait">
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

                            <form class="list-group">

                                <div class="id">
                                    IT968280
                                </div>

                                <label class="status">
                                    <select name="status_order" id="">
                                        <option value="0">Chờ xác nhận</option>
                                        <option value="1">Đang vận chuyển</option>
                                        <option value="3">Đã hủy</option>
                                        <option value="4">Đã giao hàng</option>
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