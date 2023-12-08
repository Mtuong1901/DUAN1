<?php 
include_once 'pdo.php';
function add_order($MaKhachHang,$TongTien,$GhiChu){
    $sql = " INSERT INTO donhang (`NgayDatHang`,`MaKhachHang`,`TongTien`,`GhiChu`,`TrangThai`) VALUE(?,?,?,?,?)";
    return pdo_execute($sql,$MaKhachHang,Date('Y-m-d H:i:s'),$TongTien,$GhiChu,'Đang chờ xử lý');
}


?>