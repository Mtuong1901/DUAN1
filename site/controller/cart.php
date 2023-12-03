<?php
include_once '../model_DAO/product.php';
    extract($_REQUEST);
    if(isset($act)){
        switch ($act) {
            case "add": 
                $sp=product_one($id);
                // print_r($sp);
                if (isset($_SESSION['cart'][$id])) {
                    $_SESSION['cart'][$id]['SL']+=1;
                }else {
                    $_SESSION['cart'][$id]=array(
                        'MaSanPham'=> $sp['MaSanPham'],
                        'TenSanPham'=> $sp['TenSanPham'],
                        'HinhAnh'=> $sp['HinhAnh'],
                        'Gia'=> $sp['Gia'],
                        'GiaKhuyenMai'=> $sp['GiaKhuyenMai'],
                        'SL'=>1
                    );
                    // unset($_SESSION['cart']);
                }
                
                // print_r($_SESSION['cart']);
                    include_once 'view/template_header.php';
                    include_once 'view/page_cart.php';
                    include_once 'view/template_footer.php';
                    break;
                case 'delete':
                    unset($_SESSION['cart'][$id]);
                    header('location: ?mod=cart&act=list');
                    break;
                case 'deleteAll':
                    if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
                        unset($_SESSION['cart']);
                        header("Location: ?mod=cart&act=list");
                    }
                    break;
                case 'list':
                    include_once 'view/template_header.php';
                    include_once 'view/page_cart.php';
                    include_once 'view/template_footer.php';
                    break;
                case'increase':
                    $_SESSION['cart'][$id]['SL']+=1;
                    header('location: ?mod=cart&act=list');
                    break;
                case'decrease':
                    
                    if ($_SESSION['cart']) {
                        $_SESSION['cart'][$id]['SL']-=1;
                    }else {
                        unset($_SESSION['cart'][$id]);
                    }
                    header('location: ?mod=cart&act=list');
                    break;    
            }
    }
?>