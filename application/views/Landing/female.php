<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sch</title>
  <link rel="icon" type="image/png" href="https://www.schofficial.com/favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha3124-MCw912/SFnGE12fJT3GXwEOngsV7Zt27NXFoaoApmYm121iuXoPkFOJwJ12ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha3124-q12i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+12abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha3124-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn6129aCwoqbBJiSnjAK/l12WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha3124-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="nav.css">
  <link rel="stylesheet" type="text/css" href="tubes.css">
  <script type="text/javascript" src="nav.js"></script>
  <script type="text/javascript" src="index.js"></script>
  <script type="text/javascript">
    function month(id){
      date = new Date;
      month = date.getMonth();
      months = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
      result = ''+months[month];
      document.getElementById(id).innerHTML = result;
    }
    function datee(id){
      date = new Date;
      d = date.getDate();  
      result = ''+d;
      document.getElementById(id).innerHTML = result;
    }
    function day(id){
      date = new Date;
      day = date.getDay();
      days = new Array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
      result = ''+days[day];
      document.getElementById(id).innerHTML = result;
    }
  </script>
    <title>Female</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-left">
    <a class="navbar-brand" href="<?php echo site_url('Landing');?>"><img src="https://www.schofficial.com/Content/frontend/img/logo.png" style="width: 72px; margin-bottom: 36px;"></a>
    <button class="navbar-toggler" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg" style="line-height:0; background: none; border: none; outline-style: none;">
          <img class="img-full changetoback bg-dark navbar-dark" src="https://www.schofficial.com/Content/frontend/img/toggle-menu.png" style="height: 16px; width: 16px; margin-bottom: 20px;">
        </button>
          </li>
          <li class="nav-item">
            <a href="#">
              <img src="https://www.schofficial.com/Content/frontend/img/wishlist.png" style="height: 16px; width: 16px;margin-bottom: 20px;">
            </a>
          </li>
          <li class="nav-item">
            <a href="#">
              <img class="" src="https://www.schofficial.com/Content/frontend/img/cart-white.png" style="height: 16px; width: 16px;">
            </a>
          </li>
        </ul>
    </div>
</nav>
<div class="modal fade left bd-example-modal-lg bg-dark col-md-6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="height: 600px;">
    <div class="modal-content bg-dark" style="border: none; height: 656px; width: 672px; margin-left: -80px; margin-top: -28px;">
      <div class="modal-body" style="height: 656px;">
        <div class="media">
            <div class="media-left" style="width: 288px;">
              <ul class="mainmenu" style="text-align: left;">
              <li class="dropdown" style="margin-top: 60px;">
                  <a href="#" class="dropdown-link">Male</a>
                  <ul class="submenu">
                    <li><a href="<?php echo site_url('c_male'); ?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Shop</a></li>
                    <li><a href="<?php echo site_url('c_family'); ?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Fit Guide</a></li>
                    <li><a href="<?php echo site_url('c_download'); ?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Lookbook</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Female</a>
                  <ul class="submenu">
                    <li><a href="<?php echo site_url('c_female'); ?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Shop</a></li>
                    <li><a href="<?php echo site_url('c_family'); ?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Fit Guide</a></li>
                    <li><a href="<?php echo site_url('c_download'); ?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Lookbook</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Kids</a>
                  <ul class="submenu">
                    <li><a href="#" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Shop</a></li>
                    <li><a href="<?php echo site_url('c_family'); ?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Fit Guide</a></li>
                    <li><a href="<?php echo site_url('c_download'); ?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Lookbook</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Toddler</a>
                  <ul class="submenu">
                    <li><a href="#" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Shop</a></li>
                    <li><a href="<?php echo site_url('c_family'); ?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Fit Guide</a></li>
                    <li><a href="<?php echo site_url('c_download'); ?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Lookbook</a></li>
                  </ul>
              </li>
            </ul>
            <hr style="border-color: white; margin-top: 60px; width: 288px; margin-right: -100px;">
            <ul class="mainmenu" style="text-align: left;">
              <li class="dropdown">
                  <a href="#" class="dropdown-link" style="margin-top: -16px;">About Us</a>
                  <ul class="submenu">
                    <li><a href="<?php echo site_url('c_history'); ?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">History</a></li>
                    <li><a href="<?php echo site_url('c_family'); ?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Family</a></li>
                    <li><a href="<?php echo site_url('c_download'); ?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Download</a></li>
                    <li><a href="<?php echo site_url('c_career'); ?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Career</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Campaign</a>
                  <ul class="submenu">
                    <li><a href="<?php echo site_url('c_news'); ?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">News</a></li>
                    <li><a href="#" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Project</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Find Us</a>
                  <ul class="submenu">
                    <li><a href="<?php echo site_url('c_store'); ?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Store</a></li>
                    <li><a href="<?php echo site_url('c_distribution'); ?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Distribution</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Customer Service</a>
                  <ul class="submenu">
                    <li><a href="#" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">FAQ</a></li>
                    <li><a href="<?php echo site_url('c_care'); ?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Clothing Care</a></li>
                    <li><a href="<?php echo site_url('c_contact'); ?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Contact Us</a></li>
                  </ul>
              </li>
            </ul>
            <footer style="border-top:1px solid #fff; margin-top:300px; width: 288px; position: absolute; bottom: 0; margin-bottom: 16px;">
              <ul style="text-decoration: none; list-style: none; text-align: left; margin: 16px;">
                <li style="display: inline; margin-left:-30px; margin-right: 12px;">
                  <a href="https://www.facebook.com/ouvalresearch"> 
                    <img src="https://schofficial.com/content/frontend/assets/frontend/img/facebook.png"> 
                  </a>
                </li>
                <li style="display: inline; margin-right: 12px;">
                  <a href="https://www.instagram.com/ouvalresearch"> 
                    <img src="https://schofficial.com/content/frontend/assets/frontend/img/ig.png"> 
                  </a>
                </li>
                <li style="display: inline; margin-right: 12px;">
                  <a href="http://www.youtube.com/ouvalresearch/"> 
                    <img src="https://schofficial.com/content/frontend/assets/frontend/img/youtube.png"> 
                  </a>
                </li>
                <li style="display: inline; margin-right: 12px;">
                  <a href="https://www.twitter.com/ouvalresearch"> 
                    <img src="https://schofficial.com/content/frontend/assets/frontend/img/twitter.png"> 
                  </a>
                </li>
              </ul>
            </footer>

            </div>
            <div class="media-right" style="background-color:#00FF00; margin-left: 120px; width: 480px; height: 656px; margin-top: -16px; margin-right: -16px; text-align: left;">
              <div style="margin-left: 16px;">
                <h6 style="margin-top: 60px; border-bottom: 1px solid #000; width: 300px; font-size: 14px; padding-bottom: 4px;">Year</h6>
                <p style=" font-size: 36px; margin-top: -8px;">
                  <script>document.write(new Date().getFullYear())</script>
                </p>
                <div class="container" style="margin-left: -16px; float: left; margin-bottom: 12px;">
                  <div style="width: 130px; height: 75px; width: 130px; float: left; padding-right: -12px;">
                    <h6 style="border-bottom: 1px solid #000; font-size: 14px; padding-bottom: 4px;">Month</h6>
                    <p id="month" style="font-size: 36px; margin-top: -8px;">
                      <script type="text/javascript">window.onload = month('month');</script>
                    </p>
                  </div>
                  <div style="width: 140px; height: 75px; float: right; margin-left: 10px;">
                    <h6 style="border-bottom: 1px solid #000; font-size: 14px; padding-bottom: 4px; width: 150px;">Date</h6>
                    <p id="datee" style="font-size: 36px; margin-top: -8px;">
                      <script type="text/javascript">window.onload = datee('datee');</script>
                    </p>
                  </div>
                </div>
                <h6 style="margin-top: 0px; border-bottom: 1px solid #000; width: 300px; font-size: 14px; padding-bottom: 4px;">Day</h6>
                <p id="day" style=" font-size: 36px; margin-top: -8px;">
                   <script type="text/javascript">window.onload = day('day');</script>
                </p>
                <div style="width: 300px; margin-top: 80px;border-top: 1px solid #000;">
                <a href="<?php echo site_url('Landing/Login'); ?>" style="font-size: 32px; text-decoration: none; color: #212529; width: 400px;">LOGIN</a>
                </div>
              </div>
                
          </div>
        </div>  
    </div>
  </div>
  </div>
</div>			
	<div class="main margtop44">
			<div class="col-md-12 categorybungkus">
			<ul id="content-6" class="category-productsnya mCustomScrollbar _mCS_2 mCS-autoHide" data-mcs-theme="minimal-dark" style="position: relative; overflow: visible;">
			<div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_horizontal mCSB_outside" tabindex="0" style="max-height: none;">
			<div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px; width: 1187px; min-width: 100%; overflow-x: inherit;" dir="ltr">
			<li class="selected-category"><a href="/en/female/NEW" class="/en/female/NEW">NEW</a></li>
			<li><a href="/en/female/t-shirt">T-SHIRT</a></li>
			<li><a href="/en/female/dress">DRESSES</a></li>
			<li><a href="/en/female/shirt">SHIRT</a></li>
			<li><a href="/en/female/jacket">JACKET</a></li>
			<li><a href="/en/female/bag">BAG</a></li>
			<li><a href="/en/female/sweatshirt">SWEATSHIRT</a></li>
			<li><a href="/en/female/footwear">FOOTWEAR</a></li>
			<li><a href="/en/female/polo shirt">POLO SHIRT</a></li>
			<li><a href="/en/female/knitwear">KNITWEAR</a></li>
			<li><a href="/en/female/pant">PANT</a></li>
			<li><a href="/en/female/skirt">SKIRT</a></li>
			<li><a href="/en/female/wallet">WALLET</a></li>
			<li><a href="/en/female/accsorries">ACCSORRIES</a></li>
			<li><a href="/en/female/hat">HAT & CAPS</a></li>
			<li><a href="/en/female/jacket">OUTERWEAR</a></li>
			</div>
			</div>

		<div id="mCSB_2_scrollbar_horizontal" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal" style="display: block;">
			<div class="mCSB_draggerContainer">
				<div id="mCSB_2_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 50px; display: block; width: 240px; max-width: 512px; left: 0px;" oncontextmenu="return false;">
			<div class="mCSB_dragger_bar">
			</div>
			</div>
		</div>
			<div class="mCSB_draggerRail">
			</div>
			</div>
			</div>
			</ul>
			</div>
			<div class="paging-rsch">
				<div class="col-md-12">
					<div class="pull-left">Sorting &gt;</div>
					<div class="pull-right">
				<ul><li><a href="?page=1">1</a></li>
					<li><a href="?page=2">2</a></li>
					<li><a href="?page=3">3</a></li>
					<li><a href="?page=4">4</a></li>
					<li><a href="?page=5">5</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-xs-12 deskripsicategori">
		<h1 class="col-md-12 col-xs-12">new</h1>
		<div class="col-md-12 col-xs-12 descnya"><p>
			<span style="color:rgb(34,34,34);font - family:arial,sans - serif;font - size:12.8px">Our newest collection for your freshest looks. Ranging from our basic and essentials to more detailed and unique fabric. This page updated weekly, so you wouldn’t miss one single beat.</span><br>
		</p>
	</div>
	</div>
	<div class="productlist">
		<div class="row mx-auto">
    	<div class="card mr-2 ml-3" style="width: 18rem;">
		  <img src="https://schofficial.com/Content/frontend/img/campaign/winner-2k18.png" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">EoL 2018 Deals Winners List</h5>
		    <button type="button" class="btn btn-link">More Info</button>
		  </div>
		</div>
		<div class="col-xs-6">
			<a href="/en/Product/18166/SCH-FEMALE-SWEATSHIRTSANNA-PH-YELLOW">
				<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/anna-ph-yellow-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
					<div class="row mx-auto"></div>
					<div class="card mr-2 ml-3" style="width: 18rem;"></div>
				</div>
			</a>
			<div class="caption-rsch">
				<a href="/en/Product/18166/SCH-FEMALE-SWEATSHIRTSANNA-PH-YELLOW">
					<label>ANNA PH</label>
				</a>
				<div class="col-md-12 nopadding">
					<div class="pull-left format-money"> IDR 295.000
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6">
			<a href="/en/Product/18165/SCH-FEMALE-SWEATSHIRTSANNA-PH-BROWN">
				<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/anna-ph-brown-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
				<div class="row mx-auto"></div>
					<div class="card mr-2 ml-3" style="width: 18rem;"></div>
				</div>
			</a>
			<div class="caption-rsch">
				<a href="/en/Product/18165/SCH-FEMALE-SWEATSHIRTSANNA-PH-BROWN">
					<label>ANNA PH</label> 
				</a>
				<div class="col-md-12 nopadding">
					<div class="pull-left format-money"> IDR 295.000
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6"><a href="/en/Product/18080/GUMMO-FEMALE-JACKETSGOLDROOM-BMJ-GRAY">
			<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/goldroom-bmj-gray-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
				<div class="row mx-auto"></div>
				<div class="card mr-2 ml-3" style="width: 18rem;"></div>
			</div>
		</a>
		<div class="caption-rsch">
			<a href="/en/Product/18080/GUMMO-FEMALE-JACKETSGOLDROOM-BMJ-GRAY">
				<label>GOLDROOM</label>
			</a>
			<div class="col-md-12 nopadding">
				<div class="pull-left format-money"> IDR 330.000</div>
			</div>
		</div>
	</div>
		<div class="col-xs-6">
			<a href="/en/Product/18057/SCH-FEMALE-KNITWEARDAZLING-CNK-PEACH">
			<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/dazling-cnk-peach-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
				<div class="row mx-auto"></div>
				<div class="card mr-2 ml-3" style="width: 18rem;"></div>
			</div>
			</a>
			<div class="caption-rsch"><a href="/en/Product/18057/SCH-FEMALE-KNITWEARDAZLING-CNK-PEACH">
				<label>DAZLING</label>
			</a>
			<div class="col-md-12 nopadding">
				<div class="pull-left format-money"> IDR 145.000</div>
			</div>
		</div>
	</div>
	<div class="col-xs-6"><a href="/en/Product/18055/GUMMO-FEMALE-JACKETSGOLDROOM-BMJ-PINK">
		<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/goldroom-bmj-pink-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
			<div class="row mx-auto"></div>
			<div class="card mr-2 ml-3" style="width: 18rem;"></div>
		</div>
	</a>
	<div class="caption-rsch">
		<a href="/en/Product/18055/GUMMO-FEMALE-JACKETSGOLDROOM-BMJ-PINK">
			<label>GOLDROOM</label>
		</a>
		<div class="col-md-12 nopadding">
			<div class="pull-left format-money"> IDR 330.000</div>
		</div>
	</div>
	</div>
	<div class="col-xs-6"><a href="/en/Product/17858/GUMMO-FEMALE-SWEATSHIRTSANXIENTY-ZH-RED"><div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/anxienty-zh-red-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
		<div class="row mx-auto"></div>
		<div class="card mr-2 ml-3" style="width: 18rem;"></div>
	</div>
	</a>
	<div class="caption-rsch">
		<a href="/en/Product/17858/GUMMO-FEMALE-SWEATSHIRTSANXIENTY-ZH-RED">
			<label>ANXIENTY</label>
		</a>
		<div class="col-md-12 nopadding">
			<div class="pull-left format-money"> IDR 320.000</div>
		</div>
	</div>
	</div>
	<div class="col-xs-6">
		<a href="/en/Product/17413/RSCH-FEMALE-JACKETSSDT-78-TURQUOISE-DARK-PURPLE-OFF-WHITE-RED">
			<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/sdt-78-turquoise-dark-purple-off-white-red-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
				<div class="row mx-auto"></div>
				<div class="card mr-2 ml-3" style="width: 18rem;"></div>
			</div>
		</a>
		<div class="caption-rsch">
			<a href="/en/Product/17413/RSCH-FEMALE-JACKETSSDT-78-TURQUOISE-DARK-PURPLE-OFF-WHITE-RED">
				<label>SDT 78</label>
			</a>
			<div class="col-md-12 nopadding">
				<div class="pull-left format-money"> IDR 260.000</div>
			</div>
		</div>
	</div>
	<div class="col-xs-6">
		<a href="/en/Product/17330/RSCH-FEMALE-JACKETSSDT-81-DARK-BROWN-BLUE-BENHUR-TOSCA-GREEN-OFF-WHITE">
			<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/sdt-81-dark-brown-blue-benhur-tosca-green-off-white-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
				<div class="row mx-auto"></div>
				<div class="card mr-2 ml-3" style="width: 18rem;"></div>
				<div class="row mx-auto"></div>
					<div class="card mr-2 ml-3" style="width: 18rem;"></div>
			</div>
		</a>
		<div class="caption-rsch">
			<a href="/en/Product/17330/RSCH-FEMALE-JACKETSSDT-81-DARK-BROWN-BLUE-BENHUR-TOSCA-GREEN-OFF-WHITE">
				<label>SDT 81</label>
			</a>
			<div class="col-md-12 nopadding">
				<div class="pull-left format-money"> IDR 260.000</div>
			</div>
		</div>
	</div>
	<div class="col-xs-6">
		<a href="/en/Product/17281/RSCH-FEMALE-JACKETSSDT-79-DARK-BROWN-DARK-RED-OFF-WHITE">
			<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/sdt-79-dark-brown-dark-red-off-white-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
				<div class="row mx-auto"></div>
					<div class="card mr-2 ml-3" style="width: 18rem;"></div>
			</div>
		</a>
		<div class="caption-rsch">
			<a href="/en/Product/17281/RSCH-FEMALE-JACKETSSDT-79-DARK-BROWN-DARK-RED-OFF-WHITE">
				<label>SDT 79</label>
			</a>
			<div class="col-md-12 nopadding">
				<div class="pull-left format-money"> IDR 260.000</div>
			</div>
		</div>
	</div>
	<div class="col-xs-6">
		<a href="/en/Product/17252/RSCH-FEMALE-JACKETSSDT-83-PINK-BLUE-BENHUR-DARK-BROWN-OFF-WHITE">
			<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/sdt-83-pink-blue-benhur-dark-brown-off-white-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
				<div class="row mx-auto"></div>
					<div class="card mr-2 ml-3" style="width: 18rem;"></div>
			</div>
		</a>
		<div class="caption-rsch">
			<a href="/en/Product/17252/RSCH-FEMALE-JACKETSSDT-83-PINK-BLUE-BENHUR-DARK-BROWN-OFF-WHITE">
				<label>SDT 83</label>
			</a>
			<div class="col-md-12 nopadding">
				<div class="pull-left format-money"> IDR 260.000</div>
			</div>
		</div>
	</div>
	<div class="col-xs-6">
		<a href="/en/Product/17204/RSCH-FEMALE-JACKETSSDT-80-NAVY-BLUE-TOSCA-GREEN-PINK-OFF-WHITE">
			<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/sdt-80-navy-blue-tosca-green-pink-off-white-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
				<div class="row mx-auto"></div>
					<div class="card mr-2 ml-3" style="width: 18rem;"></div>
			</div>
		</a>
		<div class="caption-rsch">
			<a href="/en/Product/17204/RSCH-FEMALE-JACKETSSDT-80-NAVY-BLUE-TOSCA-GREEN-PINK-OFF-WHITE">
				<label>SDT 80</label>
			</a>
			<div class="col-md-12 nopadding">
				<div class="pull-left format-money"> IDR 260.000</div>
			</div>
		</div>
	</div>
	<div class="col-xs-6">
		<a href="/en/Product/17159/GUMMO-FEMALE-SHIRTSFLANNEL-SHIRT-CUBA-RED/GRAY">
			<div class="img-full" style="background:#fff url(https://manage.schofficial.com/assets/images/product/flannel-shirt-cuba-red-gray-2.jpg);height:200px;width:100%;background-size:70%;background-position:50%;background-repeat:no-repeat">
				<div class="row mx-auto"></div>
					<div class="card mr-2 ml-3" style="width: 18rem;"></div>
			</div>
		</a>
			</div>
	</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>