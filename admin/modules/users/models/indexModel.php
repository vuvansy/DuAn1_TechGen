<?php
function get_list_user($value = "")
{
  if (!empty($value)) {
    $list = db_fetch_array("SELECT * FROM `user` WHERE `username` LIKE '%$value%' OR `fullname` LIKE '%$value%' OR `email` LIKE '%$value%'");
  } else {
    $list = db_fetch_array("SELECT * FROM `user`");
  }
  return $list;
}
function check_roles($user_id)
{
  $check =  db_num_rows("SELECT * FROM `user` WHERE `id_user` = '{$user_id}' AND `user_role` = 1");
  if ($check > 0) {
    return true;
  }
  return false;
}

function delete_order_tg_by_id($id_user)
{

  return db_delete("order_tg", "`id_user` = '{$id_user}'");
}

function delete_cmt_by_id($id_user)
{

  return db_delete("comment", "`id_user` = '{$id_user}'");
}


function delete_user_by_id($user_id)
{
  return db_delete("user", "`id_user` = '{$user_id}'");
}


function add_user($data)
{
  return db_insert("user", $data);
}
function get_user_by_id($user_id)
{
  return db_fetch_row("SELECT * FROM `user` WHERE `id_user` = '{$user_id}'");
}
function update_user($data, $id)
{
  return db_update("user", $data, "`id_user` = '{$id}'");
}

function check_exsist($username, $email)
{
  $check = db_num_rows("SELECT * FROM `user` WHERE `username` = '{$username}' OR `email` = '{$email}'");
  if ($check > 0)
    return true;
  else {
    return false;
  }
}
