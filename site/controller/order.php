<?php
include_once '../model_DAO/product.php';
extract($_REQUEST);
if(isset($act)){
        switch ($act) {
                case 'checkout':
                include './view/template_header.php';
                include_once './view/page_checkout.php';
                include_once './view/template_footer.php';
                if(isset($_POST['thanhtoan'])){
                        $tongtien = $_POST['tongtien'];
                        $bill = array("TongTien"=>$tongtien);
                        array_push($_SESSION['cart'],$bill);
                }
                break;
                case 'add_order':
                        include_once '../model_DAO/order.php';
                        if(isset($_POST['order'])){
                                $MaSanPham = $_POST['MaSanPham'];
                                $TongTien = $_POST['tongtien'];
                                $GhiChu = $_POST['ghichu'];
                                add_order($MaSanPham,$TongTien,$GhiChu);
                                unset($_SESSION['cart']);
                                header("Location: index.php?mod=page&act=congra");
                        }
                        break;
                
        }
}
?>