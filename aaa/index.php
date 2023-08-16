<?php
ob_start();
session_start();
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
 include "nguoidung/header.php";
 include "model/pdo.php";
 include "model/sectors.php";
 include "model/product.php";
 include "model/user.php";
 include "model/comment.php";
 include "model/view.php";
 include "golbal.php";
 $listdanhmuc=load_all();
 $spnew = loadall_sanpham_home();
 $spnew6 = loadall_sanpham_home6();
 $discont = discount();
 $loaddm4 = load_4dm();
$loadview4 = loadall_sanpham_top4();
$topsp=topproduct();


 if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
      case'loadsp':
        if (isset($_POST['pm']) && $_POST['pm']) {
          $pm= $_POST['pm'];
      } else {
          $pm="";
      }
      if(isset($_GET['id_sectors'])&&($_GET['id_sectors']>0)){
        $id_sectors=$_GET['id_sectors'];
    }else{
        $id_sectors=0;
    }
      $dssp=search($pm,$id_sectors);
      $tendm=load_ten_dm($id_sectors);
      $load6dm=load_6dm();

      
      include "nguoidung/loadsp.php";
      break;

      case'sanphamct':
        if((isset($_GET['idsp']))&&($_GET['idsp']>0)){
          $id=$_GET['idsp'];
          $sanpham=loadone_sanpham($id);
          extract($sanpham);
          $sp_cungloai=load_sanpham_cungloai($id,$id_sectors);
          $spnew6 = loadall_sanpham_home6();
          $loaddm4 = load_4dm();
          $view=view($id);
          extract($loaddm4);
          include "nguoidung/sanphamct.php";
        }else{
            include "nguoidung/content.php";
          }
        break;
        case'dangky':
          if(isset($_POST['dangky'])&&($_POST['dangky'])){
            $error = [];

            if(empty($_POST['user'])) {
                $error['user'] = "nhap Tên đăng nhập";
            } else {
                $user = $_POST['user'];
            }
            if(empty($_POST['pass'])) {
                $error['pass'] = "nhap mật khẩu";
            } else {
                $pass = $_POST['pass'];
            }
            if(empty($_POST['email'])) {
                $error['email'] = "nhap email ";
            } else {
                $email = $_POST['email'];
            }
            if(empty($_POST['dress'])) {
                $error['dress'] = "nhap địa chỉ";
            } else {
                $dress = $_POST['dress'];
            }
            if(empty($_POST['phone'])) {
                $error['phone'] = "nhap số điện thoai";
            } else {
                $phone =  $_POST['phone'];
            }
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $dress=$_POST['dress'];
            $phone=$_POST['phone'];
            isert_acountclien($user,$pass,$dress,$phone,$email);
            $thongbao="Đăng Ký Thành công";
}
        include "nguoidung/dangky.php";
        break;

        case'dangnhap':
         
          if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $checkuser=checkacount($user,$pass);
            if(is_array($checkuser)){
              $_SESSION['user']=$checkuser;
              header("location: index.php");
              

            }else{
              $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra lại";
            }
          }
          include "nguoidung/dangnhap.php";
          break;
          case'thoat':
            session_destroy();
            header("location: index.php");
            ob_end_flush();
            break;
          case 'addcart':
              if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                $product_name=$_POST['product_name'];
                $id=$_POST['id'];
                $product_price=$_POST['product_price'];
                $product_img=$_POST['product_img'];
                if(isset($_POST['quantity'])){
                  $quantity=$_POST['quantity'];
                }else{
                  $quantity=1;
                }
                // kiem tra thu ten san pham đã tồn tại chưa nếu có cập nhật lại số 
                $fg=0;
                $i=0;
                 foreach($_SESSION['giohang'] as $item){
                  if($item[1]==$product_name){
                    $slnew=$quantity+$item[4];
                    $_SESSION['giohang'][$i][4]=$slnew;
                    $fg=1;
                    break;
                  }
                  $i++;
                }
                 // khoi tao mot mang con truoc khi dua vao do hang
                if($fg==0){
                $spadd=[$id,$product_name,$product_img,$product_price,$quantity];
                $_SESSION['giohang'][]=$spadd;
              }
                header("location:index.php?act=viewcart");
              }
              break;
              case'delcart':
                if(isset($_GET['i'])&&($_GET['i']>0)){
                  if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0));
                  array_splice( $_SESSION['giohang'],$_GET['i'],1);
            
                }else{
                  if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);

                }
                if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                  header("location:index.php?act=viewcart");

                }else{
                header("location:index.php");
                }
                break;
          case 'bill':
            include "nguoidung/bill.php";
            break;
            case 'billcomfirm':
              if(isset($_POST['dythanhtoan'])&&($_POST['dythanhtoan'])){
                 if(isset($_SESSION['user'])){
                  $iduser= $_SESSION['user']['id'];
                 }else{
                   $iduser=0;
                 }
                $tongdonhang =tongdonhang();
                $pttt=$_POST['bill_pttt'];
                $name=$_POST['bill_name'];
                $email=$_POST['bill_email'];
                $phone=$_POST['bill_phone'];
                $dress=$_POST['bill_dress'];
                $ngaydathang=date("h:i:sa d/m/Y");
               $id_bill=insert_bill($iduser,$name,$dress,$phone,$email,$pttt,$ngaydathang,$tongdonhang);
               $bill=loadone_bill($id_bill);
               foreach($_SESSION['giohang'] as $item){
                  //  $spadd=[$id,$product_name,$product_img,$product_price,$quantity];
                insert_cart($item[0],$item[1],$item[2],$item[3],$item[4],$id_bill);
                $billct=load_all_cart($id_bill);
                $_SESSION['giohang']=[];
                }
               
               }
               
              include "nguoidung/billcomfirm.php";
              break;
              case'mybill':
                $listbill=load_all_bill($_SESSION['user']['id']);
                include "nguoidung/mybill.php";
                break;
               case'updatedohang':
              
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                 foreach($_POST['quantity'] as $key => $quantity){
                  foreach($_SESSION['giohang'] as $session => $values){
                    if($values[0] == $key){
                      $_SESSION['giohang'][$session][4] =$quantity;
                    }
                  }
                 }
                header("location:index.php?act=viewcart");
                 }
                 break;
                            

                
        default:
        include "nguoidung/content.php";
        break;
        case'viewcart':
          include "nguoidung/viewcart.php";
          break;
      }

    }else{
      include "nguoidung/content.php";
    }
    include "nguoidung/footer.php";
     

     





?>