

<style>

html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video {
	margin:0;
	padding:0;
	border:0;
	vertical-align:baseline;
}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {
	display: block;
}
ol,ul {
	list-style:none;
	margin:0px;
	padding:0px;
}
blockquote,q {
	quotes:none;
}
blockquote:before,blockquote:after,q:before,q:after {
	content:'';
	content:none;
}
table {
	border-collapse:collapse;
	border-spacing:0;
}

/* start editing from here */
a {
	text-decoration:none;
}
.txt-rt {
	text-align:right;
}/* text align right */
.txt-lt {
	text-align:left;
}/* text align left */
.txt-center {
	text-align:center;
/*-- W3Layouts --*/	
}/* text align center */
.float-rt {
	float:right;
}/* float right */
.float-lt {
	float:left;
}/* float left */
.clear {
	clear:both;
}/* clear float */
.pos-relative {
	position:relative;
}/* Position Relative */
.pos-absolute {
	position:absolute;
}/* Position Absolute */
.vertical-base {	
	vertical-align:baseline;
}/* vertical align baseline */
.vertical-top {	
	vertical-align:top;
}/* vertical align top */
nav.vertical ul li {	
	display:block;
}/* vertical menu */
nav.horizontal ul li {	
	display: inline-block;
}/* horizontal menu */
img {
	max-width:100%;
}

/*--- end reset code ---*/

body {

	background-attachment:fixed;
	background-position:center;
	background-size:cover;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	font-family: 'Raleway', sans-serif;
	font-weight:300;
}
h2.w3ls {
	font-size: 30px;
    text-align: center;
	padding:40px 0;
	text-align:center;
	/*-- w3layouts --*/ 
	text-transform:uppercase;
}
.content-w3ls {
	background:url("banner.jpg") no-repeat;
	background-color: white;
	width:70%;
	margin:0 auto 50px;
	padding:0;
	display: flex;
}
.content-w3ls .content-agile1 {
    width: 50%;
    float: left;
    background: url("banner-h1-2.jpg") no-repeat;
    background-position: center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    height: 660px;
}
h2.agileits1 {
    font-size: 40px;
    font-weight: normal;
	color:black;
    text-align: Center;
    padding: 200px 0 15px;
    text-transform: uppercase;
	font-family: 'Monoton', cursive;
}
p.agileits2 {
    font-size: 15px;
    font-weight: normal;
	color: black;
    text-align: center;
    text-transform: capitalize;
}
.content-w3ls .content-agile2 {
	width: 50%;
    float: left;
    padding: 25px 0 0;
}
input#firstname,input#email,input#password1,input#password2 {
	width:300px;
	height:50px;
	padding:0 15px;
	color:black;
	font-size:17px;
	font-weight:200;
	background-color:transparent;
	/*-- w3layouts --*/ 
	border-bottom:5px solid #fff;
	border-top-color:transparent;
	border-left-color:transparent;
	border-right-color:transparent;
	font-family: 'Raleway', sans-serif;
	margin:0 auto 20px;
	display:block;
	outline:none;
}
input#firstname:focus,input#email:focus,input#password1:focus,input#password2:focus,input#firstname:hover,input#email:hover,input#password1:hover,input#password2:hover {
	color: black;
	border-bottom:5px solid #3970b0;
}
input::-webkit-input-placeholder {
	color:black !important;
} 
input:-moz-placeholder { /* Firefox 18- */
	color:black !important;  
} 
input::-moz-placeholder {  /* Firefox 19+ */
	color:black !important;  
} 
input:-ms-input-placeholder {  
	color:black !important;  
}
input:hover::-webkit-input-placeholder {
color: #3970b0 !important;
} 
input:hover:-moz-placeholder { /* Firefox 18- */
color:	#3970b0 !important;  
} 
input:hover::-moz-placeholder {  /* Firefox 19+ */
color: #3970b0 !important;  
} 
input:hover:-ms-input-placeholder {  
color: #3970b0 !important;  
}
input.register {
    width: 335px;
    margin: 30px auto;
    display: block;
    height: 50px;
    text-align: center;
    font-size: 17px;
    font-weight: normal;
    color:black;
    background-color:#3970b0;
    border-color: transparent;
	font-family: 'Raleway', sans-serif;
	/*-- w3ls --*/
	transition:all 0.5s ease-in-out;
	-webkit-transition:all 0.5s ease-in-out;
	-moz-transition:all 0.5s ease-in-out;
	-o-transition:all 0.5s ease-in-out;
	-ms-transition:all 0.5s ease-in-out;
	cursor:pointer;
}
input.register:hover {
	color: #fff;
    background-color:#3970b0;
}
p.wthree {
    font-size: 16px;
    font-weight: normal;
    color:black;
    text-align: center;
    text-transform: capitalize;
    padding-bottom: 20px;
}
ul.social-agileinfo {
    text-align: center;
}
ul.social-agileinfo li {
	display:inline-block;
	margin:0;
}
ul.social-agileinfo li a i.fa {
	width:40px;
	height:40px;
	border:1px solid #fff;
	text-align:center;
	line-height:40px;
	color:black;
}
ul.social-agileinfo li a i.fa.fa-facebook:hover {
	background-color:#3b5998;
	color:black;
	border-color:#3b5998;
}
ul.social-agileinfo li a i.fa.fa-twitter:hover {
	background-color:#1da1f2;
	color:black;
	border-color:#1da1f2;
}
ul.social-agileinfo li a i.fa.fa-youtube:hover {
	background-color:#cd201f;
	color:black;
	border-color:#cd201f;
}
ul.social-agileinfo li a i.fa.fa-google-plus:hover {
	/*-- w3ls --*/
	background-color:#dd4b39;
	color:black;
	border-color:#dd4b39;
}
ul.social-agileinfo li a i.fa:hover {
    -webkit-animation: spin 2s linear infinite;
	animation: spin 2s linear infinite;
	-moz-animation: spin 2s linear infinite;
	-o-animation: spin 2s linear infinite;
	-ms-animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
p.copyright {
    font-size: 16px;
    text-align: center;
    color: black;
    line-height: 30px;
    padding: 20px 10px;
}
p.copyright a {
	color:#f15f22;
}
p.copyright a:hover {
	color:#36b051;
}

/*-- responsive design --*/







/*-- /responsive design --*/
		</style>
<h2 class="w3ls">Login</h2>
<div class="content-w3ls">
	<div class="content-agile1">
	</div>
	<div class="content-agile2">
  <form action="index.php?act=dangnhap" method="post">
  <div class="formad w3layouts"> 
				<input type="text" id="firstname" class="inputad" name="user" placeholder="Vui lòng nhập tên" title="Vui lòng nhập tên" required="">
			</div>

			<div class="formad agileinfo">	
				<input type="password" class="lock" name="pass" class="inputad" placeholder="Vui lòng nhập mật khẩu" id="password1" title="Vui lòng nhập mật khẩu"  required="">
			</div>	

			

			
			
			<!-- <input type="submit" class="register" name="dangky" value="Register"> -->
      <input type="submit" class="register" name="dangnhap" value="Login">


		<h3 style="color: red;
		text-align:center">
			<?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                                
                         ?>
						 </h3>
			
      </form>
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
		<p class="wthree w3l">Fast Signup With Your Favourite Social Profile</p>
		<ul class="social-agileinfo wthree2">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>
	<div class="clear"></div>
	
</div>
</body>
</html>