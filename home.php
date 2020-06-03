<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}
include('header.php');
include('connect.php');
?>
<style type="text/css">
.aboutimg{
  width:100%;
  height:40;
}  
</style>

<div class="swiper-container mt-4">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(images/p9.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(images/9.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(images/5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(images/78.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(images/6.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(images/11.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(images/8.png)"></div>
      <div class="swiper-slide" style="background-image:url(images/10.jpg)"></div>
    </div>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">ABOUT ARTIFICIAL GOLD</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-3 col-12">
        <img src="images/9.jpg" class="img-fluid aboutimg">
      </div>

       <div class="col-lg-6 col-md-3 col-12">
       <h2 class="display-4">Glitz Fashion Jewelry Set for Women Enamel Butterfly ...</h2>
       <p class="py-3">
        Gold is a soft, dense, yellow metal.<b>Our designs apart from being unique and exclusive also carry our signature quality and service.</b> <b>Now jewelleries from one of the best jewellery stores in India is available online for shopping. But our reputation is all because of you, our customers who find our jewelleries so appealing and stylish.Our online shopping experience offers an array of jewelleries ranging from simple gold coins to exquisite solitaire rings. From stylish gold jewellery to exclusive platinum & diamond jewelleries.</b>
       </p>
       <a href="about gold.php" class="btn btn-success"> Check more</a>
     </div>
    </div>
  </div>
</section>

<h2 class="mt-4" style="text-align:center">Trending Collection</h2>

<div class="container mt-5 mb-5">
    <div class="col-md-12 row">
      <?php
      $sql = "select * from products";
      $result = $db->query($sql);

      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
      ?>
      <div class="col-md-3 text-center">
        <img src="images/<?php echo $row['images name'];?>" class="img-fluid">
        <h3><?php echo $row['product name'];?></h3>
        <p class="price">price: ₹ <?php echo $row['price'];?></p>
        <a href="description.php?id=<?php echo $row['id'];?>" class="btn btn-info" role="button">see more</a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>

<section class="my-5">
  <div class="py-5">
    <h1 class="text-center">Artificial Necklace Set</h1>
  </div>

 <div class="container-fluid">
    <div class="row">
      <div class="col-lg-1 text-center"></div>
      <div class="col-lg-2 col-md-4 col-12 text-center">
        <h2 class="display-4">Artificial Set</h2>
        <img src="images/bb.jpeg" class="img-fluid aboutimg">
      </div> 

       <div class="col-lg-8 col-md-3 col-12 text-center">
       <p class="py-3">
       <h2>Beautiful kundan work and beads work neckkace sets with earrings and Maang Tikka, available in all colors</h2><br>
        Gold Characteristics<br>You are very cordially welcome to the world of ethnicity and colours, proudly presented by LAVISH. We carry the expertise in both Handcrafted Designer Accessories and world class Handcrafted Designer Costume Jewelry. We are happy to spread their art and talent throughout the world.
      </p>
</section>

<section class="my-5">
  <div class="py-5">
  </div>

 <div class="container-fluid">
    <div class="row">
      <div class="col-lg-1 text-center"></div>
      <div class="col-lg-2 col-md-4 col-12 text-center">
        <h1 class="display-4">Miracle Copper</h1>
        <img src="images/25.jpg" class="img-fluid aboutimg">
      </div> 

      <div class="col-lg-8 col-md-3 col-12 text-center">
       <p class="py-3">
        <h1>Miracle Jewels Copper </h1>><br>
       we (Miracle Jewels) are a foremost and prominent organization engaged in Manufacturer, Wholesaler, Supplier and Exporter and whole selling in four verticals of Jewelry, namely Antique Gold Polki, CZ (Cubic Zirconia), Kundan & Jarau.<br>All the products manufactured are compliant with industry norms and are completely exportable. These products are designed with the use of industry allowable basic material. They are highly esteemed across the industry for their lightweight, durability and long lasting shine. Furthermore, these offered products are widely used by ladies for their fashionable look and trendy designs under various occassions.</p>
      </div>
    </div>

 <section class="my-5">
   <div class="py-5">
   <h2 class="text-center">Contact Us</h2>
  </div>

  <div class="w-50 m-auto">
    <form action="contact info.php" method="post">
      <div class="form-group">
        <label>username</label>
        <input type="text" name="username" autocomplete="off" class="form-control">
      </div>

       <div class="form-group">
        <label>Email</label>
        <input type="text" name="Email ID" autocomplete="off" class="form-control">
      </div>

       <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments">
        </textarea>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">Panna Ornaments Website</p>
</footer>
       

</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
<script type="text/javascript">
  var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      autoplay: {
      delay: 500,
      },
      loop:true,/*
      pagination: {
        el: '.swiper-pagination',
      },*/
    });
</script>