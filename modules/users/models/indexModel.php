<?php
// Hàm Kiểm tra dữ liệu trùng
function user_exists($username, $email)
{
    $check_user = db_num_rows("SELECT * FROM `user` WHERE `email` = '$email' OR `username` = '{$username}'");
    if ($check_user > 0) {
        return true;
    } else {
        return false;
    }
}

//Thêm User vào Database
function add_user($data)
{
    return db_insert('user', $data);
}
