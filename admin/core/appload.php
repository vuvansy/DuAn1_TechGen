<?php
defined('APPPATH') or exit('Không được quyền truy cập phần này');

// Include file config/database
require CONFIGPATH . DIRECTORY_SEPARATOR . 'database.php';

// Include file config/config
require CONFIGPATH . DIRECTORY_SEPARATOR . 'config.php';

// Include file config/email
require CONFIGPATH . DIRECTORY_SEPARATOR . 'email.php';

// Include file config/autoload
require CONFIGPATH . DIRECTORY_SEPARATOR . 'autoload.php';

// Include core database
require LIBPATH . DIRECTORY_SEPARATOR . 'database.php';

// Include core base

require COREPATH . DIRECTORY_SEPARATOR . 'base.php';

session_start();
ob_start();
// date_default_timezone_set("	Asia/Ho_Chi_Minh");

//Trả về Username của người login
function user_login()
{
    if (!empty($_SESSION['user_login'])) {
        return $_SESSION['user_login'];
    }
}

// Trả về Fullname của người login
//Sự dụng để hiện Ddropdown__login quản trị của phía Admin info_user(user_login(), 'user_role') == 1)

function info_user($username, $field)
{
    $list_users = db_fetch_array("SELECT * FROM `user`");
    if (isset($_SESSION['is_login']))
        foreach ($list_users as $user) {
            // show_array($user);
            if ($username == $user['username']) {
                if (array_key_exists($field, $user)) {
                    return $user[$field];
                }
            }
        }
}

if (is_array($autoload)) {
    foreach ($autoload as $type => $list_auto) {
        if (!empty($list_auto)) {
            foreach ($list_auto as $name) {
                load($type, $name);
            }
        }
    }
}


//
//connect Database
db_connect($db);

require COREPATH . DIRECTORY_SEPARATOR . 'router.php';
