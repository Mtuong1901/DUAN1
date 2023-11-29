<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <h4 class="text-center">THÔNG TIN KHÁCH HÀNG</h4>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-6 text-center">
            <img width="200px" src="../content/img/<?=$user['Anh']?>" alt="">
        </div>
        <div class="col-md-6">
            <p><b>Họ tên: </b><?=$user['HoTen']?></p>
            <p><b>Email: </b><?=$user['Email']?></p>
            <p><b>Số điện thoại: </b><?=$user['SDT']?></p>
            <p><b>Địa chỉ: </b><?=$user['DiaChi']?></p>
            <div class="row">
                <div class="col-md-4">
                <a href="?mod=user&act=edit&id=<?=$user['MaKhachHang']?>" class="btn btn-primary">Sửa thông tin</a>
                </div>
                <?php if($user['Admin']==1): ?> 
                    <div class="col-md-4">
                    <a href="../admin/?mod=category&act=list" class="btn btn-success">Trang Admin</a>
                </div>
                <?php endif; ?>
                <div class="col-md-4">
                <a href="?mod=user&act=logout" class="btn btn-danger">Đăng xuất</a>

                </div>
            </div>
        </div>
    </div>
</div>