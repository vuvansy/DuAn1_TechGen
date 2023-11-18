<?php

#Email
function is_email()
{
  $partten = "/^[A-Za-z0-9_.]{2,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
  // $partten = "/^[A-Za-z0-9]{6,32}([@]+){1}[A-Za-z0-9]$/";
  if (preg_match($partten, $_POST['email'], $matchs))
    return true;
  return false;
}

#username
function is_username()
{
  $partten = "/^[A-Za-z0-9]{6,32}$/";
  if (preg_match($partten, $_POST['username'], $matchs))
    return true;
  return false;
}

//Fullname
function is_fullname()
{
  $partten = "/^[\p{L}\s'-]+$/u";
  if (preg_match($partten, $_POST['fullname'], $matchs))
    return true;
  return false;
}

#phoneNumber

function is_phone()
{
  $partten = "/^0\d{9}$/";
  if (preg_match($partten, $_POST['phone'], $matchs))
    return true;
  return false;
}

#password
function is_password()
{
  $partten = "/^[A-Za-z0-9]{6,32}$/";
  if (preg_match($partten, $_POST['password'], $matchs))
    return true;
  return false;
}

function is_confirm_pass()
{
  $partten = "/^[A-Za-z0-9]{6,32}$/";
  if (preg_match($partten, $_POST['confirm_pass'], $matchs))
    return true;
  return false;
}

function is_pass_old()
{
  $partten = "/^[A-Za-z0-9]{6,32}$/";
  if (preg_match($partten, $_POST['pass_old'], $matchs))
    return true;
  return false;
}

function is_pass_new()
{
  $partten = "/^[A-Za-z0-9]{6,32}$/";
  if (preg_match($partten, $_POST['pass_new'], $matchs))
    return true;
  return false;
}

function is_pass_confirm()
{
  $partten = "/^[A-Za-z0-9]{6,32}$/";
  if (preg_match($partten, $_POST['pass_confirm'], $matchs))
    return true;
  return false;
}







#error Thông báo lỗi
function form_error($label_field)
{
  global $error;
  if (!empty($error[$label_field])) return "<p class ='text-danger mt-2'> $error[$label_field] </p>";
}


function set_value($label_field)
{
  global $$label_field;
  if (!empty($$label_field)) return $$label_field;
}

function notify($label_field)
{
  global $notify;
  if (!empty($notify[$label_field])) return "<p class ='text-success mt-2'> $notify[$label_field] </p>";
}
