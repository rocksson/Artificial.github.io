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

<img src="Earring/ea1.jpg" alt="earring" class="responsive" width="600" height="400">

<h2 class="mt-4" style="text-align:center">Trending Collection Earring</h2>

<div class="container mt-5 mb-5">
    <div class="col-md-12 row">
    <?php
      $sql = "select * from earring";
      $result = $db->query($sql);

      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
      ?>
     <div class="col-md-3 text-center">
        <img src="Earring/<?php echo $row['images name'];?>" class="img-fluid">
        <h3><?php echo $row['product name'];?></h3>
        <p class="price">price: ₹ <?php echo $row['price'];?></p>
        <a href="desc earring.php?id=<?php echo $row['id'];?>" class="btn btn-info" role="button">see more</a>
      </div>
      <?php
      }
      ?>
    </div>
  </div> 


<div class="container mb-5">
   <div class="col-md-12 row">
<p>Earring- A piece of personal adornment, encompassing the ears. It is a significant embellishment since ages. India has been always looked upon for its culture and ornaments along the path of history. Jewelries proclaimed a sense of respect and dignity.<br>
	Gold ornaments have always been eye-catching for Indians. Our ancestors generally bought and treasured Gold ornaments and passed them to the next generations. Indians get gold earrings made for their children at a very early age. It holds a strong feeling for the parents to provide their children with earrings and other ornaments as well which can even help them to see to it as an investment. Indian Weddings are incomplete without gold ornaments.<br>Gold Earrings have a huge fame over the country. It’s the most attractive jewelry you can wear in your day to day life. You see around young girls and women with different patterns of earrings. It’s so fascinating how much of variety Waman Hari Pethe Jewelers render in such a delicately small ornament.
</p>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>

