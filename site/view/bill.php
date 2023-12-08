<?php 
if(isset($_POST['xacnhan'])){
    $MaKhachHang = $_SESSION['user']['MaKhachHang'];
    $TongTien = $_POST['tongtien'];
    $GhiChu = $_POST['ghichu'];
    add_order($MaKhachHang,$TongTien,$GhiChu);
    header("Location: ?mod=page&act=home");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>