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

<img src="images/551.jpg" alt="Platinum" class="responsive">

<section class="my-2">
   <div class="py-5">
   	<h2 class="text-center"><i>DANGLE AND DROPS</i></h2>
   </div>

   <div class="container mt-2 mb-5">
	<p><b>we have numerous imitation jewellery collection of dangle and drop earrings from metallic dangle and drops earrings to crystals dangles, from American diamond dangles to gold plated dangles, from kundan polki drop earrings to crystal drop earrings and also with interchangeable stones or crystals and many more designs and styles to choose from with different patterns as well. Browse and Shop artificial jewellery for women online</b></p>
</div>

   <div class="container-fluid">
   	<div class="row">
   		<div class="col-lg-4 col-md-4 col-12">
   			<div class="container">
         <img src="images/221.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Swashbuckling Petal CZ Incised</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/21.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Stylish Resin Fancy Party</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/231.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay"> Fancy Party Wear Earrings</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/32.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Summer Special Enamel earring</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/331.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay"> Dancing Peacock Blue Gold Plated</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/34.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Contemporary FloralCut</div>
        </div>
      </div>
    </div>
   </div>

<?php include('footer.php'); ?>
</section>