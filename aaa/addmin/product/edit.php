
<?php
if(is_array($sanpham)){
    extract($sanpham);
}
?>


<div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                                    <select name="id_sectors" >
                                <?php
                                $listdanhmuc=load_all();
                                    foreach($listdanhmuc as $dm){
                                        extract($dm);
                                            if($id_sectors==$dm['id'])
                                            echo '<option value="'.$id.'" selected> '.$name.'</option>';
                                            else  echo '<option value="'.$id.'" selected> '.$name.'</option>';
                                        }
                                        ?>
        

                                        </select><br>
                                        <div class="form-group">
                                        <label for="">Tên Sản phẩm </label><br>
                                            <input type="text " class="form-control form-control-user"
                                                aria-describedby="emailHelp"  name="product_name" value="<?php echo $sanpham['product_name'] ?>">
                                                 
                                        </div>
                                        <div class="form-group">
                                        <label for="">Đơn giá</label><br>
                                            <input type="number" class="form-control form-control-user"
                                            name="product_price" value="<?php echo $sanpham['product_price'] ?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="">Giảm giá</label><br>
                                            <input type="number" class="form-control form-control-user"
                                            name="discount" value="<?php echo $sanpham['discount'] ?>">
                                        </div>
                                        
                                        <label for=""> Ảnh sản phẩm</label><br>
                                            <input type="file" name="product_img" id="product_img" value="<?php echo $sanpham['product_img'] ?>">
                                            
                                            <div class="form-group">
                                            <label for="">mota</label><br>
                                        <textarea name="origin" id="" cols="60" rows="5" value="<?php echo $sanpham['origin'] ?>"></textarea><br>
                                                            </div>
                                        

                                        <div class="form-group">
                                        <label for="">Số lượt xem </label><br>
                                            <input type="number" class="form-control form-control-user"
                                            name="view" value="<?php echo $sanpham['view'] ?>">
                                        </div>
                                        
                                        <input type="hidden" name="id" value=" <?php echo $sanpham['id'] ?>">
                                        <input type="submit"  name="capnhat" class="btn btn-google btn-user btn-block" value="Cập Nhật">
                                        <a href="index.php?act=listdssp" class="btn btn-facebook btn-user btn-block">
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