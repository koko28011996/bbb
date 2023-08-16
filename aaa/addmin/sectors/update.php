
                            <?php
                if(is_array($danhmuc)){
                    extract($danhmuc);
                }

                ?>
            <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="index.php?act=updatedm" method="post">
                                        <div class="form-group">
                                        <label for="">Mã Loại Hàng</label><br>
                                            <input type="text " class="form-control form-control-user"
                                                aria-describedby="emailHelp"  name="id" value="<?php echo $id ?>"disabled>
                                        </div>
                                        <div class="form-group">
                                        <label for="">Tên loại Hàng</label><br>

                                            <input type="text" class="form-control form-control-user"
                                                 name="name" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                                        </div>
                                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                                        <input type="submit"  name="editpro" class="btn btn-google btn-user btn-block" value="Cập Nhật">
                                        <a href="index.php?act=listsp" class="btn btn-facebook btn-user btn-block">
                                            Danh Sách
                                        </a>
                                        <?php
                                        if(isset($thongbao)&&($thongbao!=""))
                                        echo $thongbao;
                                            
                                            ?>
                                    <?php
                                    if(isset($thongbao)&&($thongbao!=""))
                                    echo $thongbao;
                                            
                                    ?>
                                    </form>
                                  
                                </div>
                    
                                </div>
                            </div>
                        </div>
                    </div>