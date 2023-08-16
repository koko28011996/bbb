<div id="sns_content">
	<div class="container">
		<div class="row sns-content">
			<!-- left sidebar -->
						<!-- Main content -->
			<div class="sns-main col-md-12">
			    <section id="post-7" class="post-7 page type-page status-publish hentry">
			<h1 class="page-header">
            <span>Cart</span>
        </h1>
        
        <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
<div class="woocommerce-cart-form">
<form action="index.php?act=updatedohang" method="post">

	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<?php
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
				<th class="product-subtotal">Hành Động</th>

			</tr>
		</thead>
			';
			$i=0;
			$tong=0;
			foreach($_SESSION['giohang'] as $item){
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
						<form action="index.php?act=updatedohang" method="post">

							<div class="quantity">
						<input type="number" min="1" max="9" class="input-text qty text" value="'.$item[4].'" name="quantity['.$item[0].']" required>
						<input type="submit" name="capnhat" value="capnhat">
						</div>
						

						</form>
						
		
							</td>

						<td class="product-subtotal" data-title="Total">
							<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>'.$tt.'</span>						</td>
					<td><a href="index.php?act=delcart&i='.$i.'">Xóa</a></td>
					

							</tr>
							
					</tbody>
				';
				$i++;
			}
			
			
			echo '</table>
			

			';
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
		Chuyển phát Nhanh hoặc Chuyển Phát Chậm
		
					
<form class="woocommerce-shipping-calculator" action="" method="post">

	<a href="#" class="shipping-calculator-button">Tính toán phí vận chuyển</a>
	
		
</form>

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
<table>
			<tr>
				<td colspan="6" class="actions">

								<div class="coupon">
							<label for="coupon_code">Coupon:</label>
					<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
					<button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
					<a href="index.php?act=delcart"><button type="submit" class="button" name="delcart">Xóa Dỏ Hàng</button></a>
					<a href="index.php?act=index.php"><button type="submit" class="button">Tiếp tục Mua Hàng</button></a>
					<a href="index.php?act=bill"><button type="submit" class="button">Thanh Toán</button></a>
						</div>
											</div>
			</tr>
			</table>
			';
		}else{
			echo '
			<div class="woocommerce"><div class="woocommerce-notices-wrapper">
			</div>
			<p class="cart-empty woocommerce-info">Bạn không có sản phẩm nào trong dỏ hàng.</p>
			<div class="return-to-shop">
			
			

			</div>
			<a href="index.php" class="button">quay lại trang chủ</a>
		</div>';
		}

		?>
		
		
	
	

			
	
	
			<!-- Right sidebar -->
					</div>
					
	</div>
	
</div>
