<?php
//Khai báo khi làm việc với session
// session_start();
// ob_start();

//Làm việc với thời gian
// date_default_timezone_set("Asia/Ho_Chi_Minh");

/*
 * ---------------------------------------------------------
 * BASE URL
 * ---------------------------------------------------------
 * Cấu hình đường dẫn gốc của ứng dụng
 * Ví dụ: 
 * http://hocweb123.com đường dẫn chạy online 
 * http://localhost/yourproject.com đường dẫn dự án ở local
 * 
 */

$config['base_url'] = "http://localhost/TechGen/admin/";
//Modul mặc định
$config['default_module'] = 'home';
$config['default_controller'] = 'index';
$config['default_action'] = 'index';
