<?php
get_header();
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <section class="revenue-container">

                <div class="revenue-heading">
                    Thống kê doanh thu
                </div>

                <div class="revenue-bar">

                    <a href="?mod=home&action=index" class="btn-total">
                        Doanh thu
                    </a>

                    <a href="?mod=Statistical&action=warning" class="btn-revenue">
                        Sản phẩm sắp hết
                    </a>

                </div>

                <div class="revenue_status">

                    <div class="inline">

                        <div class="user">
                            <div class="title">
                                Tổng số khách hàng
                            </div>
                            <div class="number">
                                4
                            </div>
                        </div>

                        <div class="product">
                            <div class="title">
                                Tổng số sản phẩm
                            </div>
                            <div class="number">
                                4
                            </div>
                        </div>

                        <div class="order">
                            <div class="title">
                                Tổng số đơn hàng
                            </div>
                            <div class="number">
                                4
                            </div>
                        </div>

                        <div class="category">
                            <div class="title">
                                Tổng số sản phẩm
                            </div>
                            <div class="number">
                                4
                            </div>
                        </div>

                    </div>

                </div>

                <div class="revenue_chart">

                    <div class="left">

                        <div class="head">
                            <div class="inline">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2L1 14C1 14.2652 1.10536 14.5196 1.29289 14.7071C1.48043 14.8946 1.73478 15 2 15H14C14.2652 15 14.5196 14.8946 14.7071 14.7071C14.8946 14.5196 15 14.2652 15 14V2C15 1.73478 14.8946 1.48043 14.7071 1.29289C14.5196 1.10536 14.2652 1 14 1ZM13 3V7H9V3H13ZM7 3V7H3V3H7ZM3 13V9H7V13H3ZM9 13V9H13V13H9Z" fill="black" />
                                    </svg>
                                </div>
                                <div class="text">
                                    Doanh thu theo tháng
                                </div>
                            </div>
                        </div>

                        <div class="content">

                            <div class="heading">
                                <div class="line"></div>
                                <div class="title">
                                    Doanh thu theo tháng
                                </div>
                            </div>

                            <div class="main-chart">

                                <div class="top">
                                    <div class="left-chart">
                                        <div class="price">
                                            40,000,000
                                        </div>
                                        <div class="price">
                                            35,000,000
                                        </div>
                                        <div class="price">
                                            30,000,000
                                        </div>
                                        <div class="price">
                                            25,000,000
                                        </div>
                                        <div class="price">
                                            20,000,000
                                        </div>
                                        <div class="price">
                                            15,000,000
                                        </div>
                                        <div class="price">
                                            10,000,000
                                        </div>
                                        <div class="price">
                                            5,000,000
                                        </div>
                                        <div class="price">
                                            0
                                        </div>
                                    </div>
                                    <div class="right-chart">

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                        <div class="month">
                                            <span class=""></span>
                                        </div>

                                    </div>
                                </div>

                                <div class="bottom">

                                    <div class="month">
                                        1
                                    </div>

                                    <div class="month">
                                        2
                                    </div>

                                    <div class="month">
                                        3
                                    </div>

                                    <div class="month">
                                        4
                                    </div>

                                    <div class="month">
                                        5
                                    </div>

                                    <div class="month">
                                        6
                                    </div>

                                    <div class="month">
                                        7
                                    </div>

                                    <div class="month">
                                        8
                                    </div>

                                    <div class="month">
                                        9
                                    </div>

                                    <div class="month">
                                        10
                                    </div>

                                    <div class="month">
                                        11
                                    </div>

                                    <div class="month">
                                        12
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="right">

                        <div class="head">
                            <div class="inline">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2L1 14C1 14.2652 1.10536 14.5196 1.29289 14.7071C1.48043 14.8946 1.73478 15 2 15H14C14.2652 15 14.5196 14.8946 14.7071 14.7071C14.8946 14.5196 15 14.2652 15 14V2C15 1.73478 14.8946 1.48043 14.7071 1.29289C14.5196 1.10536 14.2652 1 14 1ZM13 3V7H9V3H13ZM7 3V7H3V3H7ZM3 13V9H7V13H3ZM9 13V9H13V13H9Z" fill="black" />
                                    </svg>
                                </div>
                                <div class="text">
                                    Đơn hàng theo tháng
                                </div>
                            </div>
                        </div>

                        <div class="content">

                            <div class="heading">
                                <div class="head-left">
                                    <div class="line"></div>
                                    <div class="title">
                                        Đơn hàng thành công
                                    </div>
                                </div>
                                <div class="head-right">
                                    <div class="line"></div>
                                    <div class="title">
                                        Đơn hàng bị hủy
                                    </div>
                                </div>
                            </div>

                            <div class="main-chart">

                                <div class="top">
                                    <div class="left-chart">
                                        <div class="price">
                                            0.8
                                        </div>
                                        <div class="price">
                                            0.7
                                        </div>
                                        <div class="price">
                                            0.6
                                        </div>
                                        <div class="price">
                                            0.5
                                        </div>
                                        <div class="price">
                                            0.4
                                        </div>
                                        <div class="price">
                                            0.3
                                        </div>
                                        <div class="price">
                                            0.2
                                        </div>
                                        <div class="price">
                                            0.1
                                        </div>
                                        <div class="price">
                                            0
                                        </div>
                                    </div>
                                    <div class="right-chart">

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>

                                        <div class="month">
                                            <span class="success"></span>
                                            <span class="cancel"></span>
                                        </div>


                                    </div>
                                </div>

                                <div class="bottom">

                                    <div class="month">
                                        1
                                    </div>

                                    <div class="month">
                                        2
                                    </div>

                                    <div class="month">
                                        3
                                    </div>

                                    <div class="month">
                                        4
                                    </div>

                                    <div class="month">
                                        5
                                    </div>

                                    <div class="month">
                                        6
                                    </div>

                                    <div class="month">
                                        7
                                    </div>

                                    <div class="month">
                                        8
                                    </div>

                                    <div class="month">
                                        9
                                    </div>

                                    <div class="month">
                                        10
                                    </div>

                                    <div class="month">
                                        11
                                    </div>

                                    <div class="month">
                                        12
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
        </div>
    </div>
</main>

<?php
get_footer();
?>