<?php
session_start();
if (isset($_SESSION['login'])) {
include('co.php');
$pid=$_GET['id'];
$logid=$_SESSION['login'];
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
                        <a href="cdsindex.php">Home</a>
                      </li>
					  <li><a href="cdsindex.php"><font size="3" color="black">Home</font></a></li>
					  <!--<li class="has-children">
                        <a href=""><font size="3" color="black">Profile</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="cdschangepswd.php">Change password</a></li>
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
      width: 150px;
      height: 30px;
      

    }
    th,td{
      text-align: left;
      padding: 8px;
    }

  
    
    
  </style>

</head>
<body>
<?php
		$query = "select * from products join productcategory on products.catid=productcategory.catid where pid='$pid'";
		
        $r=mysqli_query($con,$query);
        if(mysqli_num_rows($r) > 0){
        	while ($row = mysqli_fetch_array($r)) {
        		
        		$price = $row['pcost'];
        		$cat = $row['name'];
        		$qty = $row['quantity'];
        		//$pic = $row['product_image'];
        		
        		?>

				<br><br><br>
<form action="cdssingleproduct.php" id="prod" method="POST">    		
    
    	<div class="container">
    		<div class="row">
    			
    			 <div class="col-lg-6 mb-5 ftco-animate">
    			     
      
    				 
               <img src="upload/<?php echo $row['image']; ?>"  style="width:70%" "height="70%">
    				
    			</div> 
    		   <div class="col-lg-6 product-details pl-md-5 ftco-animate">

                 <table>
					<tr><td><label for ="mob">Category:</label></td><td><input type="text" name="cat" value="<?php echo $cat; ?>" readonly></td></tr>
    				<tr><td><label for ="mob">Available Quantity:</label></td><td><input type="text" name="qty" value="<?php echo $qty; ?>" readonly></td></tr>
    				<input type="hidden" name="login" value="<?php echo $logid; ?>" readonly>
    				<input type="hidden" name="pro" value="<?php echo $pid; ?>" readonly>
    
    				<tr><td><label for ="mob">Price:</label></td><td><p class="price"><span><input type="text" name="price" value="<?php echo $price; ?>" readonly></span></p></td></tr> 
    				
       	             <tr><td><label for ="mob">Required Quantity:</label></td><td><input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100" autocomplete="off" pattern="[0-9]{1-3}">
	        </table>
	          	

	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		
      <input type="hidden" name="id" value="<?php echo $row['product_id']; ?>"/>
      <input type="submit" name="submit" value="ADD TO CART" class="btn btn-primary py-3 px-5">
    </form>
    			</div>

    		</div>
    	</div>
    				

    		</div>
    	</div>
   
</div>

</form>
 <?php
}
}
?>


</body>
</html>
  <?php
}
else
header("location:/MAINPROJECT/login.html");
?>
