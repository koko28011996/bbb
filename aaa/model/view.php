<?php
function viewcart(){
    global $img_path;
    if((isset($_SESSION['giohang']))&&(count($_SESSION['giohang'])>0)){
        echo '
        <thead>
        <tr>
            <th class="product-remove">STT</th>
            <th class="product-thumbnail">Tên sản phẩm</th>
            <th class="product-name">Hinh</th>
            <th class="product-price">Đơn Giá</th>
            <th class="product-quantity">Số Lượng</th>
            <th class="product-subtotal">Thành Tiền</th>

        </tr>
    </thead>
        ';
        $i=0;
        $tong=0;
        foreach($_SESSION['giohang'] as $item){
            $img=$img_path;
            $tt= $item[3] * $item[4];
            $tong+=$tt;
            $img=$img_path.$item[2];
            echo '
            <tbody>
        
                            <tr class="woocommerce-cart-form__cart-item cart_item">
                            <td>'.($i+1).'</td>

                            <td class="product-name" data-title="Product">
                            '.$item[1].'
                            </td>

                            <td class="product-thumbnail">
                            <img src="'.$item[2].'" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">					</td>

                    

                    <td class="product-price" data-title="Price">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>'.$item[3].'</span>						</td>

                    <td class="product-quantity" data-title="Quantity">
                        <div class="quantity">	
                '.$item[4].'
                    </div>
    
                        </td>

                    <td class="product-subtotal" data-title="Total">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>'.$tt.'</span>						</td>
                        </tr>
                        
                </tbody>
            ';
            $i++;
        }
        
        echo '</table>';
        echo '
        </div>


<div class="cart-collaterals">
<div class="cart_totals ">


<h2>Tiền Thanh toán</h2>

<table cellspacing="0" class="shop_table shop_table_responsive">

    <tr class="cart-subtotal">
        <th>Tổng tiền</th>
        <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>'.$tong.'</span></td>
    </tr>

    
    
        
        <tr class="woocommerce-shipping-totals shipping">
<th>Shipping</th>
<td data-title="Shipping">
     <a href="">Chuyển phát Nhanh</a> hoặc  <a href="">Chuyển Phát Chậm></a>

        </td>
</tr>

        
    
    
    
    
    <tr class="order-total">
        <th>Tổng Tiền Bao gồm cả phí vận chuyển</th>
        <td data-title="Total"><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>'.$tong.'</span></strong> </td>
    </tr>

    
</table>




</div>
</div>

</div>
</section>			</div>
        ';
    
}
}
function tongdonhang(){

    
    $tong=0;
        foreach($_SESSION['giohang'] as $item){
            $tt= $item[3] * $item[4];
            $tong+=$tt;
        }
        return $tong;
}
//  function insert_bill($name,$dress,$phone,$email,$pttt,$ngaydathang,$tongdonhang){
//      $sql = "INSERT INTO `bill`(`bill_name`, `bill_dress`, `bill_phone`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`) VALUES ('$name','$dress','$phone','$email','$pttt','$ngaydathang','$tongdonhang')";
//      return pdo_execute_return_lastInsertId($sql);

    
//  }
// load id_product xuat hiện nhiều lần nhất trong bảng viewc
function topproduct(){
    $sql = "SELECT name,img,price,id_product, SUM(quantity) AS total_sales
    FROM cart
    GROUP BY name,img,price,id_product
    ORDER BY total_sales DESC limit 4";
$listsanpham=pdo_query($sql);
return $listsanpham;
}



function insert_bill($iduser,$name,$dress,$phone,$email,$pttt,$ngaydathang,$tongdonhang){
    $conn=pdo_get_connection();
    $sql = "INSERT INTO `bill`(`iduser`,`bill_name`, `bill_dress`, `bill_phone`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`) VALUES ('$iduser','$name','$dress','$phone','$email','$pttt','$ngaydathang','$tongdonhang')";
    $conn->exec($sql);
    return $conn->lastInsertId();
    
}

 function insert_cart($id_roduct,$name,$img,$quantity,$price,$id_bill){
    $sql = "INSERT INTO `cart`(`id_product`, `name`, `img`, `price`, `quantity`, `id_bill`) VALUES ('$id_roduct','$name','$img','$quantity','$price',$id_bill)";
    return pdo_execute($sql);

}
function loadone_bill($id){
    $sql="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}


function load_all_cart($id_bill){
    $sql="select * from cart where id_bill=".$id_bill;
    $cart=pdo_query($sql);
    return $cart;

}

function show_chitiet_bill($listbill){
    global $img_path;
    $i=0;
    $tong=0;
    // if((isset($_SESSION['giohang']))&&(count($_SESSION['giohang'])>0))
        echo '
        <thead>
      
    </thead>
        ';
        
        foreach($listbill as $item){
            $img=$img_path;
            $tt= $item['quantity'] * $item['price'];
            $tong+=$tt;
            $img=$img_path.$item[2];
            echo '
            <tbody>
        
                            <tr class="woocommerce-cart-form__cart-item cart_item">
                            <td>'.($i+1).'</td>

                            <td class="product-name" data-title="Product">
                            '.$item['name'].'
                            </td>

                            <td class="product-thumbnail">
                            <img src="'.$item['img'].'" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">					</td>

                    

                    <td class="product-price" data-title="Price">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>'.$item['price'].'</span>						</td>

                    <td class="product-quantity" data-title="Quantity">
                        <div class="quantity">	
                '.$item['quantity'].'
                    </div>
    
                        </td>

                    <td class="product-subtotal" data-title="Total">
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>'.$tt.'</span>						</td>
                        </tr>
                        
                </tbody>
            ';
            $i++;
        }
        
        echo '</table>';
        echo '
        </div>


<div class="cart-collaterals">

</div>

</div>
</section>			</div>
        ';
    

}

function load_all_bill($iduser){
    $sql="select * from bill where iduser=".$iduser;
    $listbill=pdo_query($sql);
    return $listbill;
}
function loadall_bill(){
    $sql = "select * from `bill` order by id";
    $listbill=pdo_query($sql);
    return $listbill;
}

function get_ttdh($n){
    switch($n){
    case '1':
    $tt="Đang Giao ";
    break;
    case '2':
    $tt=" Đã Nhận Được Hàng ";
    break;
    default:
    $tt="Đang chờ xác nhận";
    break;
}
return $tt;
}
function get_pttt($n){
    switch ($n){
        case '1':
        $pt= "Thanh Toán Khi nhận Hàng";
        break;
        case '2':
            $pt= "Thanh Toán Bằng Ví Momo";
            break;
      default:
      $pt="Chuyển Khoản";
      break;
    
            
        

    }
    return $pt;
}
// dem so luong mat hang
function loadall_cart_count($id_bill){
    $sql="select * from cart where id_bill=".$id_bill;
    $listbill=pdo_query($sql);
    return count($listbill);


}
// 
function load_all_bill_ad($pm="",$iduser=0){
    $sql = "SELECT * FROM bill Where 1";
     $sql="select * from bill where 1";
     if($iduser>0){ 
     $sql.=" AND iduser=.$iduser";
     }
     if($pm!=""){ 
        $sql.=" AND id like '%".$pm."%'";
        }
     $sql.=" order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function updatecart($id,$quantity){
    $sql = " UPDATE `cart` SET quantity='".$quantity."' WHERE id=".$id;
    pdo_execute($sql);
}
function update_dh($id,$ttdh){
    $sql = "UPDATE `bill` SET `bill_status`='$ttdh' WHERE id=".$id;
    pdo_execute($sql);
}



?>