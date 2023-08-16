<div id="sns_content">
	<div class="container">
		<div class="row sns-content">
			<!-- left sidebar -->
						<!-- Main content -->
			<div class="sns-main col-md-12">
			    <section id="post-7" class="post-7 page type-page status-publish hentry">
        <form action="index.php?act=billcomfirm" method="post">
    <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
<div class="woocommerce-cart-form">
<div class="cart-collaterals">
	<div class="cart_totals ">

	
		<!-- <?php echo $id_bill ?> -->
		<?php 
		if(isset($bill)&&(is_array($bill))){
			extract($bill);
            $pttt=get_pttt($bill['bill_pttt']);
		}
		?>
	
	<h2>Số tiền cần thanh toán là : <?php echo $bill['total'] ?> USD</h2>
	<table cellspacing="0" class="shop_table shop_table_responsive">

		<tr class="cart-subtotal">
			<th>Cám ơn</th>
			<td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>Cám ơn bạn đã ủng hộ</span></td>
		</tr>

		
		
			
			<tr class="woocommerce-shipping-totals shipping">
	<th>Thông tin đơn hàng</th>
	<td data-title="Shipping">
		<ul>
            <li >Mã Đơn hàng PMM:<?php echo $bill['id']  ?></li>
            <li >Ngày đặt hàng:<?php echo $bill['ngaydathang']  ?> </li>
            <li >Phương thức thanh toán :
			<?php
			if($bill['bill_pttt'] == 1){
			?>
			Thanh toán khi nhận hàng
			<?php
			}
			 ?>
			 <?php
			if($bill['bill_pttt'] == 2){
			?>
			Thanh toán bằng thẻ tín dụng

			<?php
			}
			 ?>
			  <?php
			if($bill['bill_pttt'] == 3){
			?>
			Thanh toán bằng MoMo
			<?php
			}
			 ?>
				 </li>
            <li >Tổng đơn hàng :<?php echo $bill['total'] ?> </li>
        </ul>
		
					

			</td>
            
			<tr class="woocommerce-shipping-totals shipping">
            <th>Thông tin Người đặt Hàng</th>
	<td data-title="Shipping">
		<ul>
            <li >Tên :<?php echo $bill['bill_name']?> </li>
            <li >Địa chỉ:<?php echo $bill['bill_dress'] ?>  </li>
            <li >Email :<?php echo $bill['bill_email'] ?>  </li>
            <li >Số điện thoai :<?php echo $bill['bill_phone'] ?>
				 </li>
        </ul>
		
					

			</td>
</tr>

			
		
		
		

		
	</table>

	

	
</div>
</div>

</div>
</section>			</div>
	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
			<tr>
				<th class="product-remove">STT</th>
				<th class="product-thumbnail">Tên sản phẩm</th>
				<th class="product-name">Hinh</th>
				<th class="product-price">Đơn Giá</th>
				<th class="product-quantity">Số Lượng</th>
				<th class="product-subtotal">Thành Tiền</th>
			</tr>
    </thead>
		
				<tbody>

					<?php 

				 show_chitiet_bill($billct);
				?>
							
					</tbody>

				
			
			</div>


			</table>
			
</form>
<a href="index.php"><button type="submit" class="button"> Quay lại trang chủ</button></a>

			<!-- Right sidebar -->
					</div>
	</div>
</div>