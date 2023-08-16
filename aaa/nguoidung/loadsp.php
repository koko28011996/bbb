<?php
  
  foreach( $loaddm4 as $dm){
	  extract($dm);
  }
  ?>
    <div id="sns_breadcrumbs" class="wrap">
        <div class="container">
            <div id="breadcrumbs" class="breadcrumbs"><a class="home" href="index.php" title="Home">Home</a><span class="navigation-pipe"><i class="fa fa-angle-right"></i></span><?php echo $dm['name'] ?></div>        </div>
    </div>
<div id="sns_content">
	<div class="container">
		<div class="row sns-content sns-woocommerce-page">
			<!-- left sidebar -->
				<div class="col-md-3 sns-left">
		<aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><h3 class="widget-title"><span>Thể Loại</span></h3>
<ul class="product-categories">
	<?php 
	foreach($load6dm as $dm){
		extract ($dm);
		$linkdm="index.php?act=loadsp&id_sectors=".$id;
		echo '
		<li class="cat-item cat-item-39">
	 	<a href="'.$linkdm.'">'.$name.'</a> <span class="count">(4)</span></li>
		
		';
	}
	?>

</ul></aside>
<aside id="yith-woo-ajax-reset-navigation-2" class="widget yith-woocommerce-ajax-product-filter yith-woo-ajax-reset-navigation yith-woo-ajax-navigation woocommerce widget_layered_nav" style="display:none"></aside><aside id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter"><h3 class="widget-title"><span>Price</span></h3><form method="get" action="http://demo.snstheme.com/wp/vicky/product-category/concealer/">
			<div class="price_slider_wrapper">
				<div class="price_slider" style="display:none;"></div>
				<div class="price_slider_amount" data-step="10">
					<input type="text" id="min_price" name="min_price" value="10" data-min="10" placeholder="Min price" />
					<input type="text" id="max_price" name="max_price" value="50" data-max="50" placeholder="Max price" />
					<button type="submit" class="button">Bộ lọc</button>
					<div class="price_label" style="display:none;">
						Giá: <span class="from"></span> &mdash; <span class="to"></span>
					</div>
					
					<div class="clear"></div>
				</div>
			</div>
		</form></aside><aside id="yith-woo-ajax-navigation-2" class="widget yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav"><h3 class="widget-title"><span>Kích cỡ</span></h3><ul class='yith-wcan-list yith-wcan '><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_size=m">M</a></li><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_size=s">S</a></li><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_size=xl">XL</a></li></ul></aside><aside id="yith-woo-ajax-navigation-3" class="widget yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav"><h3 class="widget-title"><span>Màu Sắc</span></h3><ul class='yith-wcan-color yith-wcan yith-wcan-group '><li ><a  style="background-color:#5194ca;" href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_color=blue" title="Blue" >Xanh</a><li ><a  style="background-color:#dba694;" href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_color=orange" title="Orange" >Cam</a><li ><a  style="background-color:#ef5d4c;" href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_color=pink" title="Pink" >Hồng</a><li ><a  style="background-color:#e0e177;" href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_color=yellow" title="Yellow" >Vàng</a></ul></aside><aside id="yith-woo-ajax-navigation-4" class="widget yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav"><h3 class="widget-title"><span>Thương Hiệu</span></h3><ul class='yith-wcan-list yith-wcan '><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_brand=chanel">Chanel</a></li><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_brand=dior">Dior</a></li><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_brand=lucci">Lucci</a></li></ul></aside><aside id="woocommerce_product_tag_cloud-3" class="widget woocommerce widget_product_tag_cloud"><h3 class="widget-title"><span>Thẻ</span></h3><div class="tagcloud"><a href="http://demo.snstheme.com/wp/vicky/product-tag/bush/" class="tag-cloud-link tag-link-67 tag-link-position-1" style="font-size: 8pt;" aria-label="bush (1 product)">bush</a>
<a href="" class="tag-cloud-link tag-link-42 tag-link-position-2" style="font-size: 16.75pt;" aria-label="Ecommerce (8 products)">Thương Mại điện tử</a>
<a href="" class="tag-cloud-link tag-link-64 tag-link-position-3" style="font-size: 8pt;" aria-label="Eyelid claw (1 product)">Vuốt Mí Mắt</a>
<a href="" class="tag-cloud-link tag-link-40 tag-link-position-4" style="font-size: 17.961538461538pt;" aria-label="Face cream (10 products)">Kem Dưỡng da</a>
<a href="" class="tag-cloud-link tag-link-63 tag-link-position-5" style="font-size: 10.423076923077pt;" aria-label="Face skin (2 products)">Sữa Rửa Mặt</a>
<a href="" class="tag-cloud-link tag-link-53 tag-link-position-6" style="font-size: 13.384615384615pt;" aria-label="lipsticks (4 products)">Son Môi</a>
<a href="" class="tag-cloud-link tag-link-18 tag-link-position-7" style="font-size: 22pt;" aria-label="Organic (21 products)">Hữu Cơ</a>
<a href="" class="tag-cloud-link tag-link-41 tag-link-position-8" style="font-size: 17.423076923077pt;" aria-label="Skin care (9 products)">Chăm Sóc da</a></div></aside><div class="postwcode-widget"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div  class="wpb_single_image wpb_content_element vc_align_center   banner11">
		
		<figure class="wpb_wrapper vc_figure">
			<a href="#" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="270" height="335" src="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/woo-banner-1.jpg" class="vc_single_image-img attachment-full" alt="" srcset="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/woo-banner-1.jpg 270w, http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/woo-banner-1-218x270.jpg 218w" sizes="(max-width: 270px) 100vw, 270px" /></a>
		</figure>
	</div>
</div></div></div></div></div>	</div>
				<!-- Main content -->
			<div class="sns-main col-md-9 main-left">
			    
	<div class="listing-product-main"><div class="listing-product-wrap">            <div class="cat-slideshow">
                
			<!-- START Category Slider REVOLUTION SLIDER 6.1.0 --><p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_2_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0">
				<rs-module id="rev_slider_2_1" style="display:none;" data-version="6.1.0">
					<rs-slides>
						<rs-slide data-key="rs-2" data-title="Slide" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
							<img src="//demo.snstheme.com/wp/vicky/wp-content/plugins/revslider/public/assets/assets/transparent.png" title="Aenean mi sapien eget" class="rev-slidebg" data-no-retina>
<!--
							--><rs-layer
								id="slider-2-slide-2-layer-1" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:c;y:c;"
								data-text="l:22;a:inherit;"
								data-dim="w:1050px;h:350px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;st:0;"
								data-frame_999="o:0;tp:600;st:w;sR:8700;"
								style="z-index:5;"
							><img src="//demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/slider-cat.jpg" width="870" height="290" data-no-retina> 
							</rs-layer><!--
-->						</rs-slide>
					</rs-slides>
					<rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
				</rs-module>
				<script type="text/javascript">
					setREVStartSize({c: 'rev_slider_2_1',rl:[1240,1200,1024,490],el:[],gw:[1050],gh:[350],layout:'fullwidth',mh:"0"});
					var	revapi2,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						if(tpj("#rev_slider_2_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_2_1");
						}else{
							revapi2 = tpj("#rev_slider_2_1").show().revolution({
								jsFileLocation:"//demo.snstheme.com/wp/vicky/wp-content/plugins/revslider/public/assets/js/",
								visibilityLevels:"1240,1200,1024,490",
								gridwidth:1050,
								gridheight:350,
								minHeight:"",
								spinner:"spinner0",
								responsiveLevels:"1240,1200,1024,490",
								disableProgressBar:"on",
								navigation: {
									onHoverStop:false
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
            </div>
                <ul class="sub-cats">
                </ul>
			<h1 class="page-title">
				<?=$tendm?>
			</h1>
			<!-- load  ten danh muc san pham -->
			<div class="toolbar toolbar-top"> <ul class="mode-view pull-left">
            <li class="grid1">
                <a class="grid active" data-mode="grid" href="#" title="Grid">
                    <span>Grid</span>
                </a>
            </li>
            <li class="list1">
                <a class="list" data-mode="list" href="#" title="List">
                    <span>List</span>
                </a>
            </li>
        </ul>
        <div class="woocommerce-notices-wrapper"></div><p class="woocommerce-result-count">
	Showing all 4 results</p>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby" aria-label="Shop order">
					<option value="menu_order"  selected='selected'>Default sorting</option>
					<option value="popularity" >Sort by popularity</option>
					<option value="rating" >Sort by average rating</option>
					<option value="date" >Sort by latest</option>
					<option value="price" >Sort by price: low to high</option>
					<option value="price-desc" >Sort by price: high to low</option>
			</select>
	<input type="hidden" name="paged" value="1" />
	</form>
</div>						<div class="horizontal-filter">
				<div id="woocommerce_price_filter-3" class="widget woo-sidebar-horizontal col-md-3 woocommerce widget_price_filter"><h4 class="widget-title">Filter by price</h4><form method="get" action="http://demo.snstheme.com/wp/vicky/product-category/concealer/">
			<div class="price_slider_wrapper">
				<div class="price_slider" style="display:none;"></div>
				<div class="price_slider_amount" data-step="10">
					<input type="text" id="min_price" name="min_price" value="10" data-min="10" placeholder="Min price" />
					<input type="text" id="max_price" name="max_price" value="50" data-max="50" placeholder="Max price" />
					<button type="submit" class="button">Filter</button>
					<div class="price_label" style="display:none;">
						Price: <span class="from"></span> &mdash; <span class="to"></span>
					</div>
					
					<div class="clear"></div>
				</div>
			</div>
		</form></div><div id="yith-woo-ajax-navigation-5" class="widget woo-sidebar-horizontal col-md-3 yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav"><h4 class="widget-title">Brand</h4><ul class='yith-wcan-list yith-wcan '><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_brand=chanel">Chanel</a></li><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_brand=dior">Dior</a></li><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_brand=lucci">Lucci</a></li></ul></div><div id="yith-woo-ajax-navigation-6" class="widget woo-sidebar-horizontal col-md-3 yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav"><h4 class="widget-title">Color</h4><ul class='yith-wcan-color yith-wcan yith-wcan-group '><li ><a  style="background-color:#5194ca;" href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_color=blue" title="Blue" >Blue</a><li ><a  style="background-color:#dba694;" href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_color=orange" title="Orange" >Orange</a><li ><a  style="background-color:#ef5d4c;" href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_color=pink" title="Pink" >Pink</a><li ><a  style="background-color:#e0e177;" href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_color=yellow" title="Yellow" >Yellow</a></ul></div><div id="yith-woo-ajax-navigation-7" class="widget woo-sidebar-horizontal col-md-3 yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav"><h4 class="widget-title">Size</h4><ul class='yith-wcan-list yith-wcan '><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_size=m">M</a></li><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_size=s">S</a></li><li ><a  href="http://demo.snstheme.com/wp/vicky/shop/?product_cat=concealer&#038;source_id=34&#038;source_tax=product_cat&#038;filter_size=xl">XL</a></li></ul></div>			</div>
						<div class="prdlist-content">
			
		

	<div id="sns_woo_list" class="products product_list grid row">
					<!--  bat dau loaf -->
					<?php
		foreach($dssp as $sp){
			extract($sp);
			$linksp="index.php?act=sanphamct&idsp=".$id;

			$img=$img_path.$product_img;
			?>

	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 post-337 product type-product status-publish has-post-thumbnail product_cat-concealer product_cat-lipsticks product_tag-face-cream product_tag-organic first instock shipping-taxable purchasable product-type-simple">
    	
	<div class="block-product-inner grid-view product-inner">
	<form action="index.php?act=addcart" method="post">

		<div class="item-inner">
		
				<div class="item-img clearfix">
		
				<div class="item-img-info">
	
					<a class="product-image" href="<?php echo $linksp  ?>">
	<img src="<?php echo $img ?>" alt="14" class="lazy attachment-shop_catalog" />					</a>
				</div>
			</div>
			<div class="item-info">
				<div class="item-content">
					<div class="cat-links"><a href="http://demo.snstheme.com/wp/vicky/product-category/concealer/" rel="tag">Concealer</a>, <a href="http://demo.snstheme.com/wp/vicky/product-category/lipsticks/" rel="tag">Lipsticks</a></div>					<h3 class="item-title">
					 	<a href="http://demo.snstheme.com/wp/vicky/product/aenean-mi-sapien-eget/">
					 		<?php echo $product_name ?>				 	</a>
					</h3>
	<div class="star-rating"></div>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $product_price ?></span></span>
				</div>
				<div class=""><div class="item-box-hover-wrap">
	            <div class="cart-wrap">
            	<input type="submit" name="addtocart" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="Add to cart">
				<input type="hidden" name="id" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $id ?>">

				<input type="hidden" name="product_name" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $product_name ?>">

				<input type="hidden" name="product_price" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $product_price ?>">

				<input type="hidden" name="product_img" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $img ?>">
			<form>
		</div>        
<div class="yith-wcwl-add-to-wishlist add-to-wishlist-337">
		    <div class="yith-wcwl-add-button show" style="display:block">
	    </div>

	    
	
</div>

<div class="clear"></div>				</div></div>
			</div>
		</div>
	

</div>
		</div>
    <!-- xong -->
	<?php
		
	}
	?>	
	
</div>

			<div class="toolbar toolbar-bottom"></div>
					</div></div>
	
			</div>
			
			<!-- Right sidebar -->
					</div>
	</div>
</div>
