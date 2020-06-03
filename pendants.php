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
  height: 400px;
 }
</style>

<img src="images/m13.jpg" alt="RINGS" class="responsive">

<h2 class="mt-4" style="text-align:center">Trending Collection Pendant</h2>

<div class="container mt-5 mb-5">
    <div class="col-md-12 row">
      <?php
      $sql = "select * from pendant";
      $result = $db->query($sql);

      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
      ?>
     <div class="col-md-3 text-center">
        <img src="pendant/<?php echo $row['images name'];?>" class="img-fluid">
        <h3><?php echo $row['product name'];?></h3>
        <p class="price">price: ₹ <?php echo $row['price'];?></p>
        <a href="desc pendant.php?id=<?php echo $row['id'];?>" class="btn btn-info" role="button">see more</a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>


<div class="container mb-5">
 <div class="col-md-12 row">
<p>
  Alphabet designed gold pendants and pendants which are shape of names, are worn by people nowadays. Initials of a person are carved, even studded with diamonds. They are a perfect gift for your loved ones.<br>Pendants of gold, having shapes of a sharp, magnificent anchor, are different and creative. They symbolize strength and support in a way. Sometimes these pendants have a rope like a pattern around the anchor, which makes it more remarkably glitzy.<br>Royal and beautiful, gold pendants are attractively stylised. That ravishingly lovely, small bulk of jewelry, slid into a chain, to occupy the middle space, floating close to the sternum, is called a pendant. This ornament is very delicate, shines like a scintillating star around the neck. The elegantly sleek chain accommodating the pendant highlights the alluring collar bones of the woman who adorns it. Pendants give a very feminine look and the neck appears to be slimmer. Overall, the ornament looks very simple but classy.
</p>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>