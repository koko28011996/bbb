<div id="sns_content">
	<div class="container">
		<div class="row sns-content">
			<!-- left sidebar -->
						<!-- Main content -->
			<div class="sns-main col-md-12">
			    <section id="post-7" class="post-7 page type-page status-publish hentry">
			<h1 class="page-header">
            <span>Lịch Sử Mua Hàng</span>
        </h1>
        
        <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
<form class="woocommerce-cart-form" action="http://demo.snstheme.com/wp/vicky/cart/" method="post">
	
	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr>
				<th class="product-remove">Mã đơn hàng</th>
				<th class="product-quantity">Số Lượng</th>
				<th class="product-quantity">Tiền Thanh toán</th>
                <th class="product-quantity">Ngày đặt hàng</th>
                <th class="product-quantity">Địa chỉ người nhận</th>
				<th class="product-name">Phương Thức thanh toán</th>
                <th class="product-name">Trạng thái đơn hàng</th>


			</tr>
		</thead>
        <?php 
        if(is_array($listbill)){
            foreach($listbill as $bill){
                extract($bill);
                $ttdh=get_ttdh($bill['bill_status']);
                $pttt=get_pttt($bill['bill_pttt']);
                $slproduct=loadall_cart_count($bill['id']);
                echo '
                <tbody>
                <tr class="woocommerce-cart-form__cart-item cart_item">

						<td class="product-remove">
									 PM:'.$bill['id'].'		</td>


						<td class="product-quantity" data-title="Quantity">
						'.$slproduct.'	<div class="quantity">
			</div>
							</td>

						<td class="product-subtotal" data-title="Total">
							<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.$bill['total'].'</span></span>						</td>

                            <td class="product-name" data-title="Product">
                            '.$bill['ngaydathang'].'			</td>
                            <td class="product-name" data-title="Product">
                            '.$bill['bill_dress'].'			</td>
                            
                            <td class="product-name" data-title="Product">
					'.$pttt.'			</td>

                    <td class="product-name" data-title="Product">
					'.$ttdh.'			</td>
                    
                        </tr>
                </tbody>
				

                
                ';

            }
        }
        ?>
		
	</table>
	</form>
	<a href="index.php?act=index.php"><button type="submit" class="button"> Quay lại trang chủ</button></a>
	

	</div>

	
</div>
</div>

</div>
</section>			</div>
			<!-- Right sidebar -->
					</div>
	</div>
</div>