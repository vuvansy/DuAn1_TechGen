<?php
//  ====== REG ========

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


//Hàm kiểm tra tài khoản có tồn tại Tài khoản trên hệ thống hay chưa
function check_login($username, $password)
{
    $check_user = db_num_rows("SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'");
    if ($check_user > 0) {
        return true;
    } else {
        return false;
    }
}

// ====== UPDATE USER ======

//hàm Update User
function update_user($data, $id_user)
{
    return db_update('user', $data, "`id_user` = '{$id_user}'");
}


//Lấy thông tin username ra theo id_user
function  get_user_by_id($id_user)
{
    $item = db_fetch_row("SELECT *FROM `user` WHERE `id_user` = '{$id_user}'");
    if (!empty($item))
        return $item;
}

/// ======= RESET =========

//Check _email
function check_email($email)
{
    $check_email = db_num_rows("SELECT * FROM `USER` WHERE `email` = '$email'");
    if ($check_email > 0) {
        return true;
    } else {
        return false;
    }
}

//Hàm Cập nhật mã reset pass cho user cần khôi phục mật khẩu
function update_reset_token($data, $email)
{
    db_update('user', $data, "`email` = '{$email}'");
}

/// ======= NEW PASS =========

//Hàm Kiểm tra check_reset_token tồn tại chưa

function check_reset_token($reset_token)
{
    $check = db_num_rows("SELECT * FROM `user` WHERE `reset_token` = '$reset_token'");
    if ($check > 0) {
        return true;
    } else {
        return false;
    }
}

// Hàm update mật khẩu cho người quên mật khẩu
function update_pass($data, $reset_token)
{
    db_update('user', $data, "`reset_token` = '{$reset_token}'");
}
