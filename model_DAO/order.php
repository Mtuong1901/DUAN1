<?php 
include_once 'pdo.php';
function add_order($MaSanPham,$TongTien,$GhiChu){
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $sql = " INSERT INTO donhang (`MaSanPham`,`NgayDatHang`,`TongTien`,`GhiChu`,`TrangThai`) VALUE(?,?,?,?,?)";
    return pdo_execute($sql,$MaSanPham,Date("Y-m-d H-i-sa"),$TongTien,$GhiChu,'Đang chờ xử lý');
}