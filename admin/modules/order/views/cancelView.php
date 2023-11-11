<?php
get_header();
?>
    <main>
        <div class="main-wrapper">
            <?php
            get_sidebar();
            ?>
            <div class="sidebar-right">
                <section class="cancel-container">

                    <div class="cancel-heading">
                        Danh sách đơn bị hủy
                    </div>

                    <div class="cancel-bar">

                        <a href="" class="cancel-btn-wait">
                            Chờ xác nhận
                        </a>

                        <a href="?mod=order&action=transport" class="cancel-btn-now">
                            Đang vận chuyển
                        </a>

                        <a href="" class="cancel-btn-cancel">
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
                                <div class="heading">
                                    Đơn bị hủy
                                </div>
                            </div>
                        </div>

                        <table class="content-list">

                            <thead>
                                <tr class="content-bar">
                                    <td class="hollow"></td>
                                    <td class="id">Mã đơn hàng</td>
                                    <td class="date">Ngày đặt hàng</td>
                                    <td class="quantity">Số lượng</td>
                                    <td class="total">Tổng tiền</td>
                                    <td class="status">Trạng thái</td>
                                    <td class="detail">Chi tiết</td>
                                </tr>
                            </thead>

                            <tbody class="list-group">

                                <tr class="list-item">

                                    <td class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                        </svg>
                                    </td>

                                    <td class="id">
                                        IT96281
                                    </td>

                                    <td class="date">
                                        03/11/2023
                                    </td>

                                    <td class="quantity">
                                        2
                                    </td>

                                    <td class="total">
                                        44.000.000đ
                                    </td>

                                    <td class="status">
                                        Đã hủy
                                    </td>

                                    <td class="detail">
                                        <a href="" >
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                        </svg>
                                    </td>

                                    <td class="id">
                                        IT96281
                                    </td>

                                    <td class="date">
                                        03/11/2023
                                    </td>

                                    <td class="quantity">
                                        2
                                    </td>

                                    <td class="total">
                                        44.000.000đ
                                    </td>

                                    <td class="status">
                                        Đã hủy
                                    </td>

                                    <td class="detail">
                                        <a href="" >
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                        </svg>
                                    </td>

                                    <td class="id">
                                        IT96281
                                    </td>

                                    <td class="date">
                                        03/11/2023
                                    </td>

                                    <td class="quantity">
                                        2
                                    </td>

                                    <td class="total">
                                        44.000.000đ
                                    </td>

                                    <td class="status">
                                        Đã hủy
                                    </td>

                                    <td class="detail">
                                        <a href="" >
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                        </svg>
                                    </td>

                                    <td class="id">
                                        IT96281
                                    </td>

                                    <td class="date">
                                        03/11/2023
                                    </td>

                                    <td class="quantity">
                                        2
                                    </td>

                                    <td class="total">
                                        44.000.000đ
                                    </td>

                                    <td class="status">
                                        Đã hủy
                                    </td>

                                    <td class="detail">
                                        <a href="" >
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                        </svg>
                                    </td>

                                    <td class="id">
                                        IT96281
                                    </td>

                                    <td class="date">
                                        03/11/2023
                                    </td>

                                    <td class="quantity">
                                        2
                                    </td>

                                    <td class="total">
                                        44.000.000đ
                                    </td>

                                    <td class="status">
                                        Đã hủy
                                    </td>

                                    <td class="detail">
                                        <a href="" >
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                        </svg>
                                    </td>

                                    <td class="id">
                                        IT96281
                                    </td>

                                    <td class="date">
                                        03/11/2023
                                    </td>

                                    <td class="quantity">
                                        2
                                    </td>

                                    <td class="total">
                                        44.000.000đ
                                    </td>

                                    <td class="status">
                                        Đã hủy
                                    </td>

                                    <td class="detail">
                                        <a href="" >
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                        </svg>
                                    </td>

                                    <td class="id">
                                        IT96281
                                    </td>

                                    <td class="date">
                                        03/11/2023
                                    </td>

                                    <td class="quantity">
                                        2
                                    </td>

                                    <td class="total">
                                        44.000.000đ
                                    </td>

                                    <td class="status">
                                        Đã hủy
                                    </td>

                                    <td class="detail">
                                        <a href="" >
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                        </svg>
                                    </td>

                                    <td class="id">
                                        IT96281
                                    </td>

                                    <td class="date">
                                        03/11/2023
                                    </td>

                                    <td class="quantity">
                                        2
                                    </td>

                                    <td class="total">
                                        44.000.000đ
                                    </td>

                                    <td class="status">
                                        Đã hủy
                                    </td>

                                    <td class="detail">
                                        <a href="" >
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                        </svg>
                                    </td>

                                    <td class="id">
                                        IT96281
                                    </td>

                                    <td class="date">
                                        03/11/2023
                                    </td>

                                    <td class="quantity">
                                        2
                                    </td>

                                    <td class="total">
                                        44.000.000đ
                                    </td>

                                    <td class="status">
                                        Đã hủy
                                    </td>

                                    <td class="detail">
                                        <a href="" >
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>


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