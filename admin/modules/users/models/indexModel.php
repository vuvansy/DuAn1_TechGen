<?php
function get_list_user()
{
  $list = db_fetch_array("SELECT * FROM `user`");
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

