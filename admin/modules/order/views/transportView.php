<?php
get_header();
//show_array($list_users);
?>

    <main class="layout-fullscreen">

        <section class="menu">

            <div class="heading">
                <a href="">danh mục</a>
            </div>

            <div class="list-group">

                <div class="list">
                    <a href="">loại hàng</a>
                </div>

                <div class="list">
                    <a href="">Hàng hóa</a>
                </div>

                <div class="list">
                    <a href="">khách hàng</a>
                </div>

                <div class="list">
                    <a href="">bình luận</a>
                </div>

                <div class="list">
                    <a href="">đơn hàng</a>
                </div>

                <div class="list">
                    <a href="">thống kê</a>
                </div>

            </div>

        </section>

        <section class="transport-container">

            <div class="transport-heading">
                Danh sách đang vận chuyển
            </div>

            <div class="transport-bar">

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
                        <div class="heading">
                            Đơn đang vận chuyển
                        </div>
                    </div>
                </div>

                <div class="content-list">

                    <div class="content-bar">
                        <div class=""></div>
                        <div class="id">Mã đơn hàng</div>
                        <div class="date">Ngày đặt hàng</div>
                        <div class="quantity">Số lượng</div>
                        <div class="total">Tổng tiền</div>
                        <div class="status">Trạng thái</div>
                        <div class="update">Cập nhật</div>
                        <div class="detail">Chi tiết</div>
                    </div>

                    <div class="list-group">

                        <div class="list-item">

                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                </svg>
                            </div>

                            <div class="id">
                                IT96281
                            </div>

                            <div class="date">
                                03/11/2023
                            </div>

                            <div class="quantity">
                                2
                            </div>

                            <div class="total">
                                44.000.000đ
                            </div>

                            <div class="status">
                                Đang vận chuyển
                            </div>

                            <div class="update">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_648_856)">
                                        <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_856">
                                            <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <a href="" class="detail">
                                Chi tiết
                            </a>

                        </div>
                        <div class="list-item">

                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                </svg>
                            </div>

                            <div class="id">
                                IT96281
                            </div>

                            <div class="date">
                                03/11/2023
                            </div>

                            <div class="quantity">
                                2
                            </div>

                            <div class="total">
                                44.000.000đ
                            </div>

                            <div class="status">
                                Đang vận chuyển
                            </div>

                            <div class="update">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_648_856)">
                                        <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_856">
                                            <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <a href="" class="detail">
                                Chi tiết
                            </a>

                        </div>
                        <div class="list-item">

                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                </svg>
                            </div>

                            <div class="id">
                                IT96281
                            </div>

                            <div class="date">
                                03/11/2023
                            </div>

                            <div class="quantity">
                                2
                            </div>

                            <div class="total">
                                44.000.000đ
                            </div>

                            <div class="status">
                                Đang vận chuyển
                            </div>

                            <div class="update">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_648_856)">
                                        <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_856">
                                            <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <a href="" class="detail">
                                Chi tiết
                            </a>

                        </div>
                        <div class="list-item">

                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                </svg>
                            </div>

                            <div class="id">
                                IT96281
                            </div>

                            <div class="date">
                                03/11/2023
                            </div>

                            <div class="quantity">
                                2
                            </div>

                            <div class="total">
                                44.000.000đ
                            </div>

                            <div class="status">
                                Đang vận chuyển
                            </div>

                            <div class="update">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_648_856)">
                                        <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_856">
                                            <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <a href="" class="detail">
                                Chi tiết
                            </a>

                        </div>
                        <div class="list-item">

                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                </svg>
                            </div>

                            <div class="id">
                                IT96281
                            </div>

                            <div class="date">
                                03/11/2023
                            </div>

                            <div class="quantity">
                                2
                            </div>

                            <div class="total">
                                44.000.000đ
                            </div>

                            <div class="status">
                                Đang vận chuyển
                            </div>

                            <div class="update">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_648_856)">
                                        <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_856">
                                            <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <a href="" class="detail">
                                Chi tiết
                            </a>

                        </div>
                        <div class="list-item">

                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14.6667 2H5.33333C4.59333 2 4 2.59333 4 3.33333V12.6667C4 13.0203 4.14048 13.3594 4.39052 13.6095C4.64057 13.8595 4.97971 14 5.33333 14H14.6667C15.0203 14 15.3594 13.8595 15.6095 13.6095C15.8595 13.3594 16 13.0203 16 12.6667V3.33333C16 2.59333 15.4 2 14.6667 2ZM14.6667 3.33333V12.6667H5.33333V3.33333H14.6667Z" fill="black"/>
                                </svg>
                            </div>

                            <div class="id">
                                IT96281
                            </div>

                            <div class="date">
                                03/11/2023
                            </div>

                            <div class="quantity">
                                2
                            </div>

                            <div class="total">
                                44.000.000đ
                            </div>

                            <div class="status">
                                Đang vận chuyển
                            </div>

                            <div class="update">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <g clip-path="url(#clip0_648_856)">
                                        <path d="M15.5596 4.44023L14.119 5.88086C13.9721 6.02773 13.7346 6.02773 13.5877 5.88086L10.119 2.41211C9.97211 2.26523 9.97211 2.02773 10.119 1.88086L11.5596 0.440234C12.144 -0.144141 13.094 -0.144141 13.6815 0.440234L15.5596 2.31836C16.1471 2.90273 16.1471 3.85273 15.5596 4.44023ZM8.88149 3.11836L0.675236 11.3246L0.0127361 15.1215C-0.0778889 15.634 0.368986 16.0777 0.881486 15.9902L4.67836 15.3246L12.8846 7.11836C13.0315 6.97148 13.0315 6.73398 12.8846 6.58711L9.41586 3.11836C9.26586 2.97148 9.02836 2.97148 8.88149 3.11836ZM3.87836 10.6215C3.70649 10.4496 3.70649 10.1746 3.87836 10.0027L8.69086 5.19023C8.86274 5.01836 9.13774 5.01836 9.30961 5.19023C9.48149 5.36211 9.48149 5.63711 9.30961 5.80898L4.49711 10.6215C4.32524 10.7934 4.05024 10.7934 3.87836 10.6215ZM2.75024 13.2496H4.25024V14.384L2.23461 14.7371L1.26274 13.7652L1.61586 11.7496H2.75024V13.2496Z" fill="#FD475A"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_648_856">
                                            <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <a href="" class="detail">
                                Chi tiết
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


<?php
get_footer();
?>