<?php
get_header();
$current_month = $_GET['month'] ?? intval(date('m'));
$current_year = $_GET['year'] ?? intval(date('Y'));
// echo order_customer($current_month);
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

                    <a href="?mod=statistical&action=index" class="btn-total">
                        Doanh thu
                    </a>

                    <a href="?mod=statistical&action=warning" class="btn-revenue">
                        Sản phẩm sắp hết
                    </a>

                </div>

                <div class="revenue_status">

                    <div class="inline">

                        <div class="order">
                            <div class="title">
                                Tổng Số Đơn Hàng
                            </div>
                            <div class="number">
                                <?php echo $num_row_order ?>
                            </div>
                        </div>

                        <div class="user">
                            <div class="title">
                                Tổng Số Khách Hàng
                            </div>
                            <div class="number">
                                <?php echo $num_rows_user ?>
                            </div>
                        </div>

                        <div class="product">
                            <div class="title">
                                Tổng Số Sản Phẩm
                            </div>
                            <div class="number">
                                <?php echo $num_row_product ?>
                            </div>
                        </div>

                        <div class="category">
                            <div class="title">
                                Tổng Số Loại Hàng
                            </div>
                            <div class="number">
                                <?php echo $num_row_category ?>
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

                            <div class="card-body">
                                <div>
                                    <canvas id="myChart"></canvas>
                                </div>
                                <script>
                                    const ctx = document.getElementById('myChart');

                                    new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],

                                            datasets: [{
                                                label: 'Doanh thu tháng',
                                                data: [
                                                    <?php
                                                    for ($i = 1; $i <= 12; $i++) {
                                                        echo bill_select_sum_by_month($i, $current_year) . ",";
                                                    }
                                                    ?>
                                                ],
                                                borderWidth: 1,
                                                backgroundColor: '#0000FF',
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script>
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
                            <div class="card-body">
                                <div>
                                    <canvas id="myChartMonth"></canvas>
                                </div>
                                <script>
                                    const ctxMonth = document.getElementById('myChartMonth');

                                    new Chart(ctxMonth, {
                                        type: 'bar',
                                        data: {
                                            labels: ['T1', 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],

                                            datasets: [{
                                                    label: 'ĐH Thành Công',
                                                    data: [
                                                        <?php
                                                        for ($i = 1; $i <= 12; $i++) {
                                                            echo order_success($i, $current_year) . ",";
                                                        }
                                                        ?>
                                                    ],
                                                    borderWidth: 1,
                                                    backgroundColor: '#008000',
                                                },
                                                {
                                                    label: 'ĐH Hủy',
                                                    data: [
                                                        <?php
                                                        for ($i = 1; $i <= 12; $i++) {
                                                            echo order_cancel($i, $current_year) . ",";
                                                        }
                                                        ?>
                                                    ],
                                                    borderWidth: 1,
                                                    backgroundColor: '#DC143C',
                                                },
                                                {
                                                    label: 'ĐH Đang Giao',
                                                    data: [
                                                        <?php
                                                        for ($i = 1; $i <= 12; $i++) {
                                                            echo order_transport($i, $current_year) . ",";
                                                        }
                                                        ?>
                                                    ],
                                                    borderWidth: 1,
                                                    backgroundColor: '#0000FF',
                                                }
                                            ]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script>
                            </div>

                        </div>

                    </div>

                    <div class="left">

                        <div class="head">
                            <div class="inline">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2L1 14C1 14.2652 1.10536 14.5196 1.29289 14.7071C1.48043 14.8946 1.73478 15 2 15H14C14.2652 15 14.5196 14.8946 14.7071 14.7071C14.8946 14.5196 15 14.2652 15 14V2C15 1.73478 14.8946 1.48043 14.7071 1.29289C14.5196 1.10536 14.2652 1 14 1ZM13 3V7H9V3H13ZM7 3V7H3V3H7ZM3 13V9H7V13H3ZM9 13V9H13V13H9Z" fill="black" />
                                    </svg>
                                </div>
                                <div class="text">
                                    Khách hàng mua nhiều
                                </div>
                            </div>
                        </div>

                        <div class="content">

                            <div class="card-body">
                                <div>
                                    <canvas id="myChartname"></canvas>
                                </div>
                                <script>
                                    const ctxname = document.getElementById('myChartname');

                                    new Chart(ctxname, {
                                        type: 'bar',
                                        data: {
                                            labels: ['T1', 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],

                                            datasets: [{
                                                label: 'Name khach hàng',
                                                data: [
                                                    <?php
                                                    for ($i = 1; $i <= 12; $i++) {
                                                        // echo order_customer($i, $current_year) . ",";
                                                        echo bill_select_sum_by_month($i, $current_year) . ",";
                                                    }
                                                    ?>
                                                ],
                                                borderWidth: 1,
                                                backgroundColor: '#0000FF',
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                </script>
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