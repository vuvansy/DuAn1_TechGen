
<?php
function construct()
{
    //Dữ liệu chung, load đầu tiên
    load_model("index");
    load('lib', 'validation');
    load('lib', 'email');
}

//Xử lý User đăng nhập vào Website
function loginAction()
{
    global $error, $username, $password;
    //Lấy Về id_User
    $id_user = info_user(user_login(), 'id_user');
    //Lấy thông tin của User theo id trả về Value form
    $info_user_by_id = get_user_by_id($id_user);

    if (isset($_POST['btn-login'])) {
        $error = array();

        //Kiểm tra Username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập";
        } else {
            if (!is_username($_POST["username"])) {
                $error["username"] = "Tên đăng nhập phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $username = $_POST["username"];
            }
        }

        //Kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống tên Password";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $password = md5($_POST['password']);
            }
        }

        //Kết luận
        if (empty($error)) {
            //Nhớ đăng nhập 
            if (isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600);
                setcookie('user_login', $username);
            }
            if (check_login($username, $password)) {
                //Lưu trữ phiên đăng nhập lên SESSION
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;

                // show_array($_SESSION);
                $error['account'] = "Đăng nhập thành công";

                //Xử lý chuyển hướng vào trong hệ thống
                header("refresh: 1; url=?mod=home&action=index");
            } else {
                $error['account'] = "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.";
            }
        }
    }
    $data['info_user_by_id'] = $info_user_by_id;
    load_view('login', $data);
}

//Xử lý đăng ký tài khoản cho User
function regAction()
{
    global $error, $username, $email, $fullname, $phone, $password, $address, $new_image, $confirm_pass;

    if (isset($_POST['btn-reg'])) {
        $error = array();

        //Kiểm tra Fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ tên";
        } else {
            if (!is_fullname($_POST['fullname'])) {
                $error['fullname'] = "Họ tên chỉ được chứa chữ cái, khoảng trắng!";
            } else {
                $fullname = $_POST['fullname'];
            }
        }

        //Kiểm tra Username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập";
        } else {
            if (!is_username($_POST["username"])) {
                $error["username"] = "Tên đăng nhập phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $username = $_POST["username"];
            }
        }

        //Kiểm tra Email
        if (empty($_POST["email"])) {
            $error["email"] = "Không được để trống email";
        } else {
            if (!is_email($_POST["email"])) {
                $error["email"] = "Email không đúng định dạng";
            } else {
                $email = $_POST["email"];
            }
        }

        //Kiểm tra Phone
        if (empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống Số điện thoại";
        } else {
            if (!is_phone()) {
                $error['phone'] = "Số điện thoại không đúng định dạng và phải bao gồm 10 số";
            } else {
                $phone = $_POST['phone'];
            }
        }

        //Địa chỉ 
        if (empty($_POST['address'])) {
            $error["address"] = "Không được để trống địa chỉ";
        } else {
            $address = $_POST["address"];
        }

        //Kiểm tra password 1
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống tên Password";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $password = md5($_POST['password']);
            }
        }

        //Kiểm tra confirm_pass
        if (empty($_POST['confirm_pass'])) {
            $error['confirm_pass'] = "Không được để trống tên Password";
        } else {
            if (!is_confirm_pass($_POST['confirm_pass'])) {
                $error['confirm_pass'] = "Mật khẩu phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else if ($_POST['password'] != $_POST['confirm_pass']) {
                $error['confirm_pass'] = "Mật khẩu và xác nhận mật khẩu không khớp.";
            } else {
                $confirm_pass = md5($_POST['confirm_pass']);
            }
        }

        #Kết luận
        #Dữ liệu gửi lên DATABASE
        if (empty($error)) {
            if (!user_exists($username, $email)) { //Kiểm tra dữ liệu trùng
                $data = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'email' => $email,
                    'phone' => $phone,
                    'address' => $address,
                    'password' => $password,
                );
                // show_array($data);
                add_user($data);
                $error["account"] = '<i class="fa-regular fa-circle-check"></i> Đăng ký thành công!';
            } else {
                $error['account'] = '<i class="fa-solid fa-triangle-exclamation"></i> Email hoặc User đã tồn tại trên hệ thống';
            }
        }
    }
    load_view('reg');
}

function updateAction()
{
    global $error, $username, $email, $fullname, $phone, $address, $image, $new_image;
    //Lấy Về id_User
    $id_user = info_user(user_login(), 'id_user');
    // echo $id_user;

    // $id_image = info_user(user_login(), 'image');
    // echo ($id_image);

    if (isset($_POST['btn-update'])) {
        $error = array();

        //Kiểm tra Fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ tên";
        } else {
            if (!is_fullname($_POST['fullname'])) {
                $error['fullname'] = "Họ tên chỉ được chứa chữ cái, khoảng trắng!";
            } else {
                $fullname = $_POST['fullname'];
            }
        }

        //Kiểm tra Username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập";
        } else {
            if (!is_username($_POST["username"])) {
                $error["username"] = "Tên đăng nhập phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $username = $_POST["username"];
            }
        }

        //Kiểm tra Email
        if (empty($_POST["email"])) {
            $error["email"] = "Không được để trống email";
        } else {
            if (!is_email($_POST["email"])) {
                $error["email"] = "Email không đúng định dạng";
            } else {
                $email = $_POST["email"];
            }
        }

        //Kiểm tra Phone
        if (empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống Số điện thoại";
        } else {
            if (!is_phone($_POST['phone'])) {
                $error['phone'] = "Số điện thoại không đúng định dạng";
            } else {
                $phone = $_POST['phone'];
            }
        }

        //Địa chỉ 
        if (empty($_POST['address'])) {
            $error["address"] = "Không được để trống địa chỉ";
        } else {
            $address = $_POST["address"];
        }

        //image User
        // echo var_dump($_POST['image']);

        //Xử lý images
        $save_image = save_file("new_image", "public/images/user/");
        // echo var_dump($_FILES['new_image']);
        $save_image ? $image = $save_image  : $image = $_POST['image'];

        #Kết luận
        #Dữ liệu gửi lên DATABASE
        if (empty($error)) {
            $data = array(
                'fullname' => $fullname,
                'username' => $username,
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
                'image' => $image,
            );
            // show_array($data);
            update_user($data, $id_user);
            $error["account"] = '<i class="fa-regular fa-circle-check"></i> Cập nhật tài khoản thành công!';
        } else {
            $error['account'] = '<i class="fa-solid fa-triangle-exclamation"></i> Cập nhật không thành công!';
        }
    }

    //Lấy thông tin của User theo id trả về Value form
    $info_user_by_id = get_user_by_id($id_user);
    // show_array($info_user_by_id);
    // echo info_user(is_login(), 'image');
    //Để đưa dữ liệu qua form view
    $data['info_user_by_id'] = $info_user_by_id;

    load_view('update', $data);
}


function editPassAction()
{
    global $error, $pass_old, $pass_new, $pass_confirm;
    //Lấy Về id_User
    $id_user = info_user(user_login(), 'id_user');
    //Lấy thông tin của User theo id trả về Value form
    $info_user_by_id = get_user_by_id($id_user);
    // echo $info_user_by_id['password'];
    // show_array($info_user_by_id);
    if (isset($_POST['btn-editPass'])) {
        $error = array();

        //Kiểm tra Pass_old
        if (empty($_POST['pass_old'])) {
            $error['pass_old'] = "Không được để trống tên Password";
        } else {
            if (!is_pass_old($_POST["pass_old"])) {
                $error['pass_old'] = "Mật khẩu phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $pass_old = md5($_POST['pass_old']);
            }
        }

        //Kiểm tra pass_new
        if (empty($_POST['pass_new'])) {
            $error['pass_new'] = "Không được để trống tên Password";
        } else {
            if (!is_pass_new($_POST["pass_new"])) {
                $error['pass_new'] = "Mật khẩu phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $pass_new = md5($_POST['pass_new']);
            }
        }

        // Kiểm tra pass_confirm
        if (empty($_POST['pass_confirm'])) {
            $error['pass_confirm'] = "Không được để trống tên Password";
        } else {
            if (!is_pass_confirm($_POST["pass_confirm"])) {
                $error['pass_confirm'] = "Mật khẩu phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $pass_confirm = md5($_POST['pass_confirm']);
            }
        }

        //Kết luận
        if (empty($error)) {
            if ($info_user_by_id['password'] != $pass_old) {
                $error['pass_old'] = "Mật khẩu cũ không đúng";
            } else {
                if ($pass_new != $pass_confirm) {
                    $error['pass_confirm'] = "Mật khẩu mới không khớp!";
                } else {
                    $data = array(
                        'password' => $pass_new,
                    );
                    //cập nhật
                    update_user($data, $id_user);
                    $error["account"] = '<i class="fa-regular fa-circle-check"></i> Đổi mật khẩu thành công!';
                    header("refresh: 1; url=?mod=home&action=index");
                }
            }
        }
    }


    $data['info_user_by_id'] = $info_user_by_id;
    load_view('editPass', $data);
}

function resetAction()
{
    global $error, $username, $fullname, $email;
    if (isset($_POST['btn-reset'])) {
        $error = array();

        //Kiểm tra Email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống tên Email";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Email nhập không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }

        //Kết Luận 
        if (empty($error)) {
            if (check_email($email)) {
                // echo "Email tồn tại trên hệ thống";
                //Tạo mã $reset_token
                $reset_token = md5($email . time());
                $data = array(
                    'reset_token' => $reset_token
                );
                //Cập nhật mã reset pass cho user cần khôi phục mật khẩu
                update_reset_token($data, $email);

                //Gửi link khoi phục vào email của người dùng
                $link = base_url("?mod=account&action=newpass&reset_token={$reset_token}");
                $content = "<p>Xin chào: $fullname</p>
                <p>Bạn vui lòng click vào link sau để thiết lập lại MK: {$link}</p>
                <p>Nếu không phải yêu cầu của bạn bạn vui lòng bỏ qua email này</p>";

                send_mail($email, "", 'Khôi phục mật khẩu của bạn', $content);
            } else {
                $error['account'] = "Email không tồn tại trên hệ thống";
            }
        }
    }
    load_view('reset');
}

function newPassAction()
{

    global $error, $username, $password;

    $reset_token = $_GET['reset_token'];
    if (!empty($reset_token)) {
        // echo $reset_token;
        //Kiểm tra $reset_token tồn tại hay chưa
        if (check_reset_token($reset_token)) {
            // echo "Hiển thị form";
            if (isset($_POST['btn-new-pass'])) {
                $error = array();

                //Kiểm tra password
                if (empty($_POST['password'])) {
                    $error['password'] = "Không được để trống tên Password";
                } else {
                    if (!is_password($_POST['password'])) {
                        $error['password'] = "Password nhập không đúng định dạng";
                    } else {
                        $password = md5($_POST['password']);
                    }
                }

                // Kiểm tra pass_confirm
                if (empty($_POST['pass_confirm'])) {
                    $error['pass_confirm'] = "Không được để trống tên Password";
                } else {
                    if (!is_pass_confirm($_POST["pass_confirm"])) {
                        $error['pass_confirm'] = "Mật khẩu phải từ 6-32 kí tự và không có kí tự đặc biệt";
                    } else {
                        $pass_confirm = md5($_POST['pass_confirm']);
                    }
                }

                //Kết luận
                if (empty($error)) {
                    if ($password != $pass_confirm) {
                        $error['pass_confirm'] = "Mật khẩu mới không khớp!";
                    } else {
                        $data = array(
                            'password' => $password
                        );
                        update_pass($data, $reset_token);
                        $error["account"] = '<i class="fa-regular fa-circle-check"></i> Đổi mật khẩu thành công!';
                        header("refresh: 1; url=?mod=account&action=resetOk");
                    }
                }
            }
            load_view('newPass');
        } else {
            echo "Yêu cầu lấy lại mật khẩu không hợp lệ";
        }
    }
}

function resetOkAction()
{

    load_view('resetOk');
}

function logoutAction()
{
    global $username;
    //COOKIE
    setcookie('is_login', true, time() - 3600);
    setcookie('user_login', $username, time() - 3600);

    //SESSION
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);

    redirect("?mod=account&action=index");
}


?>
