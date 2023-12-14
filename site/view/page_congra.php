<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding:0 ;
            box-sizing: border-box;
            
        }
        .content{
            height:400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            
        }
        .circle{
            background-color: red;
            height: 150px;
            width: 150px;
            border-radius: 50%;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .check{
        color: #fff;
        font-size: 50px;
        }
        .title{
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="circle">
            <div class="check">
            <i class="check fa-solid fa-check"></i>
            </div>
        </div>
        <div class="title">
            <h3>Thanh toán thành công</h3>
            <p>Đơn hàng của quý khách đã thanh toán thành công <br>
            YoungStore sẽ sớm liên hệ quý khách để bàn giao sản phẩm
        </p>
        </div>
        <a href="?mod=page&act=home" class="btn btn-secondary">Đóng</a>
    </div>
</body>
</html>