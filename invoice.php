<?php
include('header.php');
include('connect.php');
$id = $_GET['id'];
$sql = "select * from products where id = $id";
$result = $db->query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 300px;
}

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}

.btn {
  background-color: grey;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

</style>


<div class="container mt-5">
  <div class="col-md-12 row">
      <div class="col-md-12 mb-4">
      <h1>Shop Details</h1>
      <h4>Shop name : Panna Ornaments</h4>
      <h4>Mobile no : 8291711402</h4>
      <h4>Address :jai ganesh society </h4>
      </div>
    </div>
    <div class="col-md-12 row">
      <div class="col-md-12">
      <h1>Customer Details</h1>
      <h4>Name : Shivam Soni</h4>
      <h4>Email ID : shivamsoni@gmail.com</h4>
      <h4>Mobile no : 8291711402</h4>
      <h4>Address :jai ganesh society </h4>
      </div>
    </div>

      
      <div class="container mt-5 mb-5">
      <div class="col-md-12 row">
      <div class="col-md-12">
      	<h1>Product Details</h1>

<table id="myTable">
 
  <tr>
    <td>Sr.no</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Item name</td>
    <td>Rs. <?php echo $row['product name'];?></td>
  </tr>
  <tr>
    <td>Item price</td>
    <td><?php echo $row['price'];?></td>
  </tr>
  <tr>
    <td>Purity</td>
    <td>22CT</td>
  </tr>
  <tr>
    <td>Weight</td>
    <td>10.26</td>
  </tr>
  <tr>
    <td>Making charge</td>
    <td>Rs.500</td>
  </tr>
</table>

</div>
</body>
</html>
