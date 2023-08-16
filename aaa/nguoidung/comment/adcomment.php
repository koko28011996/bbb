
<?php
        session_start();
        
        $id_product=$_REQUEST['id_product'];
        include "../../model/pdo.php";
        include "../../model/comment.php";
        $listbl=list_bl($id_product);
      
        
        
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .formbinhluan input[type=submit]{
            width: 100px;
            

        }
        .formbinhluan input[type=text]{
            width: 180px;

        }
        .blnguoidung{
            height: 50px;
            background-image: linear-gradient(#ccc,white);
            border: 1px solid #fff;
            border-radius: 5px 5px 5px 5px;
        }
        .binhluan table{
            width:100%;
        }
        .binhluan table td:nth-child(1){
            width:50%;
        }
        .binhluan table td:nth-child(2){
            width:20%;
        }
        .binhluan table td:nth-child(3){
            width:30%;
        }
        
    </style>
</head>
<body>
<div class="tab-content">
            <table>
                        <?php
                        foreach($listbl as $bl){
                           ?>
                           <tr>
                            <td> <?php echo $bl['Content'] ?></td>
                            <td><?php echo $bl['id'] ?></td>
                            <td><?php echo $bl['date_comment'] ?></td>
                           </tr>
                           <?php
                        }
                         ?>
                        </table>



    <?php 
    if(isset($_SESSION['user'])&&($_SESSION)){
    ?>
        <div id="review_form_wrapper">
        <div id="review_form">	
        <p class="form-submit">
            <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
        <input type='hidden' name='id_product' value="<?=$id_product?>" />
        <input type='text' name='Content' id='comment_post_ID' />
        <input type="submit" name="submitcm" id="submit" class="submit" value="Submit" />

        </p>			</form>
            </div><!-- #respond -->
                </div>
    <?php
    }else{

    ?>
                <h6><a href="index.php?act=dangnhap">Vui lòng đăng nhập để bình luận</a></h6>

    <?php

    }
    ?>

        <?php
        if(isset($_POST['submitcm'])&&($_POST['submitcm'])){
            $Content=$_POST['Content'];
            $id_product=$_POST['id_product'];
            $id_user=$_SESSION['user']['id'];
            $id_user=$_SESSION['user']['id'];
            $date_comment=date("h:i:sa d/m/Y");
            insert_comment($id_user,$id_product,$date_comment,$Content);
        header("location:".$_SERVER['HTTP_REFERER']);
        }
        ?>
      

    
</body>
</html>