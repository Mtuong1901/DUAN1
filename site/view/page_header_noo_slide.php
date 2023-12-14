<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../content/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- icon boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<header class="sticky-top bg-white border">
            <!-- row-top -->
            <div class="bg-danger">
                <div class="container text-white">
                    <div class="row">
                        <div class="col-md-6 pt-3">
                            <p class="text-white fs-6"><img src="https://file.hstatic.net/1000402464/file/output-onlinegiftools_9bbbf15c266044699bca3a5635e05246.gif" width="30px" alt=""> MIỄN PHÍ GIAO HÀNG TOÀN QUỐC VỚI ĐƠN HÀNG TRÊN 500K</p>
                        </div>
                        <div class="col-md-6 pt-3 d-flex align-items-end justify-content-end">
                            <p><i class="bi bi-telephone-fill me"></i> HOTLINE: 0987654321 </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu -->
            <div class="container p-2">
                <nav class="navbar navbar-expand-lg bg-white ">
                    <div class="container px-0 mx-0">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                        
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?mod=page&act=home">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="?mod=page&act=category&id=1">NỮ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="?mod=page&act=category&id=2">NAM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="?mod=page&act=category&id=3">TRẺ EM</a>
                        </li>
                        </ul>
                        <form method='post' action='?mod=page&act=search' class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Nhập tên sản phẩm" name="keyword">
                        <input class="btn btn-outline-success" type="submit" value="Tìm" >
                        </form>
                        <div class="d-flex align-items-center ms-5">
                            <div id="cart" class="position-relative d-flex justify-content-center align-items-center rounded-circle bg-black bg-opacity-10 px-2 py-1 ">
                                <a href="?mod=cart&act=list">
                                    <i class="bi bi-cart fs-5  fw-bolder  text-dark"></i>
                                </a>
                                <div class="">
                                    <span id="amount-cart" class="text-white  position-absolute top-0 start-75 translate-middle bg-danger px-2 rounded-circle">
                                    <?php if(isset($_SESSION['cart'])): ?>
                                        <?=count($_SESSION['cart'])?>
                                        <?php else: ?>
                                            0
                                        <?php endif; ?> 
                                    </span>
                                </div>
                            </div>
                            <div id="account" class="d-flex justify-content-center align-items-center rounded-circle bg-black bg-opacity-10  mx-2 px-2 py-1">
                            <?php if(isset($_SESSION['user'])): ?>
                                <a class="text-decoration-none text-white" href="?mod=user&act=info" >
                                    <img class="rounded rounded-5" src="../content/img/<?=$_SESSION['user']['Anh']?>" height=30px width=25px alt=""></a>
                            <?php else: ?>
                                <a class="text-decoration-none text-white" href="?mod=user&act=login" >
                                    <i class="bi bi-person-circle fw-bolder fs-5 text-secondary"></i></a>
                            <?php endif;?>
                            </div>
                        </div>
                    </div>
                    </div>
                </nav>
            </div>
    </header>
</body>
</html>