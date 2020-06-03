<?php
session_start();
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}
include('header.php');
include('connect.php');
?>
<style>
.responsive {
  width: 100%;
  height: 400px!important;
 }
</style>

<img src="images/m11.jpg" alt="RINGS" class="responsive">
<h2 class="mt-4" style="text-align:center">Trending Collection</h2>

<div class="container mt-5 mb-5">
    <div class="col-md-12 row">
       <?php
      $sql = "select * from ring";
      $result = $db->query($sql);

      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
      ?>
     <div class="col-md-3 text-center">
        <img src="Ring/<?php echo $row['images name'];?>" class="img-fluid">
        <h3><?php echo $row['product name'];?></h3>
        <p class="price">price: ₹ <?php echo $row['price'];?></p>
        <a href="desc ring.php?id=<?php echo $row['id'];?>" class="btn btn-info" role="button">see more</a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
     


 <div class="container mb-5">
 <div class="col-md-12 row">
<p>
  Gold rings with a sunflower like an appearance have a unique beauty. They have an unmistakable bling. They are surrounded by the dotted designs in an overlapping petal-like manner. Waman Hari Pethe jewelers have different innovations in the sunflower ring pattern too. They fill the ring with colorful gemstones, running in between the golden borders. The number of petals varies, you can find well-arranged petals to gorgeously crowded petals. One can even get mesmerized by a centrally placed gemstone surrounded by gold all over.<br>Gold rings dig their way deep into the ancient times. People shifted from copper and bronze rings to gold rings, when they got to know about gold’s existence. Gold rings have always considered being a sign of pure love. Indian families opt for gold rings over others. They are good for casual wear and can be gifted to loved ones. They never go out of fashion.
</p>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>