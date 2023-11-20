<?php

//Show dữ liệu Array
function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

//Hàm tính tổng số tiền của tất cả đơn hàng thành công
function bill_select_sum_by_month($month)
{
    $sql = "SELECT SUM(order_total) 
    AS doanh_thu_thang
    FROM order_tg 
    WHERE MONTH(order_date) = $month and order_status =3";
    return db_fetch_row($sql)['doanh_thu_thang'];
}


//Hàm tính số Đơn hàng thành công
function order_success($month)
{
    $sql = "SELECT COUNT(id_order) 
    AS order_success
    FROM order_tg 
    WHERE MONTH(order_date) = $month and order_status = 3";
    return db_fetch_row($sql)['order_success'];
}

//Hàm tính số Đơn hàng bị hủy
function order_cancel($month)
{
    $sql = "SELECT COUNT(id_order) 
    AS order_cancel
    FROM order_tg
    WHERE MONTH(order_date) = $month and order_status = 2";

    return db_fetch_row($sql)['order_cancel'];
}


//Hàm tính số Đơn hàng đan vận chuyển
function order_transport($month)
{
    $sql = "SELECT COUNT(id_order) 
    AS order_transport
    FROM order_tg
    WHERE MONTH(order_date) = $month and order_status = 1";

    return db_fetch_row($sql)['order_transport'];
}
