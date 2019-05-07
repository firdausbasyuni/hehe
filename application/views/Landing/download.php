<!DOCTYPE html>
<html>
<head>
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
	<script type="text/javascript" src="download.js"></script>
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
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-left">
    <a class="navbar-brand" href="index.html"><img src="https://www.schofficial.com/Content/frontend/img/logo.png" style="width: 72px; margin-bottom: 36px;"></a>
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
	<div class="row">
	  	<div class="satu col-md-3">
	  		<div class="teks">
	  			<a href="#" style="text-decoration: none; color: #F2F2F2; text-align: left;">
	  				<h3 style="margin-bottom: -2PX; margin-top: 80px; font-size: 21px; text-align: left; margin-left: 80px;">WALLPAPER</h3>
	  				<span style="font-size: 12px;">VIEW NOW</span>
	  			</a>
	  		</div>
	  	</div>
	  	<div class="dua col-md-3" style="">
	  		<div class="teks">
	  			<a href="#" style="text-decoration: none; color: #F2F2F2;">
	  				<h3 style="margin-bottom: -4px; margin-top: 80px; font-size: 21px;">MUSIC</h3>
	  				<span style="font-size: 12px;">VIEW NOW</span>
	  			</a>
	  		</div>
	  	</div>
	  	<div class="tiga col-md-3">
	  		<div class="teks">
	  			<a href="#" style="text-decoration: none; color: #F2F2F2;">
	  				<h3 style="margin-bottom: -4px; margin-top: 80px; font-size: 21px;">VIDEO</h3>
	  				<span style="font-size: 12px;">VIEW NOW</span>
	  			</a>
	  		</div>
	  	</div>
	  	<div class="empat col-md-3">
	  		<div class="teks">
	  			<a href="#" style="text-decoration: none; color: #F2F2F2;">
	  				<h3 style="margin-bottom: -4px; margin-top: 80px; font-size: 21px;">TRUETYPE</h3>
	  				<span style="font-size: 12px;">VIEW NOW</span>
	  			</a>
	  		</div>
	  	</div>
	</div>

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
                    <li><a href="<?php echo site_url('c_male');?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Shop</a></li>
                    <li><a href="<?php echo site_url('c_family');?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Fit Guide</a></li>
                    <li><a href="<?php echo site_url('c_download');?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Lookbook</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Female</a>
                  <ul class="submenu">
                    <li><a href="<?php echo site_url('c_female');?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Shop</a></li>
                    <li><a href="<?php echo site_url('c_family');?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Fit Guide</a></li>
                    <li><a href="<?php echo site_url('c_download');?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Lookbook</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Kids</a>
                  <ul class="submenu">
                    <li><a href="#" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Shop</a></li>
                    <li><a href="<?php echo site_url('c_family');?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Fit Guide</a></li>
                    <li><a href="<?php echo site_url('c_download');?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Lookbook</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Toddler</a>
                  <ul class="submenu">
                    <li><a href="#" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Shop</a></li>
                    <li><a href="<?php echo site_url('c_family');?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Fit Guide</a></li>
                    <li><a href="<?php echo site_url('c_download');?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Lookbook</a></li>
                  </ul>
              </li>
            </ul>
            <hr style="border-color: white; margin-top: 60px; width: 288px; margin-right: -100px;">
            <ul class="mainmenu" style="text-align: left;">
              <li class="dropdown">
                  <a href="#" class="dropdown-link" style="margin-top: -16px;">About Us</a>
                  <ul class="submenu">
                    <li><a href="<?php echo site_url('c_history');?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">History</a></li>
                    <li><a href="<?php echo site_url('c_family');?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Family</a></li>
                    <li><a href="<?php echo site_url('c_download');?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Download</a></li>
                    <li><a href="<?php echo site_url('c_career');?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Career</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Campaign</a>
                  <ul class="submenu">
                    <li><a href="<?php echo site_url('c_news');?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">News</a></li>
                    <li><a href="#" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Project</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Find Us</a>
                  <ul class="submenu">
                    <li><a href="<?php echo site_url('c_store');?>" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">Store</a></li>
                    <li><a href="#" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Distribution</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="#" class="dropdown-link">Customer Service</a>
                  <ul class="submenu">
                    <li><a href="#" style="margin-left: 24px; margin-top: -20px; position: absolute; font-style: italic; color: grey;">FAQ</a></li>
                    <li><a href="<?php echo site_url('c_care');?>" style="margin-left: 24px; margin-bottom: -20px; font-style: italic; color: grey;">Clothing Care</a></li>
                    <li><a href="<?php echo site_url('c_contact');?>" style="margin-left: 24px; margin-bottom: 4px; font-style: italic; color: grey;">Contact Us</a></li>
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
                <a href="<?php echo site_url('c_login');?>" style="font-size: 32px; text-decoration: none; color: #212529; width: 400px;">LOGIN</a>
                </div>
              </div>
                
        	</div>
        </div>	
		</div>
	</div>
	</div>
</div>
</body>
</html>