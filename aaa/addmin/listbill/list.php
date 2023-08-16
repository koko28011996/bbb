
            
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>
<p class="mb-4"> <a target="_blank"
href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6>
</div>
<div class="card-body">
<div class="table-responsive">
<form action="index.php?act=dh" method="post" enctype="multipart/form-data">
                            <input type="search" name="pm">
                            <input type="submit" name="listoke">
                            
                          
                        
                        </form>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
            
                                <th></th>
                                <th>Mã Bill</th>
                                <th>Khách Hàng</th>
                                <th>Email</th>
                                <th>Số Lượng Đơn Hàng</th>
                                <th>Giá trị đơn hàng</th>
                                <th>Tình Trạng đơn hàng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Công cụ</th>


                                
                               
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th></th>
                                <th>Mã Bill</th>
                                <th>Khách Hàng</th>
                                <th>Email</th>

                                <th>Số Lượng Đơn Hàng</th>
                                <th>Giá trị đơn hàng</th>
                                <th>Tình Trạng đơn hàng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Công cụ</th>

                                
                                    
                                    
                        
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                     <?php
                

                foreach($listbill as $bill){
                    extract($bill);
                    $suadh="index.php?act=suadh&id=".$id;
                    $ttdh=get_ttdh($bill['bill_status']);
                    $pttt=get_pttt($bill['bill_pttt']);
                    $slproduct=loadall_cart_count($bill['id']);
                  
                    echo '<tr>
                   
                    <td><input type="checkbox" name="name[]" id=""></td>
                    <td>'.$bill['id'].'</td>
                    <td>'.$bill['bill_name'].'</td>
                    <td>'.$bill['bill_email'].'</td>
                    <td>'.$slproduct.'</td>
                    <td>'.$bill['total'].'</td>
                    <td>
                                <option value="" >'.$ttdh.'</option>
                    <td>'.$pttt.'</td>
                    <td> <a href="'.$suadh.'" >
                    <input type="button" value="Sửa"></a></td>
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