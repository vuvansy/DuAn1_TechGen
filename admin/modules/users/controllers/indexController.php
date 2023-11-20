
<?php
function construct()
{
    // echo Dữ liệu chung, load đầu tiên
    load_model("index");
    load('lib', 'validation');
    load('lib', 'email');
}

function indexAction()
{
    if (isset($_POST['search-btn'])) {
        $value = strval($_POST['box-search-user']);
        $list_user = get_list_user($value);
    } else {
        $list_user = get_list_user();
    }
    $data = [
        'list_user' => $list_user,
    ];
    load_view('index', $data);
}
function deleteAction()
{
    $id_user = isset($_GET['id']) ? intval($_GET['id']) : "";
    if (check_roles($id_user)) {
        $data = [
            'message' => "Đây là admin. Không thể xoá!",
        ];
    } else {
        delete_user_by_id($id_user);
        $data = [
            'message' => "Thực hiện xoá thành công",
        ];
    }
    load_view("delete", $data);
}
function addAction()
{
    global $error, $notify, $fullname, $phone, $email, $address, $username, $password, $role, $active, $image, $finish, $failed;
    if (isset($_POST['add-user-btn'])) {
        $error = array();
        $notify = array();
        // Fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống trường này";
        } else {
            $fullname = $_POST['fullname'];
        }
        // Phone
        if (empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống trường này";
        } else {
        if (!is_phone($_POST['phone'])) {
            $error['phone'] = "Mật khẩu là số và bao gồm 10 số";
            } else {
                $phone = $_POST['phone'];
            }
        }
        // Email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống trường này";
        } else {
            if (!is_email()) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }
        // Address
        if (empty($_POST['address'])) {
            $error['address'] = "Không được để trống trường này";
        } else {
            $address = $_POST['address'];
        }
        // Username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống trường này";
        } else {
            if (!is_username()) {
                $error['username'] = "Tên đăng nhập phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $username = $_POST['username'];
            }
        }
        // Password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống trường này";
        } else {
            if (!is_password()) {
                $error['password'] = "Mật khẩu phải từ 6-32 kí tự và không có kí tự đặc biệt";
            } else {
                $password = $_POST['password'];
            }
        }
        // Role
        if (empty($_POST['roles'])) {
            $role = 0;
        } else {
            $role = $_POST['roles'];
        }
        // Active
        if (empty($_POST['active'])) {
            $error['active'] = "Không được để trống trường này";
        } else {
            $active = $_POST['active'];
        }
        // Image
        if (isset($_FILES['file'])) {
            $dir = "public/images/user/";
            $file_name = $dir . $_FILES['file']['name'];
            $image =  $_FILES['file']['full_path'];
            if (move_uploaded_file($_FILES['file']['tmp_name'], $file_name)) {
                $notify['file'] = "File đã được upload thành công";
            } else {
                $error['file'] = "File upload không thành công";
            }
        } else {
            $error['file'] = "Phải upload 1 file ảnh";
        }
        # Final
        if (empty($error)) {
            if (check_exsist($username, $email)) {
                $data = array(
                    'fullname' => $fullname,
                    'phone' => $phone,
                    'email' => $email,
                    'address' => $address,
                    'username' => $username,
                    'password' => $password,
                    'user_role' => $role,
                    'is_active' => $active,
                    'image' => $image
                );
                add_user($data);
                $finish = "Thêm mới người dùng thành công";
            } else {
                $error['account'] = "Tên đăng nhập hoặc email đã tồn tại trên hệ thống!";
            }
        } else {
            $failed = "Có lỗi trong khi thêm người dùng";
        }
    }
    $data['success'] = $finish;
    $data['failed'] = $failed;
    load_view('add', $data);
}

function editAction()
{
    $id_user = isset($_GET['id']) ? intval($_GET['id']) : "";
    $info_user = get_user_by_id($id_user);
    global $error, $notify, $fullname, $phone, $email, $address, $username, $password, $role, $active, $image, $finish, $failed;
    if (isset($_POST['edit-user-btn'])) {
        $error = array();
        $notify = array();
        // Fullname
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống trường này";
        } else {
            $fullname = $_POST['fullname'];
        }
        // Phone
        if (empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống trường này";
        } else {
            if (!is_phone($_POST['phone'])) {
            $error['phone'] = "Mật khẩu phải là số và bao gồm 10 số";
            } else {
                $phone = $_POST['phone'];
            }
        }
        // Email
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống trường này";
        } else {
            if (!is_email()) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $email = $_POST['email'];
            }
        }
        // Address
        if (empty($_POST['address'])) {
            $error['address'] = "Không được để trống trường này";
        } else {
            $address = $_POST['address'];
        }
        // Username
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống trường này";
        } else {
            if (!is_username()) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $username = $_POST['username'];
            }
        }
        // Password
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống trường này";
        } else {
            if (!is_password()) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $password = $_POST['password'];
            }
        }
        // Role
        if (empty($_POST['roles'])) {
            $role = 0;
        } else {
            $role = $_POST['roles'];
        }
        // Active
        if (empty($_POST['active'])) {
            $error['active'] = "Không được để trống trường này";
        } else {
            $active = $_POST['active'];
        }
        // Image
        if (isset($_FILES['file']) && !empty($_FILES['file']['full_path'])) {
            $dir = "public/images/user/";
            $file_name = $dir . $_FILES['file']['name'];
            $image =  $_FILES['file']['full_path'];
            if (move_uploaded_file($_FILES['file']['tmp_name'], $file_name)) {
                $notify['file'] = "File đã được upload thành công";
            } else {
                $error['file'] = "File upload không thành công";
            }
        } else {
            $image =  $info_user['image'];
        }
        # Final
        if (empty($error)) {
            $data = array(
                'fullname' => $fullname,
                'phone' => $phone,
                'email' => $email,
                'address' => $address,
                'username' => $username,
                'password' => $password,
                'user_role' => $role,
                'is_active' => $active,
                'image' => $image
            );
            update_user($data, $id_user);
            $finish = "Cập nhật thông tin người dùng thành công";
        } else {
            $failed = "Có lỗi trong khi cập nhật thông tin người dùng";
        }
    }
    $info_userr = get_user_by_id($id_user);
    $data['success'] = $finish;
    $data['failed'] = $failed;
    $data['info_user'] = $info_userr;
    load_view('edit', $data);
}

