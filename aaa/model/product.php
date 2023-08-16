<?php



function insert_product($id_sectors, $product_name,$product_price,$filename,$origin,$view,$date,$discount){
$sql= "INSERT INTO `product`(`id_sectors`, `product_name`, `product_price`, `product_img`, `origin`, `view`,`date`,`discount`) VALUES ('$id_sectors','$product_name','$product_price','$filename','$origin','$view','$date','$discount')";
    pdo_execute($sql);
}

function load_allsp(){
    $sql = "select * from `product` order by id";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id){
    $sql="select * from product where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function loadsanpham_cungloai($id){
    $sql="select * from product where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}


function xoasp($id){
    $sql= "DELETE FROM `product` WHERE id=".$id;
    
    pdo_execute($sql);
}
function search($pm="",$id_sectors=0){
    $sql = "select * from product where 1";
    if ($pm!="") {
    $sql.=" and product_name like '%$pm%'";
}
    if($id_sectors>0){
    $sql.=" and id_sectors='$id_sectors'";
}
    $sql.=" order by id";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sp($product_name,$product_price,$origin,$view,$discount,$id){
   $sql= "UPDATE `product` SET `product_name`='$product_name',`product_price`='$product_price',`origin`='$origin',`view`='$view',`discount`='$discount' WHERE id=".$id;
   pdo_execute($sql);
   
        }

function loadall_sanpham_home(){
 $sql = " select * from product order by id desc limit 4"; 
$listsanpham=pdo_query($sql);
return $listsanpham;
}
function loadall_sanpham_home6(){
    $sql = " select * from product order by id desc limit 6"; 
   $listsanpham=pdo_query($sql);
   return $listsanpham;
   }
function discount(){
    $sql = "SELECT * FROM product WHERE discount > 0 order by id desc limit 4";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top4(){
    $sql = " select * from product order by view desc limit 4";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
    
}
function load_sanpham_cungloai($id,$id_sectors){
    $sql="select * from product where id_sectors=".$id_sectors." AND id !=".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_sp_theoloai($id_sectors) {
    $sql = "SELECT * FROM product WHERE id_sectors=".$id_sectors;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
    
}
function load_ten_dm($id_sectors){
    if($id_sectors>0){
    $sql="select * from sectors where id=".$id_sectors;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
}else{
    return "";
}

}
// update luot xem san pham
function view($id){
    $sql = "UPDATE product SET view=view +1 WHERE id=".$id;
    $conn=pdo_get_connection();
  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();
    }

?>