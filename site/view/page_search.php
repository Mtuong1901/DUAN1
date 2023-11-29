<div class="container">
<div class="text-center mt-5">
            <div class=" d-flex">
                <H4 class="my-3">Kết quả tìm kiếm từ khóa: <?=$keyword?> </H4>
            </div>
            <div class="row my-3">
                <?php foreach($data_search as $data):?>
                <div class="col-md-3 mb-3">
                    <div class="shadow pb-3 rounded">
                        <img class="img-fluid mb-2 rounded-top" src="../content/img/<?=$data['HinhAnh']?>" alt="">
                    <p><b><?=$data['TenSanPham']?></b></p>
                    <span class="text-danger">Giá: <?=$data['GiaKhuyenMai']?> đ </span> <span> <del> <?=$data['Gia']?> đ</del></span>
                    <p></p>
                    <a href="?mod=cart&act=add&id=" class="btn btn-danger">Mua ngay</a>
                    </div>
                </div>
                    <?php endforeach;?>
            </div>
        </div>
</div>