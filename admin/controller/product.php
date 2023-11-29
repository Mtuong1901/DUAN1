<?php
    include_once '../model_DAO/product.php';
    include_once '../model_DAO/category.php';

    extract($_REQUEST);
    if (isset($act)) {
        switch ($act) {
            case 'list':
                $count_product=count_product();
                $number_page=ceil($count_product/5);
                if (!isset($page)) $page=1;
                $product_page=product_page($page);
                // echo "<pre>";
                // print_r($product_page);    
                // echo "</pre>";
                include_once 'view/template_header.php';
                include_once 'view/page_product_list.php';
                include_once 'view/template_footer.php';
                break;
            case 'add':
                $dsdm=category_list();
                if(isset($addProduct_submit)){
                product_add($name,$_FILES['image']['name'],$price,$sale,$category,$quantity,$description,$hot,$status);
                move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/'.$_FILES['image']['name']);
                header('location: ?mod=product&act=list');
                }
                include_once 'view/template_header.php';
                include_once 'view/page_product_add.php';
                include_once 'view/template_footer.php';
                break;
            case 'delete':
                product_delete($id);
                header('location: ?mod=product&act=list');
                break;
            case 'edit':
                $sp=product_one($id); 
                $dsdm=category_list();
                if (isset($editProduct_submit)) {
                    if($_FILES['image']['name']!=null){
                        product_edit($id,$name,$_FILES['image']['name'],$price,$sale,$category,$quantity,$description,$hot,$status);
                        move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/'.$_FILES['image']['name']);
                        header('location: ?mod=product&act=list');
                }else {
                    product_edit($id,$name,$sp['HinhAnh'],$price,$sale,$category,$quantity,$description,$hot,$status);
                    header('location: ?mod=product&act=list');
                }
              
            }
                // print_r($sp);   
                include_once 'view/template_header.php';
                include_once 'view/page_product_edit.php';
                include_once 'view/template_footer.php';
                break;
        } 
    }

?>