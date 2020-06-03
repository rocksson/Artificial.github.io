<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('location:panna.php');
}
include('header.php');
?>

<style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/256.jpg" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/259.jpg" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/255.jpg" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<h2 class="mt-4" style="text-align:center">CATALOGUE</h2>

<div class="container mt-5 mb-5">
    <div class="col-md-12 row">
      <div class="col-md-3 text-center">
        <img src="images/da1.jpg" class="img-fluid">
      </div>

      <div class="col-md-3 text-center">
        <img src="images/go1.jpg" class="img-fluid">
      </div>

      <div class="col-md-3 text-center">
        <img src="images/gj1.jpg" class="img-fluid">
      </div>

      <div class="col-md-3 text-center">
        <img src="images/sj1.jpg" class="img-fluid">
      </div>
    </div>
  </div>

  <h2 class="mt-4" style="text-align:center">BROWSE BY CATEGORY</h2>

  <div class="container mt-5 mb-5">
    <div class="col-md-12 row">
      <div class="col-md-3 text-center">
        <img src="images/re1.jpg" class="img-fluid">
      </div>

      <div class="col-md-3 text-center">
        <img src="images/re2.jpg" class="img-fluid">
      </div>

      <div class="col-md-3 text-center">
        <img src="images/de2.jpg" class="img-fluid">
      </div>

      <div class="col-md-3 text-center">
        <img src="images/de4.jpg" class="img-fluid">
      </div>
    </div>
  </div>

      
<h2 class="mt-4" style="text-align:center">TOP TRENDING COLLECTIONs</h2>

<div class="container mt-5 mb-5">
    <div class="col-md-12 row">
      <div class="col-md-3 text-center pb-3">
        <img src="images/h1.jpg" class="img-fluid">
      </div>

      <div class="col-md-3 text-center pb-3">
        <img src="images/h2.jpg" class="img-fluid">
      </div>

      <div class="col-md-3 text-center pb-3">
        <img src="images/h3.jpg" class="img-fluid">
      </div>

      <div class="col-md-3 text-center pb-3">
        <img src="images/h4.jpg" class="img-fluid">
      </div>
       
       <div class="col-md-3 text-center pb-3">
        <img src="images/h5.jpg" class="img-fluid">
      </div>

       <div class="col-md-3 text-center pb-3">
        <img src="images/h6.jpg" class="img-fluid">
      </div>

       <div class="col-md-3 text-center pb-3">
        <img src="images/h7.jpg" class="img-fluid">
      </div>

       <div class="col-md-3 text-center pb-3">
        <img src="images/h8.jpg" class="img-fluid">
      </div>

    </div>
  </div>  


   <div class="container mb-5">
    <div class="col-md-12 row">
  <h6><i><b>Buy Jewellery Online with www.panna ornaments.com</b></i></h6>
  <p>We always find ways to show our affection to our loved ones. Making a special moment even more special needs a unique gift. Whatever may be the occasion, a birthday, an engagement, a marriage, an anniversary or any other special day, a gift should bring a smile on your partner's face. And what makes them smile the most? I am sure it is jewellery. Jewellery helps the beauty to flourish and makes your prtner glow.
</p>
 
</div>
</div>


<div class="container mb-5">
    <div class="col-md-12 row">
<h6><i><b>Jewellery offered at Panna ornaments can be categorized in three verticals:</b></i></h6>
</div>
</div>

<div class="container mt-2 mb-5">
    <div class="col-md-12 row"> 
 <ul class="list-group">
  <li class="list-group-item"><h4>Traditional Jewellery</h4></li>
  <li class="list-group-item"><h4>Contemporary Jewellery</h4></li>
  <li class="list-group-item"><h4>Fusion Jewellery</h4></li>
</ul>
</div>
</div>


</body>
<?php include('footer.php'); ?>
</html>