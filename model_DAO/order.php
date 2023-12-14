<?php 
include_once 'pdo.php';
function add_order($TongTien,$GhiChu){
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $sql = " INSERT INTO donhang (`NgayDatHang`,`TongTien`,`GhiChu`,`TrangThai`) VALUE(?,?,?,?)";
    return pdo_execute($sql,Date("Y-m-d H-i-sa"),$TongTien,$GhiChu,'Đang chờ xử lý');
}


?>