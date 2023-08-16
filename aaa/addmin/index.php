<?php
session_start();
ob_start();
include "../model/pdo.php";
include "../model/sectors.php";
include "../model/product.php";
include "../model/user.php";
include "../model/comment.php";
include "../model/view.php";

include "header.php";
include "home.php";
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'lsp';
            if(isset($_POST['themmoi'])){
                $error = [];
                if(empty($_POST['name'])) {
                    $error['name'] = "Tên loại hàng không được bỏ trống";
                } else {
                    $tendt = $_POST['name'];
                }
                if(empty($error)){
                $name=$_POST['name'];
                insertdm($name);
                $thongbao="them thanh cong";
                }
            }
            include "sectors/addsectors.php";
            break;
        
        case'listsp':
            $listdanhmuc=load_all();
            include "sectors/list.php";
            break;
        case'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                xoadm($_GET['id']);
                    }
        $listdanhmuc=load_all();
        include "sectors/list.php";
        break;
        case'suadm':
            if(isset($_GET['id'])&&($_GET['id'])){
                $danhmuc=load_one($_GET['id']);
                        }
            include "sectors/update.php";
            break;

        case 'updatedm';
        if(isset($_POST['editpro'])&&($_POST['editpro'])){
            $tenloai=$_POST['name'];
            $id =$_POST['id'];
            update_dm($id,$tenloai);
            $thongbao="cap nhat thanh cong";
                }
        $listdanhmuc=load_all();
        include "sectors/list.php";
        break;
        // xong danh muc
        case 'sp':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $error = [];

                if(empty($_POST['product_name'])) {
                    $error['product_name'] = "Tên sản phẩm không được bỏ trống";
                } else {
                    $product_name = $_POST['product_name'];
                }
          
                if((int)$_POST['product_price'] <= 0) {
                    $error['product_price'] = "Giá của sản phẩm  phải  > 0";
                } else {
                    $product_name = $_POST['product_name'];
                }
                if(empty($_POST['origin'])) {
                    $error['origin'] = "thêm Mô tả sản phẩm";
                } else {
                    $origin = $_POST['origin'];
                }
            if(empty($error)){
                $target_dir = "../upload/";
                $filename=$target_dir.$_FILES['product_img']['name'];
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
                if ($_FILES["product_img"]["size"] > 500000) {
                    $uploadOk = 0;
                  }
                  
                    if ($uploadOk == 0) {
                       
                    }
                
                    if (move_uploaded_file($_FILES['product_img']['tmp_name'], $filename)) {
                    } else {
                    // echo 'dang thanh cong';
                    }
                
                $date=date("h:i:sa d/m/Y");
                $product_price=$_POST['product_price'];
                $product_name=$_POST['product_name'];
                $origin=$_POST['origin'];
                $view=$_POST['view'];
                $id_sectors=$_POST['id_sectors'];
                $discount = $_POST['discount'];
                insert_product($id_sectors, $product_name,$product_price,$filename,$origin,$view,$date,$discount);
                $thongbao="them thanh cong";
                    }
                    
                        
            }
            $listdanhmuc=load_all();
                        include "product/add.php";
                        break;
            
                case 'listdssp':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                     $pm=$_POST['pm'];
                     $id_sectors=$_POST['id_sectors'];
                    }else{
                     $pm='';
                     $id_sectors=0;
                    }
                    $listdanhmuc=load_all();
                    $listsanpham=search($pm,$id_sectors);
                    include "product/list.php";
                    break;
                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        xoasp($_GET['id']);
                            }
                $listsanpham=load_allsp();
                include "product/list.php";
                break;
                case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id'])){
                        $sanpham= loadone_sanpham($_GET['id']);
                    }
                    include "product/edit.php";
                    break;
                case 'updatesp';
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $product_name=$_POST['product_name'];
                        $product_price=$_POST['product_price'];
                        $view=$_POST['view'];
                        $origin=$_POST['origin'];
                        $discount = $_POST['discount'];
                    update_sp($product_name,$product_price,$origin,$view,$discount,$id);
                    $thongbao="cap nhat thanh cong";
                            }
                            $listdanhmuc=load_all();
                            $listsanpham=search();
                    include "product/list.php";
                    break;
                    // xong san pham
                    case 'kh':
                        if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                            $error = [];
            
                            if(empty($_POST['user'])) {
                                $error['user'] = "Nhập tên đăng nhập";
                            } else {
                                $user = $_POST['user'];
                            }
                            if(empty($_POST['pass'])) {
                                $error['pass'] = "nhập mật khẩu";
                            } else {
                                $pass = $_POST['pass'];
                            }
                            if(empty($_POST['email'])) {
                                $error['email'] = "Nhập email của bạn";
                            } else {
                                $email = $_POST['email'];
                            }
                            if(empty($_POST['dress'])) {
                                $error['dress'] = "Nhập địa chỉ của bạn";
                            } else {
                                $dress = $_POST['dress'];
                            }
                            if(empty($_POST['phone'])) {
                                $error['phone'] = "Nhập số điện của bạn";
                            } else {
                                $phone =  $_POST['phone'];
                            }
                      
                        if(empty($error)){
                            $target_dir = "../upload/";
                            $filename=$target_dir.$_FILES['img']['name'];
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
                            if ($_FILES["img"]["size"] > 500000) {
                                // echo "xin lỗi dung lượng ảnh của bạn quá lớn.";
                                $uploadOk = 0;
                              }
                              
                                if ($uploadOk == 0) {
                                    // echo "Xin lỗi không thể cập nhật ảnh";
                                }
                            
                                if (move_uploaded_file($_FILES['img']['tmp_name'], $filename)) {
                                } else {
                                // echo 'dang thanh cong';
                                }
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            $email=$_POST['email'];
                            $dress=$_POST['dress'];
                            $phone=$_POST['phone'];
                            $role=$_POST['role'];
                            isert_acount($user,$pass,$dress,$phone,$email,$role,$filename);
                            
                            $thongbao="Thêm Thành Công";     
}
}
            include "account/add.php";
            break;
                case'listaccount':
                    $list_account=list_account();
                    include "account/list.php";
                    break;

                case 'xoaac':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_account($_GET['id']);
                            }
                $list_account=list_account();
                include "account/list.php";
                break;
                case 'suaac':
                    if(isset($_GET['id'])&&($_GET['id'])){
                        $account=loadone_account($_GET['id']);
                    }
                    include "account/edit.php";
                    break;
                case 'updateaccount':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $dress=$_POST['dress'];
                        $role=$_POST['role'];
                        $phone=$_POST['phone'];
                        updateac($user,$pass,$email,$dress,$phone,$role,$id);
                    $thongbao="cap nhat thanh cong";
                            }
                            $list_account=list_account();
                    include "account/list.php";
                    break;
                    case 'bl':
                        $listbinhluan=load_all_comment();
                        include "Comment/bl.php";
                        break;
                        case'xoabl':
                            if(isset($_GET['id'])&&($_GET['id']>0)){
                                xoabl($_GET['id']);
                                    }
                        $listbinhluan=load_all_comment();
                        include "comment/bl.php";
                        break;
                    case 'dh':
                        if(isset($_POST['pm'])&&($_POST['pm']!="")){
                            $pm=$_POST['pm'];
                        }else{
                            $pm="";
                        }
                        
                        $listbill=load_all_bill_ad($pm,0);
                        include "listbill/list.php";
                        break;
                        case 'suadh':
                            if(isset($_GET['id'])&&($_GET['id'])){
                                $donhang=loadone_bill($_GET['id']);
                                 $listbill=load_all_bill_ad("",0);
                               
                            }
                            include "listbill/update.php";
                            break;
                        case'thoat':
                            session_destroy();
                            header("location: ../index.php");
                            ob_end_flush();
                            break;
                            case 'update':
                                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                    $ttdh=$_POST['ttdh'];
                                    $id =$_POST['id'];
                                    update_dh($id,$ttdh);
                                    $thongbao="cap nhat thanh cong";
                                        }
                                $load_all= loadall_bill();
                                $listbill=load_all_bill_ad("",0);
                                include "listbill/list.php";
                                break;
                                
                        default:
                        include "home.php";
                        break;

                    }
            

                }else{
                    include "home.php";
                }
        
        
        
            include "footer.php";



?>