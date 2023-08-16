
            <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"> <a target="_blank"></a>
                           

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách lọai sản phẩm</h6>
                        </div>
                        <div class="card-body">
                        <a href="index.php?act=lsp" class="">Thêm Lọai Hàng Mới </a>
                            <div class="table-responsive">
                            <form action="index.php?act=listsp" method="post">
                          
                        
                          </form>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th></th>
                                        <th>Mã Loại</th>
                                        <th>Name</th>

                                        <th>Công cụ</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th></th>
                                        <th>Mã Loại</th>
                                        <th>Name</th>
                                        <th>Công cụ</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                        <?php

                                    foreach($listdanhmuc as $dm){
                                        extract($dm);
                                        $suadm="index.php?act=suadm&id=".$id;
                                        $xoadm="index.php?act=xoadm&id=".$id;
                                        echo '<tr>
                                        <td><input type="checkbox" name="name[]" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>
                                            <a href="'.$suadm.'"> 
                                            <input type="button" value="Sửa"></a>
                                            <a href="'.$xoadm.'" >
                                            <input type="button" value="Xóa">
                                            </a>
                                        </td>
                                    </tr>';

                                    }
                                    ?>

                                        </tr>
                                        
                                    </tbody>
                                </table>

                            </div>
                            

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
