

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>
<p class="mb-4">
<a target="_blank"
href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Danh sách bình luận</h6>
</div>
<div class="card-body">
<div class="table-responsive">
<form action="index.php?act=listsp" method="post">
                          
                        
                        </form>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
                                <th></th>
                                <th>Mã Bình luận</th>
                                <th>Mã tài khoản</th>
                                <th>Mã sản phẩm </th>
                                <th>Ngày bình luận </th>
                                <th>Nội dung </th>
                                <th>Thao tác</th>
                            </tr>
        </thead>
        <tfoot>
        <tr>
                                <th></th>
                                <th>Mã Bình luận</th>
                                <th>Mã tài khoản</th>
                                <th>Mã sản phẩm </th>
                                <th>Ngày bình luận </th>
                                <th>Nội dung </th>
                                <th>Thao tác</th>

                            </tr>
        </tfoot>
        <tbody>
            <tr>
            <?php

foreach($listbinhluan as $bl){
    extract($bl);
    $xoabl="index.php?act=xoabl&id=".$id;
    echo '<tr>
    <td><input type="checkbox" name="name[]" id=""></td>
    <td>'.$id.'</td>
    <td>'.$id_user.'</td>
    <td>'.$id_product.'</td>
    <td>'.$date_comment.'</td>
    <td>'.$Content.'</td>
    <td>
        
        <a href="'.$xoabl.'" >
        <input type="button" value="Xóa"></a>
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
