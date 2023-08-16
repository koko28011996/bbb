<?php
  
  foreach( $listdanhmuc as $dm){
	  extract($dm);
  }
  ?>

    <div id="sns_breadcrumbs" class="wrap">
        <div class="container">
            <div id="breadcrumbs" class="breadcrumbs"><a class="home" href="index.php" title="Home">Home</a><span class="navigation-pipe"><i class="fa fa-angle-right"></i></span><?php echo $dm['name']?></div>        </div>
    </div>
<div id="sns_content">
	<div class="container">
		<div class="row sns-content sns-woocommerce-page">
			<!-- left sidebar -->
						<!-- Main content -->
			<div class="sns-main col-md-12">
			    
	
		
			
<div class="woocommerce-notices-wrapper"></div><div id="product-403" class="post-403 product type-product status-publish has-post-thumbnail product_cat-lipsticks product_tag-ecommerce product_tag-lipsticks product_tag-organic first instock shipping-taxable purchasable product-type-variable has-default-attributes">
	<div class="second_block row three-cols clearfix gallery_type_h">
		<div class="col-sm-12">
			<div class="primary_block row clearfix">
			<?php
			extract($sanpham);
			$img=$img_path.$product_img;

			?>
				<div class="entry-img col-md-5 col-xs-6 col-phone-12">
					<div class="">
						
		<form action="index.php?act=addcart" method="post">

	<div class="images_aa">
	<div class="product-images">
	<div class="">
		<img width="470" height="470" src="<?php echo $img ?>"></div></div><span class="popup-image"></span></div>
<div class="thumbnails">
    <div class="product-thumbs owl-carousel">
		<div class="img woocommerce-product-gallery__image">
			<img width="110" height="127" src="" class="woocommerce-main-thumb img-responsive" alt="">
			 </div><div data-thumb="" class="img woocommerce-product-gallery__image"><img width="110" height="127" src="" class="img-responsive" alt="" title="1" data-caption="" data-zoom-image="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/1.jpg" data-src="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/1.jpg" data-large_image="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/1.jpg" data-large_image_width="960" data-large_image_height="960" srcset="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/1-110x127.jpg 110w, http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/1-70x80.jpg 70w, http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/1-270x310.jpg 270w" sizes="(max-width: 110px) 100vw, 110px" /></div><div data-thumb="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/blush-110x127.jpg" class="img woocommerce-product-gallery__image"><img width="110" height="127" src="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/blush-110x127.jpg" class="img-responsive" alt="" title="blush" data-caption="" data-zoom-image="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/blush.jpg" data-src="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/blush.jpg" data-large_image="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/blush.jpg" data-large_image_width="960" data-large_image_height="960" srcset="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/blush-110x127.jpg 110w, http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/blush-70x80.jpg 70w, http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/blush-270x310.jpg 270w" sizes="(max-width: 110px) 100vw, 110px" /></div><div data-thumb="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/lip-gross-110x127.jpg" class="img woocommerce-product-gallery__image"><img width="110" height="127" src="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/lip-gross-110x127.jpg" class="img-responsive" alt="" title="lip-gross" data-caption="" data-zoom-image="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/lip-gross.jpg" data-src="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/lip-gross.jpg" data-large_image="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/lip-gross.jpg" data-large_image_width="960" data-large_image_height="960" srcset="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/lip-gross-110x127.jpg 110w, http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/lip-gross-270x310.jpg 270w, http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/lip-gross-70x80.jpg 70w" sizes="(max-width: 110px) 100vw, 110px" /></div><div data-thumb="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/07/3-110x127.jpg" class="img woocommerce-product-gallery__image"><img src="<?php echo $img ?>"></div></div></div>
					</div>
				</div>
				<div class="summary entry-summary col-md-4 col-xs-6 col-phone-12">

		<h1 class="product_title entry-title"><?php echo $product_name ?></h1>
	<div class="woocommerce-product-rating">
		<div class="star-rating" title="Rated 4.00 out of 5">
			<span style="width:80%">
				<strong class="rating">4.00</strong> out of <span><?php echo $view ?></span>				based on <span class="rating">1</span> customer rating			</span>
		</div>
		<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>	</div>

<p class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $discount ?></span> &ndash; <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $product_price	 ?></span></p>
<span> <?php echo $origin ?></span>
<div class="woocommerce-product-details__short-description">
	<ul>
<li> Mã sản phẩm :<?php echo $id ?></li>
<li>Ngày Mở Bán: <?php echo $date ?></li>
<li>Lượt Xem: <?php echo $view ?></li>
</ul>
</div>

<form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="403" data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;purple&quot;,&quot;attribute_pa_brand&quot;:&quot;dior&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:50,&quot;display_regular_price&quot;:50,&quot;image&quot;:{&quot;title&quot;:&quot;lip-purple&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-470x470.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-470x470.jpg 470w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-100x100.jpg 100w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-70x70.jpg 70w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-270x270.jpg 270w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-768x768.jpg 768w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-425x425.jpg 425w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple.jpg 960w&quot;,&quot;sizes&quot;:&quot;(max-width: 470px) 100vw, 470px&quot;,&quot;full_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple.jpg&quot;,&quot;full_src_w&quot;:960,&quot;full_src_h&quot;:960,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-270x310.jpg&quot;,&quot;thumb_src_w&quot;:270,&quot;thumb_src_h&quot;:310,&quot;src_w&quot;:470,&quot;src_h&quot;:470},&quot;image_id&quot;:&quot;408&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;50.00&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:404,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;purple&quot;,&quot;attribute_pa_brand&quot;:&quot;lucci&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:65,&quot;display_regular_price&quot;:65,&quot;image&quot;:{&quot;title&quot;:&quot;lip-purple&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-470x470.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-470x470.jpg 470w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-100x100.jpg 100w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-70x70.jpg 70w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-270x270.jpg 270w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-768x768.jpg 768w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-425x425.jpg 425w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple.jpg 960w&quot;,&quot;sizes&quot;:&quot;(max-width: 470px) 100vw, 470px&quot;,&quot;full_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple.jpg&quot;,&quot;full_src_w&quot;:960,&quot;full_src_h&quot;:960,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-purple-270x310.jpg&quot;,&quot;thumb_src_w&quot;:270,&quot;thumb_src_h&quot;:310,&quot;src_w&quot;:470,&quot;src_h&quot;:470},&quot;image_id&quot;:&quot;408&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;65.00&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:435,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;red&quot;,&quot;attribute_pa_brand&quot;:&quot;dior&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:55,&quot;display_regular_price&quot;:55,&quot;image&quot;:{&quot;title&quot;:&quot;lip-red-1&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-470x470.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-470x470.jpg 470w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-100x100.jpg 100w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-70x70.jpg 70w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-270x270.jpg 270w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-768x768.jpg 768w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-425x425.jpg 425w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1.jpg 960w&quot;,&quot;sizes&quot;:&quot;(max-width: 470px) 100vw, 470px&quot;,&quot;full_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1.jpg&quot;,&quot;full_src_w&quot;:960,&quot;full_src_h&quot;:960,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-270x310.jpg&quot;,&quot;thumb_src_w&quot;:270,&quot;thumb_src_h&quot;:310,&quot;src_w&quot;:470,&quot;src_h&quot;:470},&quot;image_id&quot;:&quot;409&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;55.00&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:434,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;red&quot;,&quot;attribute_pa_brand&quot;:&quot;lucci&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:58,&quot;display_regular_price&quot;:58,&quot;image&quot;:{&quot;title&quot;:&quot;lip-red-1&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-470x470.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-470x470.jpg 470w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-100x100.jpg 100w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-70x70.jpg 70w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-270x270.jpg 270w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-768x768.jpg 768w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-425x425.jpg 425w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1.jpg 960w&quot;,&quot;sizes&quot;:&quot;(max-width: 470px) 100vw, 470px&quot;,&quot;full_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1.jpg&quot;,&quot;full_src_w&quot;:960,&quot;full_src_h&quot;:960,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-red-1-270x310.jpg&quot;,&quot;thumb_src_w&quot;:270,&quot;thumb_src_h&quot;:310,&quot;src_w&quot;:470,&quot;src_h&quot;:470},&quot;image_id&quot;:&quot;409&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;58.00&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:405,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;pink&quot;,&quot;attribute_pa_brand&quot;:&quot;dior&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:34,&quot;display_regular_price&quot;:34,&quot;image&quot;:{&quot;title&quot;:&quot;lip-pink&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-470x470.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-470x470.jpg 470w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-100x100.jpg 100w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-70x70.jpg 70w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-270x270.jpg 270w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-768x768.jpg 768w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-425x425.jpg 425w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink.jpg 960w&quot;,&quot;sizes&quot;:&quot;(max-width: 470px) 100vw, 470px&quot;,&quot;full_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink.jpg&quot;,&quot;full_src_w&quot;:960,&quot;full_src_h&quot;:960,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-270x310.jpg&quot;,&quot;thumb_src_w&quot;:270,&quot;thumb_src_h&quot;:310,&quot;src_w&quot;:470,&quot;src_h&quot;:470},&quot;image_id&quot;:&quot;407&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;34.00&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:436,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;},{&quot;attributes&quot;:{&quot;attribute_pa_color&quot;:&quot;pink&quot;,&quot;attribute_pa_brand&quot;:&quot;lucci&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:52,&quot;display_regular_price&quot;:52,&quot;image&quot;:{&quot;title&quot;:&quot;lip-pink&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-470x470.jpg&quot;,&quot;srcset&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-470x470.jpg 470w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-100x100.jpg 100w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-70x70.jpg 70w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-270x270.jpg 270w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-768x768.jpg 768w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-425x425.jpg 425w, http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink.jpg 960w&quot;,&quot;sizes&quot;:&quot;(max-width: 470px) 100vw, 470px&quot;,&quot;full_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink.jpg&quot;,&quot;full_src_w&quot;:960,&quot;full_src_h&quot;:960,&quot;gallery_thumbnail_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-100x100.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:100,&quot;gallery_thumbnail_src_h&quot;:100,&quot;thumb_src&quot;:&quot;http:\/\/demo.snstheme.com\/wp\/vicky\/wp-content\/uploads\/2017\/08\/lip-pink-270x310.jpg&quot;,&quot;thumb_src_w&quot;:270,&quot;thumb_src_h&quot;:310,&quot;src_w&quot;:470,&quot;src_h&quot;:470},&quot;image_id&quot;:&quot;407&quot;,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;#36;&lt;\/span&gt;52.00&lt;\/span&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:406,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;&quot;,&quot;weight_html&quot;:&quot;N\/A&quot;}]">
	
			<div class="variations">
							<div class="label"><label for="pa_color">Color</label></div>
				<div class="value">
					<select id="pa_color" class="" name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes"><option value="">Choose an option</option><option value="pink" >Pink</option><option value="purple" >Purple</option><option value="red"  selected='selected'>Red</option></select>				</div>
							<div class="label"><label for="pa_brand">Brand</label></div>
				<div class="value">
					<select id="pa_brand" class="" name="attribute_pa_brand" data-attribute_name="attribute_pa_brand" data-show_option_none="yes"><option value="">Choose an option</option><option value="dior"  selected='selected'>Dior</option><option value="lucci" >Lucci</option></select><a class="reset_variations" href="#">Clear</a>				</div>
					</div>
		
		<div class="single_variation_wrap">
			<div class="woocommerce-variation single_variation"></div><div class="woocommerce-variation-add-to-cart variations_button">
	
			<form action="index.php?act=addcart" method="post">
				<label class="screen-reader-text" for="quantity_64a023f936cda">Aliquam faci lisis laoreet quantity</label>
				<input type="number" name="quantity" value="1" min="1" max="9" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $quantity ?>">
				<input type="submit" name="addtocart" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="Add to cart">

				<input type="hidden" name="id" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $id ?>">

				<input type="hidden" name="product_name" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $product_name ?>">

				<input type="hidden" name="product_price" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $product_price ?>">

				<input type="hidden" name="product_img" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $img ?>">

				</form>

</div>
		</div>

			
	</form>


<div class="yith-wcwl-add-to-wishlist add-to-wishlist-403">
		    <div class="yith-wcwl-add-button show" style="display:block">

	        
<a href="/wp/vicky/product/aliquam-faci-lisis-laoreet/?add_to_wishlist=403" rel="nofollow" data-product-id="403" data-product-type="variable" class="add_to_wishlist" >
        Add to Wishlist</a>
<span class="ajax-loading"></span>
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="http://demo.snstheme.com/wp/vicky/wishlist/" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="http://demo.snstheme.com/wp/vicky/wishlist/" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>
	
</div>

<div class="clear"></div><div class="clear"></div><div class="product_meta">

	
	
		<span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>

	
	<span class="posted_in">Category: <a href="" rel="tag"><?php echo $dm['name'] ?></a></span>
	<span class="tagged_as">Tags: <a href="" rel="tag">Ecommerce</a>, <a href="" rel="tag"><?php echo $name ?></a>, <a href="" rel="tag">Organic</a></span>
	
</div>
    <div class="post-share-block">
        <span class="label-shareblock">
        Share:         </span>
        <div class="sns-share-box">
            <ul class="socials">
                                <li class="facebook">
                    <a data-toggle="tooltip" data-placement="top" data-animation="true"  data-original-title="Facebook" href="http://www.facebook.com/sharer.php?s=100&p&#91;url&#93;=http://demo.snstheme.com/wp/vicky/product/aliquam-faci-lisis-laoreet/&p&#91;title&#93;=Aliquam faci lisis laoreet" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                                                <li class="twitter">
                    <a data-toggle="tooltip" data-placement="top" data-animation="true"  data-original-title="Twitter" href="http://twitter.com/home?status=Aliquam faci lisis laoreet http://demo.snstheme.com/wp/vicky/product/aliquam-faci-lisis-laoreet/" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                                                <li class="linkedin">
                    <a data-toggle="tooltip" data-placement="top" data-animation="true"  data-original-title="LinkedIn" href="http://linkedin.com/shareArticle?mini=true&amp;url=http://demo.snstheme.com/wp/vicky/product/aliquam-faci-lisis-laoreet/&amp;title=Aliquam faci lisis laoreet" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                                                <li class="tumblr">
                    <a data-toggle="tooltip" data-placement="top" data-animation="true"  data-original-title="Tumblr" href="http://www.tumblr.com/share/link?url=http%3A%2F%2Fdemo.snstheme.com%2Fwp%2Fvicky%2Fproduct%2Faliquam-faci-lisis-laoreet%2F&amp;name=Aliquam+faci+lisis+laoreet&amp;description=%3Cul%3E%0D%0A+%09%3Cli%3ENEW+label+with+Marula+Oil%3C%2Fli%3E%0D%0A+%09%3Cli%3EExpiration+Date%3A+Oct+2017%3C%2Fli%3E%0D%0A+%09%3Cli%3EShipping+Weight%3A+0.31+kg%3C%2Fli%3E%0D%0A+%09%3Cli%3EProduct+Code%3A+MLI-00241%3C%2Fli%3E%0D%0A+%09%3Cli%3EUPC+Code%3A+898220002482%3C%2Fli%3E%0D%0A+%09%3Cli%3EPackage+Quantity%3A+2.4+oz+%2871+g%29%3C%2Fli%3E%0D%0A+%09%3Cli%3EDimensions%3A+5.5+x+3.9+x+12.1+cm+%2C+0.09+kg%3C%2Fli%3E%0D%0A%3C%2Ful%3E" target="_blank">
                        <i class="fa fa-tumblr"></i>
                    </a>
                </li>
                                                <li class="google">
                    <a data-toggle="tooltip" data-placement="top" data-animation="true"  data-original-title="Google +1" href="https://plus.google.com/share?url=http://demo.snstheme.com/wp/vicky/product/aliquam-faci-lisis-laoreet/" onclick="javascript:window.open(this.href,
            '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                                                <li class="pinterest">
                                        <a data-toggle="tooltip" data-placement="top" data-animation="true"  data-original-title="Pinterest" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fdemo.snstheme.com%2Fwp%2Fvicky%2Fproduct%2Faliquam-faci-lisis-laoreet%2F&amp;description=Aliquam+faci+lisis+laoreet&amp;media=http%3A%2F%2Fdemo.snstheme.com%2Fwp%2Fvicky%2Fwp-content%2Fuploads%2F2017%2F08%2Flip-red-1.jpg" target="_blank">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
                                                <li class="email">
                    <a data-toggle="tooltip" data-placement="top" data-animation="true"  data-original-title="Email" href="mailto:?subject=Aliquam faci lisis laoreet&amp;body=http://demo.snstheme.com/wp/vicky/product/aliquam-faci-lisis-laoreet/">
                        <i class="fa fa-envelope"></i>
                    </a>
                </li>
                            </ul>
        </div>
    </div>
        				</div><!-- .summary -->
								<div class="inner-sidebar col-md-3">
					<div class="postwcode-widget"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="sns-products woocommerce no-padding-border list-mode title-style" data-usenav="2" data-desktop="1" data-tabletl="1" data-tabletp="1" data-mobilel="1" data-mobilep="1"><h2 class="wpb_heading"><span>Sản Phẩm cùng loại</span></h2>
					<div class="prdlist-content">
						<div class="s-products product_list list owl-carousel">
						<div class="item-row">
						<?php
					foreach ($sp_cungloai as $sp_cl){
						extract($sp_cl);
						$img=$img_path.$product_img;
						$linksp="index.php?act=sanphamct&idsp=".$id;
						?>
						<div class="post-340 product type-product status-publish has-post-thumbnail product_cat-face-palettes product_tag-ecommerce product_tag-organic product_tag-skin-care  instock featured shipping-taxable purchasable product-type-simple">
					
					
						<div class="block-product-inner list-view">
				<div class="item-img thumb-7080">
					<a class="product-image" href="<?php echo $linksp ?>">
					<img width="70" height="80" src="<?php echo $img ?>" class="attachment-snsvicky_woo_7080_thumb size-snsvicky_woo_7080_thumb" alt="" srcset="<?php echo $img ?>" sizes="(max-width: 70px) 100vw, 70px" />					</a>
					<a href="<?php echo $linksp ?>" class="button yith-wcqv-button" data-product_id="340"></a>			</div>
			<div class="item-info">
				<div class="item-content">
					<h3 class="item-title">
					 	<a href="<?php echo $linksp ?>">
					 		<?php echo $product_name ?>					 	</a>
					</h3>
	<div class="star-rating"></div>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $product_price ?></span></span>
				</div>
			</div>
	</div>
</div>
<?php

					}
					 ?>



</div><!--End .item-row--></div></div></div>
	<div  class="wpb_single_image wpb_content_element vc_align_center   banner11 no-padding-border">
		
		<figure class="wpb_wrapper vc_figure">
			<a href="#" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img width="270" height="177" src="http://demo.snstheme.com/wp/vicky/wp-content/uploads/2017/08/banner-prd-detail.jpg" class="vc_single_image-img attachment-full" alt="" /></a>
		</figure>
	</div>
</div></div></div></div></div>				</div>
							</div>
		</div>
	</div>
	<div id="sns_tab_informations" class="product-collateral clearfix">
	<div class="tab-heading">
		<ul class="nav-tabs">
							<li class="reviews_tab">
					<a href="#tab-reviews" data-toggle="tab">Bình Luận</a>
				</li>
					</ul>
	</div>
		<!-- Binh luan bang jqery -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
				<script>
			 $(document).ready(function(){
                        $("#binhluan").load("nguoidung/comment/adcomment.php",{id_product:<?php echo $sanpham['id'] ?>});
                    });
                    </script>
	<div class="tab-content" id="binhluan">
		

</div>

	
	<div class="clear"></div>
</div>
			</div>
			</div>
	</div>
	 <section class="related products">
		<h2><span>Sản Phẩm nổi bật</span></h2>
		<div class="prdlist-content">
	<div id="sns_woo_list1876082026" class="products product_list grid row">
	<?php
		foreach ($spnew as $spnew){
			extract($spnew);
			$linksp="index.php?act=sanphamct&idsp=".$id;
			$img=$img_path.$product_img;
			?>
				<div class="item-img clearfix">
		
		<div class="post-151 product type-product status-publish has-post-thumbnail product_cat-concealer product_cat-lipsticks product_tag-ecommerce product_tag-organic product_tag-skin-care first instock shipping-taxable product-type-grouped">
		<div class="block-product-inner grid-view product-inner">
		<div class="item-inner">
				<div class="item-img-info">
					<a class="product-image" href="<?php echo $linksp ?>">
	<img src="<?php echo $img ?>" alt="12" data-original="" class="lazy attachment-shop_catalog" />					</a>
				</div>
			</div>
			<div class="item-info">
				<div class="item-content">
					
					<div class="cat-links"><a href="" rel="tag"><?php echo $name?></a>, <a href="<?php echo $linksp ?>"></a></div>					<h3 class="item-title">
					 	<a href="<?php echo $linksp ?>">
					 		<?php echo $product_name ?>				 	</a>
					</h3>
	<div class="star-rating"></div>
	<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $discount ?></span> &ndash; <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $product_price ?></span></span>
				</div>
				<div class="item-box-hover"><div class="item-box-hover-wrap">
	            <div class="cart-wrap">
				</form >
				<form action="index.php?act=addcart" method="post">
				<input type="submit" name="addtocart" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="Add to cart">
				<input type="hidden" name="id" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $id ?>">

				<input type="hidden" name="product_name" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $product_name ?>">

				<input type="hidden" name="product_price" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $product_price ?>">

				<input type="hidden" name="product_img" class="button product_type_simple add_to_cart_button ajax_add_to_cart" value="<?php echo $img ?>">
				</form>
                        </div>
            
<div class="yith-wcwl-add-to-wishlist add-to-wishlist-151">
		    <div class="yith-wcwl-add-button show" style="display:block">

	        
<a href="/wp/vicky/product/aliquam-faci-lisis-laoreet/?add_to_wishlist=151" rel="nofollow" data-product-id="151" data-product-type="grouped" class="add_to_wishlist" >
        Add to Wishlist</a>
<span class="ajax-loading"></span>
	    </div>

	    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
	        <span class="feedback">Product added!</span>
	        <a href="http://demo.snstheme.com/wp/vicky/wishlist/" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
	        <span class="feedback">The product is already in the wishlist!</span>
	        <a href="http://demo.snstheme.com/wp/vicky/wishlist/" rel="nofollow">
	            Browse Wishlist	        </a>
	    </div>

	    <div style="clear:both"></div>
	    <div class="yith-wcwl-wishlistaddresponse"></div>
	
</div>

<div class="clear"></div><a href="#" class="" data-product_id="151"></a></div></div>

		</div>
		</div>
		</div>
		</div>
		
		<?php	
		}
		?>
		
		</div>
	</section>
<!-- #product-403 -->
</div>

			<!-- Right sidebar -->
					</div>
	</div>
</div>