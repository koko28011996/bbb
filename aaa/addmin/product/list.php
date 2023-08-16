
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4"> <a target="_blank"
href=""></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
</div>
<div class="card-body">
<a href="index.php?act=sp">Thêm sản phẩm mới</a>
<form action="index.php?act=listdssp" method="post" enctype="multipart/form-data">

                        <input type="text" name="pm">
                            <select name="id_sectors">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                  foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'"> '.$name.'</option>';
                                }
                                ?>
                            </select>
                            <input type="submit" name="listok" value="Tim kiem">
                          
                        
                        </form>
<div class="table-responsive">    
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
            <th></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên san phẩm</th>
                                <th>Đơn giá</th>
                                <th>Gia Gia</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Số lượt xem</th>
                                <th>Ngày Đăng</th>
                                <th>Công cụ</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            <th></th>
                                <th>Mã sản phẩm</th>
                                <th>Tên san phẩm</th>
                                <th>Đơn giá</th>
                                <th>Gia Gia</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Số lượt xem</th>
                                <th>Ngày Đăng</th>
                                <th>Công cụ</th>
                
            </tr>
        </tfoot>
        <tbody>
            <tr>
            <?php

            foreach($listsanpham as $sp){
                extract($sp);
                $suasp="index.php?act=suasp&id=".$id;
                $xoasp="index.php?act=xoasp&id=".$id;
                echo '<tr>
                <td><input type="checkbox" name="name[]" id=""></td>
                <td>'.$id.'</td>
                <td>'.$product_name.'</td>
                <td>'.$product_price.'</td>
                <td>'.$discount.'</td>
                <td><img src="'.$product_img.'" style="width: 100px;" alt=""></td>
                <td>'.$origin.'</td>
                <td>'.$view.'</td>
                <td>'.$date.'</td>
                <td>
                    <a href="'.$suasp.'">
                    <input type="button" value="Sửa"></a>
                    <a href="'.$xoasp.'" >
                    <input type="button" value="Xóa"></a>
                </td>
            </tr>';

            }
            ?>
                        
                    </tbody>
                </table>
            </div>
            </div>
            </div>

            </div>
            <!-- /.container-fluid -->

            </div>