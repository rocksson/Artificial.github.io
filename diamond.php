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

<img src="images/258.jpg" alt="diamond" class="responsive">

<section class="my-2">
   <div class="py-5">
   	<h2 class="text-center"><i>Queen Be Chandbalis With Jhumkis, Emerald Green Stones & Pearls</i></h2>
   </div>

   <div class="container mt-2 mb-5">
	<p><b>This piece is designed as a single half crescent with small four jhumki on the base with emerald green stones and pearls, let your ears do all the talking.Styled in traditional half moon designs with twin row pearls and frolicking jhumki complete the look
Style Tip - Pair these chandbalis with traditional outfit ,This bold beauty looks the best with bold eyes and subtle lip colour
Do take care - Keep the jewellery away from direct heat, detergents, lotions/creams, perfumes/deodorants or any other harmful chemicals
Clean the jewellery with dry cotton cloth and store in airtight container or jewellery box</b></p>
</div>

   <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/111.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Necklaces set</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/222.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Gold Exotic </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/33.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Kundan Flower</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/444.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Braid Kundan</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/555.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Tarditional gold</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-12">
        <div class="container">
         <img src="images/66.jpg" class="img-fluid pb-3" width="304" height="236">
         <div class="overlay">Chandbalis</div>
        </div>
      </div>
    </div>
   </div>

<?php include('footer.php'); ?>
</section>