
<div id="sns_content">
	<div class="container">
		<div class="row sns-content">
			<!-- left sidebar -->
						<!-- Main content -->
			<div class="sns-main col-md-12">
			    <!-- <section id="post-8" class="post-8 page type-page status-publish hentry"> -->
				<div id="post-8" class="post-8 page type-page status-publish hentry">
			<h1 class="page-header">
            <span>Checkout</span>
</h1>

        <div class="vc_row wpb_row vc_row-fluid vc_custom_1503649069880"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><div class="woocommerce-form-login-toggle">
	
	<div class="woocommerce-info">
		Bạn đã có tài khoản? <a href="index.php?act=dangnhap" class="showlogin">Kích vô đây để đăng nhập</a>	</div>
</div>
<div class="woocommerce-form-coupon-toggle">
	
	<div class="woocommerce-info">
		Bạn có phiếu Giảm giá<a href="#" class="showcoupon">Kích vô đây để kích hoạt</a>	</div>
</div>

<div class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

	<p>If you have a coupon code, please apply it below.</p>

	<p class="form-row form-row-first">
		<input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="" />
	</p>

	<p class="form-row form-row-last">
		<button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
	</p>

	<div class="clear"></div>
</div>
<div class="woocommerce-notices-wrapper"></div>
<!-- form thanh toans -->
 

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<div class="woocommerce-billing-fields">
		<h3>Billing details		
		</h3>
<form action="index.php?act=billcomfirm" method="post" onsubmit="return formvalidate();" enctype="multipart/form-data">
<?php
		if(isset($_SESSION['user'])){
			$name=$_SESSION['user']['user'];
			$dress=$_SESSION['user']['dress'];
			$email=$_SESSION['user']['email'];
			$phone=$_SESSION['user']['phone'];
			
		}else{
			$name="";
			$dress="";
			$email="";
			$phone="";
		}
		
			
		?>
		
		
	<div class="woocommerce-billing-fields__field-wrapper">
		<p class="form-row form-row-first validate-required">
        <label for="billing_first_name" class="">Tên Của Bạn&nbsp<span style="color: red;" id="errorname"></span>;
        <abbr class="required" title="required">*</abbr> </label>
        <span class="woocommerce-input-wrapper" >
            <input type="text" class="input-text"  name="bill_name" id="name"  value="<?php echo $name ?>" />
	
			
            
    </p>	

    <p class="form-row form-row-first validate-required"  data-priority="10">
        <label for="billing_first_name" class="">Số Điện Thoại &nbsp<span style="color: red;" id="errorphone"></span>;
        <abbr class="required" title="required">*</abbr> </label>;
        <abbr class="required" title="required">*</abbr> </label>
       
        <span class="woocommerce-input-wrapper">
            <input type="number" class="input-text " name="bill_phone" id="phone"  value="<?php echo $phone ?>"  />
            
    </p>
    <p class="form-row form-row-first validate-required" >
        <label for="billing_first_name" class="">Địa chỉ &nbsp<span style="color: red;" id="errordress"></span>;
        <abbr class="required" title="required">*</abbr> </label>;
        <abbr class="required" title="required">*</abbr> </label>
       
        <span class="woocommerce-input-wrapper">
            <input type="text" class="input-text " name="bill_dress" id="dress"  value="<?php echo  $dress ?>"  />
            
    </p>
    <p class="form-row form-row-first validate-required">
        <label for="billing_first_name" class="">E mail&nbsp<span style="color: red;" id="erroremail"></span>;
        <abbr class="required" title="required">*</abbr> </label>;
        <abbr class="required" title="required">*</abbr> </label>
       
        <span class="woocommerce-input-wrapper">
            <input type="email" class="input-text" name="bill_email" id="email" value=" <?php echo $email ?>"/>
            
    </p>
	<p class="form-row form-row-first validate-required">
	<table>

                    <tr>
                        <td><input type="radio" value="1" name="bill_pttt" id="pttt" checked="checked" >Nhận Hàng trả tiền</td>
                        <td><input type="radio" value="2" name="bill_pttt" id="pttt"  >Thanh toán bằng thẻ tín dụng</td>
                        <td><input type="radio" value="3" name="bill_pttt" id="pttt"  >Thanh toán bằng MOMO</td>
                    </tr>
                </table>
		</p>

	</div>
	

	

	</div>
	
	

		
		
	
	<!-- <h3 id="order_review_heading">Your order</h3>
	<div class="woocommerce-cart-form">
	<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
	<?php
	viewcart();
	?>
	</div> -->
	
	
	<input type="submit" onclick="formvalidate();" class="button" name="dythanhtoan" value="Thanh Toán">
	

	</form>
	<script>
	
		function formvalidate() {
			var name = document.getElementById('name').value;
			var errorname = document.getElementById('errorname');
			if(name == '' || name == null){
				errorname.innerHTML="Ho ten khong duoc bo trong";
			}else{
				errorname.innerHTML='';
			}
			var phone = document.getElementById('phone').value;
			var errorphone = document.getElementById('errorphone');
			var regexphone = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
			if(phone == '' || phone == null){
				errorphone.innerHTML="Vui lòng nhập số điện thoại";
			}else if(!regexphone.test(phone)){
				errorphone.innerHTML="";
				
			}else{
				errorphone.innerHTML='';
			}
			var dress = document.getElementById('dress').value;
			var errordress = document.getElementById('errordress');
			if(dress == '' || dress == null){
				errordress.innerHTML="Vui lòng nhập Địa chỉ người nhận";
			}else{
				errordress.innerHTML='';
			}
			var email = document.getElementById('email').value;
			var erroremail = document.getElementById('erroremail');
			var regexemail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(email == '' || email == null){
				erroremail.innerHTML="Vui lòng nhập email của bạn";
			}else if(!regexemail.test(email)){
				erroremail.innerHTML="email không hợp lệ";
				
			}else{
				erroremail.innerHTML='';
			}
			if(name && phone && dress && email){
				return true;

			}else{
				
			}
			return false;
			
		}
		</script>
	

	
	<!-- xoa song -->

	


</div></div></div></div></div>
<!-- </section>	 -->
	</div>
		</div>
			<!-- Right sidebar -->
					</div>
	</div>
</div>