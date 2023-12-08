
<main>      
    <form action="?mod=order&act=checkout" method="post">
    <input type="hidden" name="tongtien" id="tongtien" >
            <div class="container my-3">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:20%">Tên sản phẩm</th>
                            <th style="width:20%">Hình ảnh</th>
                            <th style="width:10%">Kích thước</th>
                            <th style="width:10%">Màu sắc</th>
                            <th style="width:10%">Giá</th>
                            <th style="width:8%">Số lượng</th>
                            <th style="width:12%">Thành tiền</th>
                            <th style="width:10%"> Xóa </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item):
        ?>
        <tr>
            <td data-th="Tên sản phẩm"><?=$item['TenSanPham']?></td>
            <td data-th="Sản phẩm">
                        <img
                            src="../content/img/<?=$item['HinhAnh']?>"
                            alt="Sản phẩm 1" class="img-responsive" width="100">
            </td>
            <td data-th="Kích thước">Size L</td>
            <td data-th="Màu sắc">Màu xanh</td>
            <td data-th="Giá"><?=$item['GiaKhuyenMai']?>đ</td>
            <td data-th="Số lượng">
                <div class="amount-product-buy d-flex justify-content-center">
                    <a href="?mod=cart&act=decrease&id=<?=$item['MaSanPham'] ?>" class="minus-product bg-dark bg-opacity-25  px-2">
                        <i class="bi bi-dash fw-bolder text-dark fs-5"></i>
                    </a>
                    <div class="amount-product fs-5  px-2 border border-1"><?=$item['SL']?></div>
                    <a href="?mod=cart&act=increase&id=<?=$item['MaSanPham'] ?>" class="add-plus bg-dark bg-opacity-25 px-2">
                        <i class="bi bi-plus-lg fw-bolder text-dark fs-5"></i>
                    </a>
                </div>
            </td>
            <td data-th="Thành tiền"><?=$item['GiaKhuyenMai']*$item['SL']?>đ</td>
            <td class="actions" data-th="">
                <a href="?mod=cart&act=delete&id=<?=$item['MaSanPham'] ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill"></i>
                </a>
            </td>
        </tr>

        <?php
    endforeach;
    } else {
        $tb=  "Giỏ hàng trống!!";
    }

?>
                    </tbody>
                    <?php if(isset($tb) && $tb!= ''){
                        echo('<h2 class="text-center text-warning">'.$tb.'</h2>');
                    }
                    ?>
                </table>
                <div class="cart-payment mt-5 sticky-bottom z-1 bg-white">
                    <div class="row border border-1 py-4 align-items-center mt-3 shadow-lg">
                        <div class="col-sm-6">
                            <div class="cart-payment-left d-flex hstack gap-3">
                                <a href="?mod=page&act=home" class="btn btn-warning"><i class="fa fa-angle-left"></i>
                                    Tiếp tục mua hàng</a>
                            </div>
                            <div class="cart-payment-left d-flex hstack gap-3">
                                <a href="?mod=cart&act=deleteAll" class="btn btn-danger mt-1"><i class="fa fa-angle-left"></i>
                                    Xóa Hết </a>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div
                                class="cart-payment-right  d-flex align-items-center justify-content-between hstack gap-3">
                                <h6 class="mb-0 text-truncate">Tổng thanh toán: </h6>
                                
                                <strong>0 Đ</strong>
                                
                                <button class="btn btn-danger" type="thanhtoan" name='thanhtoan'>Thanh toán</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</main>
<script>

    function tinh_tong(){
    var sp = document.querySelectorAll("table tbody tr");
    var tong = 0;
    for(const csp of sp){
        var dongia = csp.querySelector('td:nth-child(5)').innerText.replace('đ','');
        var soluong = csp.querySelector('td:nth-child(6)').innerText;
        var thanhtien = dongia * soluong ;
        tong = tong + thanhtien;
        document.querySelector('div div strong').innerText=tong+'đ'; 
        var tongtien =document.querySelector('#tongtien').value=tong;
    } 
}
tinh_tong();

</script>