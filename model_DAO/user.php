<?php
    include_once 'pdo.php';
    function check_login($email,$pass){
        $sql= "SELECT *FROM taikhoan WHERE Email=? AND MatKhau=?";
        return pdo_query_one($sql,$email,$pass);
    }
    function user_one($id){
        $sql= "SELECT * FROM taikhoan WHERE MaKhachHang=?";
        return pdo_query_one($sql,$id);
    }
    function user_register($name,$email,$pass,$address,$phone,$image){
        $sql= "INSERT INTO taikhoan (HoTen,Email,MatKhau,DiaChi,SDT,Anh)
        VALUES(?,?,?,?,?,?)";
        return pdo_execute($sql,$name,$email,$pass,$address,$phone,$image);    
    }
    function user_edit($id,$name,$email,$address,$phone,$image){
        $sql= "UPDATE taikhoan SET HoTen=?,Email=?,DiaChi=?,SDT=?,Anh=?
        WHERE MaKhachHang=? ";
        return pdo_execute($sql,$name,$email,$address,$phone,$image,$id);
    }
?>