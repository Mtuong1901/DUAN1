<?php
    include_once '../model_DAO/category.php';
    extract($_REQUEST);
    if (isset($act)) {
        switch ($act) {
            case 'list':
                $dsdm=category_list();
                    // echo "<pre>";
                    // print_r($dsdm);
                    // echo "/<pre>";
                include_once 'view/template_header.php';
                include_once 'view/page_category_list.php';
                include_once 'view/template_footer.php';
                break;
            case 'add':
                if (isset($addCategory_submit)) {
                    category_add($name,$_FILES['image']['name'],$status);
                    move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/'.$_FILES['image']['name']);
                    header('location: ?mod=category&act=list');
                }     
                include_once 'view/template_header.php';
                include_once 'view/page_category_add.php';
                include_once 'view/template_footer.php';    
                break;
            case 'edit':      
                $dm=get_category_one($id);   
                   if (isset($editCategory_submit)) {
                    category_edit($name,$_FILES['image']['name'],$status,$id);
                    move_uploaded_file($_FILES['image']['tmp_name'],'../content/img/'.$_FILES['image']['name']);
                    header('location: ?mod=category&act=list');
                }
                include_once 'view/template_header.php';
                include_once 'view/page_category_edit.php';
                include_once 'view/template_footer.php';    
                break;  
                case 'delete':
                    category_delete($id);
                    header('location: ?mod=category&act=list');
        }
         
    }
?>
