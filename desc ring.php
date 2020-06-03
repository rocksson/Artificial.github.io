<?php
include('header.php');
include('connect.php');
$id = $_GET['id'];
$sql = "select * from ring where id = $id";
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
      <div class="col-md-6">
      <div class="img-zoom-container">
      <img id="myimage" src="Ring/<?php echo $row['images name'];?>" width="300" height="240">
      <div id="myresult" class="img-zoom-result"></div>
      <script>
      // Initiate zoom effect:
      
      </script>

      </div>  
      </div>
      <div class="col-md-6">
      <h4>Rs. <?php echo $row['price'];?></h4>
      <h6 class="mb-2" style="line-height: 30px;">OFFER PRICE :Rs. <?php echo $row['price'];?> (30% Making OFF)Use coupon PLATINUM30 at checkout</h6>
      <body>
      <button class="accordion mt-3 mb-3">View Product Description</button>
      <div class="panel">
      <p>Gift your love something that's as rare as you are. The edgy shank holds the solitaire in a four prong setting without grasping it on all sides; the perfect everyday accessory for those who love dressing up.</p>
      </div>
      <button class="accordion mt-3 mb-3">View Price Breakup</button>  
      <div class="panel">
          <p>Metal 13,725+ Diamond 30,167+ Making Charges 5,400+ GST(3%) 1,479</p>
      </div>
      <a href="invoice.php?id=<?php echo $id;?>" class="btn btn-info" role="button">Generate Invoice</a>
      
      </div>
    </div>


     <div style="text-align:center">
      <h2>YOU MAY ALSO LIKE</h2>
      </div>

      <div class="container mt-5">
    <div class="col-md-12 row">
      <div class="col-md-2 text-center">
        <img src="images/d3.jpg" class="img-fluid">
        <h5>PANNA Diamond Ring</h5>
        <p class="price">price: ₹ 32,030</p>
      </div>


       <div class="col-md-2 text-center">
        <img src="images/d4.jpg" class="img-fluid">
        <h5>PANNA Diamond Ring</h5>
        <p class="price">price: ₹ 36,030</p>
      </div>


       <div class="col-md-2 text-center">
        <img src="images/d5.jpg" class="img-fluid">
        <h5>PANNA Diamond Ring</h5>
        <p class="price">price: ₹ 52,030</p>
      </div>



       <div class="col-md-2 text-center">
        <img src="images/d6.jpg" class="img-fluid">
        <h5>PANNA Diamond Ring</h5>
        <p class="price">price: ₹ 55,030</p>
      </div>


       <div class="col-md-2 text-center">
        <img src="images/d10.jpg" class="img-fluid">
        <h5>PANNA Diamond Ring</h5>
        <p class="price">price: ₹ 60,030</p>
      </div>


       <div class="col-md-2 text-center">
        <img src="images/d8.jpg" class="img-fluid">
        <h5>PANNA Diamond Ring</h5>
        <p class="price">price: ₹ 56,000</p>
      </div>


      <div class="container mt-5">
      <div class="col-md-12 row">
      <div class="col-md-6">
        <h1>Product Details</h1>

<table id="myTable">
 
  <tr>
    <td>Style No</td>
    <td>CP00198</td>
  </tr>
  <tr>
    <td>Height</td>
    <td>21.50 mm</td>
  </tr>
  <tr>
    <td>Width</td>
    <td>20.50 mm</td>
  </tr>
  <tr>
    <td>Total Weight</td>
    <td>4.54 Gms</td>
  </tr>
</table>
<h1>METAL DETAILS</h1>

<table id="myTable">
 
  <tr>
    <td>Metal</td>
    <td>Platinum
</td>
  </tr>
  <tr>
    <td>Purity</td>
    <td>950</td>
  </tr>
  <tr>
    <td>Metal Weight (Approx)</td>
    <td>4.50 Gms</td>
  </tr>
</table>
</div>
<div class="col-md-6">
  <h1>DIAMOND DETAILS</h1>

  <table id="myTable1">
   
    <tr>
      <td>Total No. of Diamonds</td>
      <td>1</td>
    </tr>
    <tr>
      <td>Total Weight</td>
      <td>0.2 Ct</td>
    </tr>
    <tr>
      <td>Clarity</td>
      <td>SI</td>
    </tr>
    <tr>
      <td>Color</td>
      <td>GH</td>
    </tr>
    <tr>
    <td>No. of Diamonds</td>
      <td>1</td>
    </tr>
    
     <tr>
    <td>Shape</td>
      <td>Round</td>
    </tr>
    
     <tr>
    <td>Diamond Weight (Approx)</td>
      <td>0.20 ct</td>
    </tr>
    
     <tr>
    <td>Setting Type</td>
      <td>Prong</td>
    </tr>
     
  </table>
</div>
</body>
</html>
<script>
  imageZoom("myimage", "myresult");
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>