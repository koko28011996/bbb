
            <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="index.php?act=lsp" method="post">
                                        <div class="form-group">
                                        <label for="">Mã Loại Hàng</label><br>
                                            <input type="text " class="form-control form-control-user"
                                                aria-describedby="emailHelp"  name="id"
                                                 disabled>
                                               
                                                                    </div>
                                        <div class="form-group">
                                        <label for="">Tên loại Hàng</label><br>
                                        <span style="color: red;"><?php
                                            if(!empty($error['name'])) {
                                                echo $error['name'];
                                            }
                                            ?>
                                        </span>

                                            <input type="text" class="form-control form-control-user"
                                                 name="name">
                                        </div>
                                        <input type="submit"  name="themmoi" class="btn btn-google btn-user btn-block" value="Thêm lọai Hàng Mới">
                                        <a href="index.php?act=listsp" class="btn btn-facebook btn-user btn-block">
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