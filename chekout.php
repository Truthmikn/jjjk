<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../template/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../template/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../template/css/prettyPhoto.css" rel="stylesheet">
    <link href="../../template/css/price-range.css" rel="stylesheet">
    <link href="../../template/css/animate.css" rel="stylesheet">
	<link href="../../template/css/main.css" rel="stylesheet">
	<link href="../../template/css/responsive.css" rel="stylesheet">    
    <link rel="shortcut icon" href="../../template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../template/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								
								<!--<li><a href="//7nroowrqwdgbyajwrynxtypkdi46f22akwki73etfu2wwmra3ytdhoyd.onion.ws/cart/chekout/#"><i class="fa fa-phone"></i> +7495-755-69-83</a></li>-->
								<li><a href="#"><i class="fa fa-envelope"></i>drugshop@dnmx.org</a></li>
                                                                 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
                                                    <a href="../../default.htm"><img src="../../template/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                                                            
                                                            
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="../../index.htm" class="active">صفحه اصلی</a></li>
								
							
								
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
        </header><!--/header-->

	<?php 
$kir= $_GET["amount"]; ?>

	<section id="cart_items">
		<div class="container">
                    
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="../../index.htm">صفحه اصلی</a></li>
				  <li class="active">ثبت سفارش</li>
				</ol>
			</div><!--/breadcrums-->

			
			

			

			 
                        			<div class="review-payment">
				<h2>نمایش محصول</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">مبلغ</td>
							<td class="quantity">تعداد</td>
							<td class="total">مجموع پرداختی</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                                                                                           
						<tr>
							<td class="cart_product">
								<a href="../../index.htm"><img src="iconmonstr-product-3.svg" width="100" alt=""></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td class="cart_description">
								<h4><a href="../../index.htm"><?php echo $_GET["name"]; ?></a></h4>

							</td>
							<td class="cart_price">
								<p><?php echo $_GET["amount"]; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
                                                                    <input class="cart_quantity_input" type="text" disabled="disabled" name="quantity" value="1" autocomplete="off" size="2">
									
								</div>
							</td>
                                                       
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $_GET["amount"]; ?></p>
							</td>
							
						</tr>
                                                                                                

                                                                                                
					
               
                         
						
                                                                                                                                             

						
								<table class="table table-condensed total-result">
                                                                    <tr>
                                                                        <td></td>
                                                                    </tr>
									<tr>
                                                                            <td>&nbsp;</td>
                                                                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                                                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                                                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                                                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                                                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                                                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>                                                                           
                                                                            <td>Total</td>
                                                                            <td><span><?php echo $_GET["amount"]; ?></span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
                        <div class="shopper-informations">
				<div class="row">
					
						<div class="shopper-info">
							<p>اطلاعات خریدار</p>
                                                        <form action="payment/payment.php?amount=<?php echo $_GET["amount"]; ?>" id="form1" method="post" name="order">
                                                            <input type="text" name="name" placeholder="نام">
                                                            <input type="text" name="surname" placeholder="نام خانوادگی">
                                                            <input type="text" name="email" placeholder="ایمیل" >
                                                            &nbsp;
                                                            
                                                                <select form="form1" name="country">
										<option>کشور</option>
									                                                                                <option>ایران</option>
                                                                                                                                                                
                                                                                									</select>
                                                                <input type="text" name="state" placeholder="شهر">
                                                                
                                                                <select form="form1" name="delivery">
								<option>روش ارسال</option>
								                                                                                        <option>ارسال با اسنپ(مخصوص تهران)</option>
                                                                                                                                                                <option>ارسال با تیپاکس</option>
                                                                                								</select>
                                                                <p></p>
                                                                <input type="text" name="address" placeholder="ادرس">
                                                                <input type="text" name="postcode" placeholder="کد پستی">
                                                                <input type="text" name="telephone" placeholder="تلفن ">
                                                                
                                                                <input style="background: #fe980f;align-items: center; margin-left: calc(43%);width:calc(10%);font-size: 20px;" class="check_out" type="Submit" form="form1" name="submit" id="submit" value="Submit">
							</form>
							
						</div>
                                    					
                                   
                                       
                                   
						
					
										
                                </div>
                        </div></div>
			</div>
			
		</div>
	</section> <!--/#cart_items-->


<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">DRUGS SHOP © 2021</p>
					<p class="pull-right"><span><a target="_blank" href="../../index.htm">HOME</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    
</body>
<script async src="../../../https@www.googletagmanager.com/gtag/js@id=UA-123404068-1"></script><script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-123404068-1');</script>
</html>
<!--fuck you-->

 
