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
    WHERE MONTH(order_date) = $month and (order_status = 4 OR order_status = 6)";
    return db_fetch_row($sql)['doanh_thu_thang'];
}


//Hàm tính số Đơn hàng thành công
function order_success($month)
{
    $sql = "SELECT COUNT(id_order) 
    AS order_success
    FROM order_tg 
    WHERE MONTH(order_date) = $month and (order_status = 4 OR order_status = 6)";
    return db_fetch_row($sql)['order_success'];
}

//Hàm tính số Đơn hàng bị hủy
function order_cancel($month)
{
    $sql = "SELECT COUNT(id_order) 
    AS order_cancel
    FROM order_tg
    WHERE MONTH(order_date) = $month and (order_status = 3 OR order_status = 5)";

    return db_fetch_row($sql)['order_cancel'];
}


//Hàm tính số Đơn hàng đan vận chuyển
function order_transport($month)
{
    $sql = "SELECT COUNT(id_order) 
    AS order_transport
    FROM order_tg
    WHERE MONTH(order_date) = $month and order_status = 2";

    return db_fetch_row($sql)['order_transport'];
}

//Hàm tìm ra khách hàng có nhiều đơn hàng trong tháng nhất
function order_customer($month)
{
    $sql = "SELECT COUNT(id_order) 
    AS order_customer 
    FROM order_tg 
    WHERE MONTH(order_date) = $month and order_status = 4
    GROUP BY id_user 
    ORDER BY order_customer 
    DESC LIMIT 1";
    return db_fetch_row($sql)['order_customer'];
}

function order_user($month)
{
    $sql = "SELECT id_user, COUNT(*) AS order_count
    FROM order_tg
    WHERE MONTH(order_date) = $month and order_status = 4
    GROUP BY id_user
    HAVING order_count = (
      SELECT MAX(order_count)
      FROM (
        SELECT id_user, COUNT(*) AS order_count
        FROM order_tg
        WHERE MONTH(order_date) = $month and order_status = 4
        GROUP BY id_user
      ) AS subquery
    );";
}
