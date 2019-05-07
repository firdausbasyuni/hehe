<html>
<head>
<title></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="shorcut icon" type="text/css" href="https://cf.shopee.co.id/file/59510afc4eaa2bc01551e0a751376ac5">
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- my font -->
      <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
      <!-- my font -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <style>
         .MyAccount-navigation {
            list-style-type: none;
            margin: 90px;
            padding: 25px;
            width: 20%;
            display: block;
            background-color: #F6F6F8;
            position: relative;
            float: left;
            box-sizing: border-box;
         }
         .MyAccount-navigation ul li {
            list-style-type: none;
            line-height: 25px;
            position: relative;
            padding-left: 15px;
            margin-bottom: 5px;
            font-size: 14px;
         }
         .MyAccount-navigation ul li.is-active a {
            color: #222;
         }
         .MyAccount-navigation ul li:hover a {
            color: #56cfe1;
            text-decoration: none;
         }
         .row {

            display: block;
            position: relative;
            margin: 90px;
            width: calc(50%);
            padding: 25px;
            float: right;
            background-color: #f6f6f8;
            min-height: 230px;
            

         }
         .row p {
            font-size: 14px;
         }
         /*.footer {
            background-color: #ffff;
            line-height: 1;
            padding-bottom: 20px;
            padding-top: 20px;
         }*/
         .navbar-dark .navbar-nav .nav-link {
  color: rgb(255, 255, 255);
  }

  .nav-link:hover {
  color: #00BCFF; 
  text-decoration: none; 
  font-weight: none;
  animation-delay: 2s;
  }

  .ts__05 {
   transition: all .5s;
  }

  .w__100 {
   width: 100%;
  }
      </style>
</head>
<body>
     <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark" class="text-white" style="position: relative; height: 62px; background-color:#0b2343">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('Landing'); ?>">
        <img src="<?php echo base_url('assets/erigostore.png'); ?>" width="66" height="40" class="d-inline-block align-top" alt="" style="margin-left: -57px;">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 180px; font-size: 12px;">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item" style="margin-left: 20px;">
            <a href="<?php echo site_url('C_Shirt'); ?>" class="nav-link" href="#">Shirt</a>
          </li>
          <li class="nav-item" style="margin-left: 20px;">
            <a href="<?php echo site_url('C_Tshirt'); ?>" class="nav-link" href="#">T-Shirt</a>
          </li>
          <li class="nav-item" style="margin-left: 20px;">
            <a href="<?php echo site_url('C_Hoodie'); ?>" class="nav-link" href="#">Hoodie</a>
          </li>
          <li class="nav-item" style="margin-left: 20px;">
            <a href="<?php echo site_url('C_Outerwear'); ?>" class="nav-link" href="#">Outerwear</a>
          </li>
          <li class="nav-item" style="margin-left: 20px;">
            <a href="<?php echo site_url('C_Pants'); ?>" class="nav-link" href="#">Pants</a>
          </li>
          <li class="nav-item" style="margin-left: 20px;">
            <a href="<?php echo site_url('C_Waistbag'); ?>" class="nav-link" href="#">Waistbag</a>
          </li>
        </ul>
      </div>
      <div style="margin-left: 130px;">
        <ul class="navbar-nav mx-auto simbol">
          <li class="nav-item">
            <a class="nav-link" href=""><img src="<?php echo base_url('assets/search.png'); ?>"width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Landing/Login'); ?>"><img src="<?php echo base_url('assets/user.png'); ?>" width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="<?php echo base_url('assets/like.png'); ?>"width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="<?php echo base_url('assets/shop.png'); ?>" width="22" height="22"
                class="d-inline-block align-top"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->
    <div class="bg-secondary text-white" style="padding:50px;">
        <h4 class="text-center">MY ACCOUNT</h4>
    </div>     
                <nav class="MyAccount-navigation">
                    <ul>
                        <li class="MyAccount-navigation-link MyAccount-navigation--dashboard is-active">
                            <a href="<?php echo site_url('Landing/loginPage'); ?>">+  Dashboard</a>
                        </li>
                        <li class="MyAccount-navigation-link MyAccount-navigation--orders is-active">
                            <a href="#Orders">+  Orders</a> <!--link nya belum -->
                        </li>
                        <li class="MyAccount-navigation-link MyAccount-navigation--account-details is-active">
                            <a href="#Edit">+  Account details</a> <!--link nya belum -->
                        </li>
                        <li class="MyAccount-navigation-link MyAccount-navigation--logout is-active">
                            <a href="<?php echo site_url('UserController/Logout'); ?>" >+  Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row px-md-n5"> 
                <p> Hello
                <strong>
                     <?php
                        $cookie = $this->input->cookie('logged');
                        if(isset($cookie)){
                            echo $cookie;
                        } else if(isset($_SESSION['successLogin'])) {
                            echo $_SESSION['successLogin'];
                        }
                    ?> 
                </strong>(not
                <strong> 
                    <?php
                        $cookie = $this->input->cookie('logged');
                        if(isset($cookie)){
                            echo $cookie;
                        } else if(isset($_SESSION['successLogin'])) {
                            echo $_SESSION['successLogin'];
                        }
                    ?>    
                 </strong>
            <a href="<?php echo site_url('UserController/Logout'); ?>">Log out </a>
            )</p> 
            <p>
            From your account dashboard you can view your
            <a href="#MyAccount-navigation/Orders">recent orders</a>
            , manage your
            <a href="#MyAccount-navigation/Edit">shipping and billing addresses</a>
            , and"
            <a href="#MyAccount-navigation/Edit">edit your password and account details</a>
            .
            </p>
            </div>
    </body>
</html>