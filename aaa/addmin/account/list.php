
            
            <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"> <a target="_blank"
                            href="">Danh sách tài khoản</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="index.php?act=kh">Tạo Một tài khoản mới </a>
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form action="index.php?act=listaccount" method="post" enctype="multipart/form-data">
                          
                        
                          
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                    <th></th>
                                <th>Mã Tài khoản</th>
                                <th>user Name</th>
                                <th>Mật Khẩu</th>
                                <th>Ảnh</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số Điện Thoại</th>
                                <th>Vai trò</th>
                                <th>Công Cụ</th>
                            </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                <th></th>
                                <th>Mã Tài khoản</th>
                                <th>user Name</th>
                                <th>Mật Khẩu</th>
                                <th>Ảnh</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số Điện Thoại</th>
                                <th>Vai trò</th>
                                <th>Công Cụ</th>
                
                                    </tr>
                                </tfoot>
                                <?php

                        foreach($list_account as $ac){
                            extract($ac);
                            $suaac="index.php?act=suaac&id=".$id;
                            $xoaac="index.php?act=xoaac&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="name[]" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td><img src="'.$img.'" style="width: 100px;" alt=""></td>
                            <td>'.$email.'</td>
                            <td>'.$dress.'</td>
                            <td>'.$phone.'</td>
                            <td>'.$role.'</td>
                            <td>
                                <a href="'.$suaac.'">
                                <input type="button" value="Sửa"></a>
                                <a href="'.$xoaac.'" >
                                <input type="button" value="Xóa"></a>
                            </td>
                        </tr>';

                        }
                            ?>
                                        
                                    </tbody>
                                </table>
                                </form>

                            </div>
                          

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
