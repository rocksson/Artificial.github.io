<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}
include('header.php');
?>

<style>
* {box-sizing: border-box;}

.responsive {
  width: 100%;
  height: 400px;
 }


.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 60%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 10px;
  text-align: center;
}


.container:hover .overlay {
  opacity: 1;
}
</style>

<img src="images/552.jpg" alt="diamond" class="responsive">

<section class="my-2">
   <div class="py-5">
   	<h2 class="text-center"><i>ANTIQUE STYLE BANGLES</i></h2>
   </div>

   <div class="container mt-2 mb-5">
	<p><b>Antique style bangles and antique style karas comes with magnificent charming effect and various designs and style with single coloured stones and multicoloured stones and crystals and peacock style with gold plating, hinged style kara and leaf style kara and many more.<br>
Our beautiful gold collection includes an assorted variety of jewelry starting from neck-pieces to bangles and rings to bracelets, beautifully designed to suit any mood and occasion of the wearer.</b></p>
</div>

   <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-2 col-12">
        <div class="container">
         <img src="images/115.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Queen Earrings</div>
        </div>
      </div>
      <div class="col-lg-3 col-md-2 col-12">
        <div class="container">
         <img src="images/116.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Karatcart Red</div>
        </div>
      </div>
      <div class="col-lg-3 col-md-2 col-12">
        <div class="container">
         <img src="images/114.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Cascading Tassels</div>
        </div>
      </div>

      <div class="col-lg-3 col-md-2 col-12">
        <div class="container">
         <img src="images/q1.png" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Panna Gold Pendant</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/113.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Antique Style Gold Plated Kara Bangle</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/gp5.png" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Phalak Chandelier Gold Earring</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/112.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Antique Style Gold Plated Kara</div>
        </div>
      </div>
    </div>
   </div>

<?php include('footer.php'); ?>
</section>