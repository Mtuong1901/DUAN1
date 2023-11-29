<?php
    extract($_REQUEST);
    if (isset($mod)) {
        switch ($mod) {
            case 'category':
                include_once 'controller/category.php';
                break;
            case 'product':
                include_once 'controller/product.php';
                break;    
        }
    } else {
        header('location: index.php?mod=category&act=list');
    }
    //http://localhost/Fstudio/admin/?mod=category&act=list
?>
 