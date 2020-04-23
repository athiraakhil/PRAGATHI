<?php
session_start();
$logid=$_SESSION['login'];
$log=$_SESSION['loginid'];
//$pid=$_SESSION['pid'];
if (isset($_SESSION['login'])) {
include 'co.php';


$se="select * from cart,products where cart.pid = products.pid and logid = '$log'" ;


$r=mysqli_query($con,$se);
?>
<!DOCTYPE html>
<html>
<head>
  <title>table</title>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
  <!--<div class="header-w3layouts">
    <div class="container">

     
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
        
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
      <div class="logo-nav-left1">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <!--<div class="navbar-he<div class="site-navbar-wrap js-site-navbar bg-white">-->
		  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
		  
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="">Pragathi</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="">Home</a>
                      </li>
					  <li><a href="cdsindex.php"><font size="3" color="black">Home</font></a></li>
					  <!--<li class="has-children">
                        <a href=""><font size="3" color="black">Profile</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="adschangepswd.php">Change password</a></li>
                          <!--<li><a href="userreg.php">View Profile</a></li>-->                                                   
                        <!--</ul>
                      </li>-->
					  <!--<li class="has-children">
                        <a href=""><font size="3" color="black">Members</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="cdsaddads.php">Add Ads</a></li>
                          <li class="has-children">
						  <a href="">View</a>
						  <ul class="dropdown arrow-top">
                          <li><a href="cdsviewads.php">Ads</a></li>                         
                          <li><a href="cdsviewmember.php">Unit members</a></li> 						  
                        </ul>
						  </li>                                                   
                        </ul>
                      </li>-->
					  <!--<li class="has-children">
                        <a href=""><font size="3" color="black">Products</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="adsaddproducts.php">Add </a></li>
                          <li><a href="adsviewproducts.php">View </a></li>                                                   
                        </ul>
                      </li>-->
					  <!--<li class="has-children">
					  <a href=""><font size="3" color="black">Exhibition</font></a>
					  <ul class="dropdown arrow-top">
                          <li><a href="addexhibition.php">Add</a></li>                         
                          <li><a href="cdsviewexh.php">View</a></li> 						  
                        </ul>
						</li>-->
                      <!--<li class="has-children">
                        <a href="">Create account</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="reg.php">Unit member</a></li>
                          <li><a href="userreg.php">User</a></li>                                                   
                        </ul>
                      </li>-->
                      <!--<li><a href="login.html">Login</a></li>-->
					  <li><a href="logout.php"><font size="3" color="black">Logout</font></a></li>
                      <!--<li><a href="index.html">About</a></li>
                      <li><a href="index.html">Contact</a></li>-->
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <style type="text/css">
    th{
      width: 150px;
      height: 50px;
      background-color:#4caf50;
      color: white;

    }
    td{
      width: 100px;
      height: 30px;
      

    }
    th,td{
      text-align: left;
      padding: 8px;
    }

  .button {
	  background-color: #f44336;
	  font-size: 16px;
	  padding: 14px 40px;
	  }
	  
    
    
  </style>

</head>
<br><br>
<body style="background: url(img/.jpg); min-height:900px;">
    <section class="ftco-section ftco-cart">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="cart-list">
              <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    
                    <th>Image</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th> 
                    <th>Remove</th>
                  </tr>
                </thead>
                <?php
while($row=mysqli_fetch_array($r))  
 {
$f=$row['cartid'];
?>

                <tbody>
                  <tr class="text-center">
                   
                      <?php 
         $row['cartid'];

       $_SESSION['cartid'] =  $row['cartid'];
        
    ?>
  
                     </td>
  <td style="font-size: 15px;"> 
  <img src="upload/<?php echo $row['image']; ?>"  style="width:70%" "height="70%">
  </td>
                    
                    <td class="product-name">
                      <h3><?php echo $row['cartproduct']; ?></h3>
                     
                    </td>
                    
                    <td class="price"><?php echo $row['cartprice']; ?></td>
                    
                    <td class="quantity">
                      <?php echo $row['cartquantity']; ?>
                    </td>
                    
                    <td class="total"><?php echo $row['carttotal']?></td>
                     <td class="product-remove"><a href="cdscartdel.php?id=<?php echo $f; ?>" style="background-color: red"><span class="ion-ios-close"><button>Remove</button></span></a></td>
                  </tr>
                  <input type="hidden" name="subtotal" value="
                  <?php
                  $total+=$row['carttotal'];
                  ?>">
                   <?php
                       }
                    ?>

                  
                </tbody>
              </table>
              
            </div>
          </div>
        </div>
        <!-- <div class="row justify-content-end">
          <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
              <h3>Coupon Code</h3>
              <p>Enter your coupon code if you have one</p>
              <form action="#" class="info">
                <div class="form-group">
                  <label for="">Coupon code</label>
                  <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
              </form>
            </div>
            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
          </div>
          <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
              <h3>Estimate shipping and tax</h3>
              <p>Enter your destination to get a shipping estimate</p>
              <form action="#" class="info">
                <div class="form-group">
                  <label for="">Country</label>
                  <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
                <div class="form-group">
                  <label for="country">State/Province</label>
                  <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
                <div class="form-group">
                  <label for="country">Zip/Postal Code</label>
                  <input type="text" class="form-control text-left px-3" placeholder="">
                </div>
              </form>
            </div>
            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p>
          </div> -->
          <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
            <div class="cart-total mb-3">
              <h3>Cart Totals</h3>
              <p class="d-flex">
                <span>Subtotal</span>&nbsp&nbsp&nbsp
                <span><?php echo $total ?></span>
                <?php
                $_SESSION['total']=$total;
                ?>
              </p>
              <p class="d-flex">
                <span>Delivery</span>&nbsp&nbsp&nbsp
                <span>0</span>
              </p>
              
              
              <hr>
              <p class="d-flex total-price">
                <span>Total</span>&nbsp&nbsp&nbsp
                <span><?php echo $total ?></span>
              </p>
            </div>
			<form action="cdscheckout.php" method="POST">
			<input type="hidden" name="id" >
			
            <button type="submit" class="button" ><font color="white">Proceed to Checkout</font></button></p>
			</form>
          </div>
        </div>
      </div>
    </section>
</body>
</html>
  <?php
}
 
else
header("location:/MAINPROJECT/login.html");
?>
