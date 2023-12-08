
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        input{
            width:300px;
        }
        .bill-detail{
            height:80px;
            padding:10px;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            outline: none;
        }
        tbody{
            height: 250px;
        }
        .voucher{
            display: flex;
            justify-content: space-between;
            padding: 10px;
            margin-bottom: 15px;
        }
        .total{
            display: flex;
            gap: 500px;
        }
        .express{
            display: flex;
            gap: 500px;
        }

        #xacnhan{
        height: 50px;
        width: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin:10px 0 10px 400px
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="#" method="post" class="row ">
        <div class="col-md-6">
        <label for="">Hình thức thanh toán</label> <br>
            <select name="select" id="select">
                <option value="COD">COD</option>
                <option value="nganhangnoidia">Ngân Hàng nội địa</option>
                <option value="visa-mastercard">VISA/MASTERCARD/<option>
                <option value="momo">MOMO</option>
            </select><br>
            <label for="">Họ và Tên</label><br>
            <input type="text" name="name" id="" placeholder="Họ và tên"><br>
            <label for="">Điện thoại</label><br>
            <input type="text" name="phone" id="" placeholder="số điện thoại"><br>
            <label for="">Địa chỉ</label><br>
            <input type="text" name="address" id="" placeholder="Địa chỉ"><br>
            <label for="">Email</label><br>
            <input type="text" name="email" id="" placeholder="Họ và tên"><br>   
            <label for="">Ghi Chú</label><br>
            <textarea name="ghichu" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="col-md-6 ">
            <h1 class="text-success">Đơn hàng</h1>
                <div class="row">
                <div class="col">
                <table  class="table">
                    <thead>
                    <tr>
                            <th class="text-center"></th>
                            <th class="text-center">Tên sản phẩm</th>
                            <th class="text-center">Size</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">Thành tiền</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item):
                    ?>
                    <tr  class="text-center">   
                        <td data-th="Sản phẩm">
                            <img
                            src="../content/img/<?=$item['HinhAnh']?>"
                            alt="" class="img-responsive" width="40">
                        </td>
                        <td data-th="Tên sản phẩm"><?=$item['TenSanPham']?></td>
                        <td data-th="Kích thước">Size L</td>
                        <td data-th="Số lượng"><?=$item['SL']?></td>
                        <td data-th="Thành tiền"><?=$item['GiaKhuyenMai']*$item['SL']?>đ</td>
                    </tr>
                    <?php
                    endforeach;
                    }
                        ?>
                    </tbody>
                    
                </table>
                </div>
                <div class="voucher">
                    <input type="text" name="voucher" id="" placeholder="Mã Giảm Giá">
                    <a href="#" class="btn btn-danger">Áp dụng</a>
                </div>
                <div class="bill-detail">
                        <div class="total">
                            <p>Tạm tính:</p>
                            <p><strong><?=$tongtien?></strong>đ</p>
                            <input type="hidden" name="tongtien" value="<?=$tongtien?>">
                        </div>
                        <div class="express">
                            <p>Phí vận chuyển:</p>
                            <p><strong>-</strong></p>
                        </div>
                    </div>
                </div>
                <a href="?mod=order&act=bill" class="btn btn-success" id="xacnhan" type="xacnhan" name="xacnhan">Xác nhận</a>
            </div>
            
        </div>
    </form>
    </div>
</body>
</html>