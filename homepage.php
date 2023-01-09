<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<script>
  $("div").click(function(){
   window.location=$(this).find("a").attr("href"); return false;
});
</script>
<body>
<nav>
<h1 class="logo-font2">
    <span class="logo-head2">
    <font color="#D92121" >K</font>
    <font color="#BD9F00" >M</font>
    <font color="#131F89">S</font>
    </span>
      <font class="logo-headtext2">Steel Industry</font>
    <font class="logo-subtext2">We Help To Build Dreams</font>
</h1>
<a class="logout" href="login.php">LogOut</a>
</nav>
<div id="slider">
<figure>
<img src="https://imageio.forbes.com/blogs-images/bernardmarr/files/2018/09/AdobeStock_203804824-1200x480.png?format=png&width=1200" alt class="slider-image">
<img src="https://www.knowledgepublisher.com/assets/industrial-revolutions.png" alt class="slider-image">
<img src="https://www.renaix.com/wp-content/uploads/2019/01/Industry-4.0-%E2%80%93-The-Fourth-Industrial-Revolution-1024x497.png" alt class="slider-image">
<img src="https://www.integratedfoodprojects.com/wp-content/uploads/2019/01/industry-2496192_1920.jpg" alt>
<img src="https://www.epicor.com/globalassets/uploadedimages/shared/fy21/featured-image/internet-of-things-cityscape-banner.jpg" alt class="slider-image">
</figure>
</div>
<div class="work-space">
  <div class="work-row1">
   <div class="work-sub1"  onclick="location.href='customer.php'">
<img src="images/customer.png" alt="" class="work-logo1">

</div>
<div class="work-sub2">
<img src="images/employee.png" alt="" class="work-logo2">
<p class="work-sub2text">Employee</p>
</div>
<div class="work-sub3">
<img src="images/supllier.png" alt="" class="work-logo3">
<p class="work-sub3text">Supplier</p>
</div>
</div>
<div class="work-row2">
   <div class="work-sub4">
<img src="images/product.png" alt="" class="work-logo4">
<p class="work-sub4text">Product</p>
</div>
<div class="work-sub5">
<img src="images/order.png" alt="" class="work-logo5">
<p class="work-sub5text">Order</p>
</div>
<div class="work-sub6">
<img src="images/revenue.png" alt="" class="work-logo6">
<p class="work-sub6text">Revenue</p>
</div>
</div>
</div>
</body>
</html>
