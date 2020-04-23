<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
    ?>
<?php 
include 'co.php';
$se="select * from products join productcategory on products.catid=productcategory.catid" ;
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
                      <!--<li class="has-children">
                        <a href="">Create account</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="reg.php">Unit member</a></li>
                          <li><a href="userreg.php">User</a></li>                                                   
                        </ul>
                      </li>-->
                      <!--<li><a href="login.html">Login</a></li>-->
					  <li><a href="adsindex.php"><font size="3" color="black">Home</font></a></li>
					  <!--<li class="has-children">
                        <a href=""><font size="3" color="black">Profile</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="adschangepswd.php">Change Password</a></li>
                          <!--<li><a href="userreg.php">User</a></li>-->                                                   
                        <!--</ul>
                      </li>-->
					  <!--<li class="has-children">
                        <a href=""><font size="3" color="black">Members</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="adsaddmember.php">Add Members</a></li>
                          <li><a href="adsviewmember.php">View Members</a></li>                                                   
                        </ul>
                      </li>-->
					  <li class="has-children">
                        <a href=""><font size="3" color="black">Products</font></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="adsaddproducts.php">Add </a></li>
                          <li><a href="adsviewproducts.php">View </a></li>                                                   
                        </ul>
                      </li>
					  <!--<li><a href="adsviewexh.php"><font size="3" color="black">Exhibition</font></a></li>-->
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

  
    
    
  </style>

</head>
<body style="background: url(img/.jpg); min-height:900px;">
<?php
$se=" select * from `products` ";
 $re=mysqli_query($con,$se);
?>
<br><br>
<table  class="align-center"style=" margin-top: 30px; text-align: center;margin-left: auto;margin-right: auto;border-collapse: collapse;width: 90%;">
  <tr style="color: white;font-size:15px; ">
  <tr><center><h2><h2></center> </tr>
   <!--<th>No</th>-->
    <th>Name</th>
    <th>Category</th>
    <th>Cost</th> 
  	<th>More</th> 
    <th>Remove</th>
	<th>Image</th>
  </tr>
<?php
while($row=mysqli_fetch_array($r))  
 {
	
?>
<tr>
<!--<td style="font-size: 15px;"> 
  
   <?php 
        //echo $row['pid'];
        //$_SESSION['product_id'] =  $row['product_id'];
        
    ?>
  </td>-->
  <td style="font-size: 15px;"> 
   <?php 
        echo $row['pname'];
    ?>
  </td>
  <td style="font-size: 15px;"> 
   <?php 
        echo $row['name'];
    ?>
  </td>
 <td style="font-size: 15px;"> 
   <?php 
        echo $row['pcost'];
    ?>
  </td>
  <td style="font-size: 15px;"> 
   <button><a href="moreproductdetails.php?id=<?php echo $row['pid']; ?>"> more</a>
 </button>
 </td>
 <td style="font-size: 15px;"> 
   <button><a href="deleteproducts.php?idd=<?php echo $row['pid']; ?>"> Remove</a>
 </button>
 </td>
  <td style="font-size: 15px;"> 
  <img src="upload/<?php echo $row['image']; ?>"  style="width:70%" "height="70%">
  </td>
  <td>
    <form action="" method="POST" >
      <input type="hidden" name="id" value="<?php echo $row['pid']; ?>"/>
      <!--<input type="submit" value="BUY" class="btn btn-primary py-3 px-5">-->
    </form>
     
  </td>
 </tr>
 <?php
}
?>
</table>

</body>
</html>
  <?php
}
else
header("location:/MAINPROJECT/login.html");
?>
