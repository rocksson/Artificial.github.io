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
  height: auto;
 }
</style>

<img src="neck/n1.jpg" alt="earring" class="responsive" width="600" height="400">
<h2 class="mt-4" style="text-align:center">Trending Collection Necklace</h2>

<div class="container mt-5 mb-5">
    <div class="col-md-12 row">
     <?php
      $sql = "select * from necklaces";
      $result = $db->query($sql);

      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
      ?>
     <div class="col-md-3 text-center">
        <img src="neck/<?php echo $row['images name'];?>" class="img-fluid">
        <h3><?php echo $row['product name'];?></h3>
        <p class="price">price: ₹ <?php echo $row['price'];?></p>
        <a href="desc neck.php?id=<?php echo $row['id'];?>" class="btn btn-info" role="button">see more</a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>

<div class="container mb-5">
   <div class="col-md-12 row">
<p>There are thread necklaces which have gold plated thread like structures instead of a chain. It works as a chain and has pendant and beads in the middle. These necklaces look lovely with a Maharashtrian saree. Bib necklaces are very popular too. They are rectangle like pieces in a chain, dangling near the chest. They touch and suit traditional as well as Western outfits. Chokers are another type of gold necklaces, tremendously in fashion. They are very close to the neck and a pendant like small piece hangs from the middle end. Chokers go with any kind of outfit and they shine splendidly.<br>Necklaces are very popular ornaments which Indians love to wear and show off. Indian culture has always been famous for the necklaces they carved and adorned for ages. Our ancestors had very complexly designed, heavily weighed, pure, artisan necklaces. These necklaces, made of any metal, gold, silver, copper or platinum, would be huge, covering ninety percent of the neck if they are like the necklaces which princesses used to wear.
</p>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>