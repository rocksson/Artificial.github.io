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

<img src="bang/b1.jpg" alt="earring" class="responsive" width="600" height="400">
<h2 class="mt-4" style="text-align:center">Trending Collection BANGLES</h2>

<div class="container mt-5 mb-5">
    <div class="col-md-12 row">
      <?php
      $sql = "select * from bangles";
      $result = $db->query($sql);

      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
      ?>
     <div class="col-md-3 text-center">
        <img src="bang/<?php echo $row['images name'];?>" class="img-fluid">
        <h3><?php echo $row['product name'];?></h3>
        <p class="price">price: ₹ <?php echo $row['price'];?></p>
        <a href="desc bangles.php?id=<?php echo $row['id'];?>" class="btn btn-info" role="button">see more</a>
      </div>
      <?php
      }
      ?>
    </div>
  </div>
<div class="container mb-5">
   <div class="col-md-12 row">
<p>
  Bangles are the typical circular ornament which is mostly seen. They are many in number and are chosen to be worn equally in both the hands. Majorly, they are worn as three to seven in each hand. Bangles are mostly cylindrical and thin in width. The slim rim makes it more feminine. Gold bangles have an intricately beautiful design with gemstones studded in petal like fashion filling the spaces, making it vividly colorful. Bangles with the wider area are preferred as 2-3 in each arm.<br>Goth is kada like bangles which are quite heavily designed. It has a very promising pattern on one extreme which is the chief side to showcase on the wrist. The chief side is excellently chiseled, providing a charismatic look, very finely designed like parrots, peacocks, snakes and cultural patterns with the presence of gemstones.
</p>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>