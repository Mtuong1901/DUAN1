<?php
    include_once '../model_DAO/category.php';
    include_once '../model_DAO/product.php';
extract($_REQUEST);
if(isset($act)) {
    switch ($act) {
        case 'home':
            $dsdm=category_list();
            // print_r($dsdm);
            $sp_hot=product_hot();
            // print_r($sp_hot);
            $dssp=product_list();
            // print_r($dssp);
            include_once 'view/template_header.php';
            include_once 'view/page_home.php';
            include_once 'view/template_footer.php';
            break;
        case 'search':
            $data_search=product_search($keyword);
            // print_r($data_search);
            include_once 'view/template_header.php';
            include_once 'view/page_search.php';
            include_once 'view/template_footer.php';
            break;
        case 'category':
            if(!isset($min_price)) $min_price=0;
            if(!isset($max_price)) $max_price=9999999999999999999;
            if(!isset($order)) $order="";
            $sp_dm=product_category_order_filter($id,$min_price,$max_price,$order);
            // print_r($sp_dm);
            include_once 'view/template_header.php';
            include_once 'view/page_category.php';
            include_once 'view/template_footer.php';
            break;  
    }
}
?>
