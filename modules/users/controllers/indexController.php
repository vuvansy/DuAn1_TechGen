
<?php
function construct()
{
    //Dữ liệu chung, load đầu tiên
    load_model("index");
    load('lib', 'validation');
    load('lib', 'email');
}

function indexAction()
{
    load_view('index');
}

function regAction()
{
    global $error, $username, $email, $fullname, $phone, $password, $address, $confirm_pass;

    if (isset($_POST['btn-reg'])) {
        $error = array();

        //Kiểm tra Fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống họ tên";
        } else {
            if (!is_username($_POST['fullname'])) {
                $error['fullname'] = "Họ tên phải từ 6-32 kí tự và không có kí tự đặc biệt";
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
            if (!is_password($_POST['confirm_pass'])) {
                $error['confirm_pass'] = "Mật khẩu phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else if ($_POST['password'] != $_POST['confirm_pass']) {
                $error['confirm_pass'] = "Mật khẩu và xác nhận mật khẩu không khớp.";
            } else {
                $confirm_pass = md5($_POST['confirm_pass']);
            }
        }
        // echo $confirm_pass;

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
                $error["account"] = "Đăng ký thành công!";
                //Thông báo
                // redirect("?mod=users&action=index");
            } else {
                $error['account'] = "Email hoặc User đã tồn tại trên hệ thống";
            }
        }
    }
    load_view('reg');
}

function resetAction()
{
    load_view('reset');
}
function newPassAction()
{

    load_view('newPass');
}

function editPassAction()
{

    load_view('editPass');
}

function resetOkAction()
{

    load_view('resetOk');
}

function logoutAction()
{
}


function activeAction()
{
}

function updateAction()
{
    load_view('update');
}



?>
