<?php
include_once 'pdo.php';

function feedback_list($id){
      $sql="SELECT * FROM BinhLuan bl INNER JOIN taikhoan kh ON bl.MaKhachHang=kh.MaKhachHang WHERE MaSanPham=?";
      return pdo_query($sql,$id);
      } 
   function feedback_add($idKH,$feedback,$id) {
      date_default_timezone_set("Asia/Ho_Chi_Minh");
      $sql="INSERT INTO BinhLuan(MaKhachHang,NoiDung,MaSanPham,`NgayBinhLuan`) VALUES (?,?,?,?)";
      return pdo_execute($sql,$idKH,$feedback,$id,Date("Y-m-d H-i-s"));
   }    
?>