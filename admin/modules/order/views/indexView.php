<?php
get_header();
?>
<main>
    <div class="main-wrapper">
        <?php
        get_sidebar();
        ?>
        <div class="sidebar-right">
            <section class="confirm_list-container">

                <div class="confirm_list-heading">
                    Danh sách chờ xác nhận
                </div>

                <div class="confirm_list-bar">

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
                            <div class="heading">
                                Danh sách khách hàng
                            </div>
                        </div>
                    </div>

                    <form action="">

                        <table class="content-list">

                            <thead>
                                <tr class="content-bar">
                                    <th></th>
                                    <th>Mã đơn hàng</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Cập nhật</th>
                                    <th>Chi tiết</th>
                                </tr>
                            </thead>

                            <tbody class="list-group">

                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="select-order">
                                            <input name="select-order" type="checkbox">
                                        </label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        Chờ xác nhận
                                    </td>

                                    <td class="update-order">
                                        <a href="?mod=order&action=confirm_update" class="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_648_856)">
                                                    <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_648_856">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?mod=order&action=detail" class="detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="select-order">
                                            <input name="select-order" type="checkbox">
                                        </label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        Chờ xác nhận
                                    </td>

                                    <td class="update-order">
                                        <a href="?mod=order&action=confirm_update" class="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_648_856)">
                                                    <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_648_856">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?mod=order&action=detail" class="detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="select-order">
                                            <input name="select-order" type="checkbox">
                                        </label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        Chờ xác nhận
                                    </td>

                                    <td class="update-order">
                                        <a href="?mod=order&action=confirm_update" class="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_648_856)">
                                                    <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_648_856">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?mod=order&action=detail" class="detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="select-order">
                                            <input name="select-order" type="checkbox">
                                        </label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        Chờ xác nhận
                                    </td>

                                    <td class="update-order">
                                        <a href="?mod=order&action=confirm_update" class="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_648_856)">
                                                    <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_648_856">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?mod=order&action=detail" class="detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="select-order">
                                            <input name="select-order" type="checkbox">
                                        </label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        Chờ xác nhận
                                    </td>

                                    <td class="update-order">
                                        <a href="?mod=order&action=confirm_update" class="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_648_856)">
                                                    <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_648_856">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?mod=order&action=detail" class="detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="select-order">
                                            <input name="select-order" type="checkbox">
                                        </label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        Chờ xác nhận
                                    </td>

                                    <td class="update-order">
                                        <a href="?mod=order&action=confirm_update" class="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_648_856)">
                                                    <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_648_856">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?mod=order&action=detail" class="detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="select-order">
                                            <input name="select-order" type="checkbox">
                                        </label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        Chờ xác nhận
                                    </td>

                                    <td class="update-order">
                                        <a href="?mod=order&action=confirm_update" class="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_648_856)">
                                                    <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_648_856">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?mod=order&action=detail" class="detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="select-order">
                                            <input name="select-order" type="checkbox">
                                        </label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        Chờ xác nhận
                                    </td>

                                    <td class="update-order">
                                        <a href="?mod=order&action=confirm_update" class="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_648_856)">
                                                    <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_648_856">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?mod=order&action=detail" class="detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>
                                <tr class="list-item">

                                    <td class="icon-order">
                                        <label for="select-order">
                                            <input name="select-order" type="checkbox">
                                        </label>
                                    </td>

                                    <td class="id-order">
                                        IT96281
                                    </td>

                                    <td class="date-order">
                                        03/11/2023
                                    </td>

                                    <td class="quantity-order">
                                        2
                                    </td>

                                    <td class="total-order">
                                        44.000.000đ
                                    </td>

                                    <td class="status-order">
                                        Chờ xác nhận
                                    </td>

                                    <td class="update-order">
                                        <a href="?mod=order&action=confirm_update" class="update">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_648_856)">
                                                    <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_648_856">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </td>

                                    <td>
                                        <a href="?mod=order&action=detail" class="detail">
                                            Chi tiết
                                        </a>
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </form>


                </div>

            </section>
        </div>
    </div>
</main>

<?php
get_footer();
?>