

<div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="index.php?act=kh" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <label for="">User Name</label><br>
                                            <input type="text " class="form-control form-control-user"
                                                aria-describedby="emailHelp"  name="user" >
                                                <span style="color: red;"><?php 
                                                if(!empty($error['user'])) {
                                                echo $error['user'];
                                            }
                                            ?>
                                                </span>
                                                 
                                        </div>
                                        <div class="form-group">
                                        <label for="">Password</label><br>
                                            <input type="text" class="form-control form-control-user"
                                            name="pass">
                                            <span style="color: red;"><?php 
                                                if(!empty($error['pass'])) {
                                                echo $error['pass'];
                                            }
                                            ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                        <label for="">EMAIL</label><br>
                                            <input type="email" class="form-control form-control-user"
                                            name="email">
                                            <span style="color: red;"> <?php 
                                                if(!empty($error['email'])) {
                                                echo $error['email'];
                                            }
                                            ?>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                        <label for=""> ADmin(>0)</label><br>
                                            <input type="text" class="form-control form-control-user"
                                            name="role">
                                        </div>
                                        
                                        <label for=""> Ảnh</label><br>
                                            <input type="file" name="img" id="img">

                                        <div class="form-group">
                                        <label for=""> Địa Chỉ </label><br>
                                            <input type="text" class="form-control form-control-user"
                                            name="dress">
                                            <span style="color: red;"><?php 
                                                if(!empty($error['dress'])) {
                                                echo $error['dress'];
                                            }
                                            ?>
                                            </span>
                                        </div>
                                        
                                        <div class="form-group">
                                        <label for=""> Số Điện thoại </label><br>
                                            <input type="number" class="form-control form-control-user"
                                            name="phone">
                                            <span style="color: red;"><?php 
                                                if(!empty($error['phone'])) {
                                                echo $error['phone'];
                                            }
                                            ?>
                                            </span>
                                        </div>
                                        <input type="submit"  name="themmoi" class="btn btn-google btn-user btn-block" value="Tạo tài khoản">
                                        <a href="index.php?act=listaccount" class="btn btn-facebook btn-user btn-block">
                                            Danh Sách
                                        </a>
                                        <h3 style="color: blue;
                                        text-align:center">
                                        <?php
                                        if(isset($thongbao)&&($thongbao!=""))
                                        echo $thongbao;
                                            
                                            ?>
                                            </h3>
                                        
                                    </form>
                    
                                </div>
                            </div>
                        </div>
                    </div>