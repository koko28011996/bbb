
<?php 
if(is_array($account)){
    extract($account);
}



?>
?>

<div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="index.php?act=updateaccount" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <label for="">User Name</label><br>
                                            <input type="text " class="form-control form-control-user"
                                                aria-describedby="emailHelp"  name="user" value="<?php echo $account['user'] ?>" >
                                                 
                                        </div>
                                        <div class="form-group">
                                        <label for="">Password</label><br>
                                            <input type="text" class="form-control form-control-user"
                                            name="pass" value="<?php echo $account['pass'] ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="">EMAIL</label><br>
                                            <input type="email" class="form-control form-control-user"
                                            name="email" value="<?php echo $account['email'] ?>">
                                            </div>
                                        
                                        <label for=""> Ảnh</label><br>
                                            <input type="file" name="img" id="img" value="<?php echo $account['img'] ?>">

                                        <div class="form-group">
                                        <label for=""> Địa Chỉ </label><br>
                                            <input type="text" class="form-control form-control-user"
                                            name="dress" value=" <?php echo $account['dress'] ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for=""> ADmin(>0)</label><br>
                                            <input type="text" class="form-control form-control-user"
                                            name="role" value=" <?php echo $account['role'] ?>">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        <label for=""> Số Điện thoại </label><br>
                                            <input type="number" class="form-control form-control-user"
                                            name="phone" value="<?php echo $account['phone'] ?>">
                                        </div>
                                        <input type="hidden" name="id" value=" <?php echo $account['id'] ?>">
                                        <input type="submit"  name="capnhat" class="btn btn-google btn-user btn-block" value="Cập Nhật">
                                        <a href="index.php?act=listaccount" class="btn btn-facebook btn-user btn-block">
                                            Danh Sách
                                        </a>
                                        <?php
                                        if(isset($thongbao)&&($thongbao!=""))
                                        echo $thongbao;
                                            
                                            ?>
                                        
                                    </form>
                    
                                </div>
                            </div>
                        </div>
                    </div>