<!DOCTYPE html>
<html lang="en">
<!-- Header for initialization -->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <title>Auctions</title>
	<link rel="icon" href="images/favicon.png" type="image/png">
	
<style>

.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #fbbb12;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
.container-product {

  max-width: screen-width;
  margin: 0;
  padding: 15px;
  display: flex;
}
/* Columns */
.left-column {
  width: relative;
  position: relative;
}

.right-column {
  margin-left:800px;
  width: 35%;
  margin-top: 60px;
  
}


/* Left Column */
.left-column img {
  margin-left:none;
  width: 30em;
  height:100%;
  align: center;
  position: absolute;
  left: 0;
  right:15px;
  top: 0;
  opacity: 0;
  transition: all 0.3s ease;
}

.left-column img.active {
  opacity: 1;
}


/* Right Column */

/* Product Description */
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}

/* Product Configuration */
.product-color span,
.cable-config span {
  font-size: 14px;
  font-weight: 400;
  color: #86939E;
  margin-bottom: 20px;
  display: inline-block;
}

/* Product Color */
.product-color {
  margin-bottom: 30px;
}

.color-choose div {
  display: inline-block;
}

.color-choose input[type="radio"] {
  display: none;
}

.color-choose input[type="radio"] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
}

.color-choose input[type="radio"] + label span {
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
}

.color-choose input[type="radio"]#red + label span {
  background-color: #C91524;
}
.color-choose input[type="radio"]#blue + label span {
  background-color: #314780;
}
.color-choose input[type="radio"]#black + label span {
  background-color: #323232;
}

.color-choose input[type="radio"]:checked + label span {
  background-image: url(images/check-icn.svg);
  background-repeat: no-repeat;
  background-position: center;
}

/* Cable Configuration */
.cable-choose {
  margin-bottom: 20px;
}

.cable-choose button {
  border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}

.cable-choose button:hover,
.cable-choose button:active,
.cable-choose button:focus {
  border: 2px solid #86939E;
  outline: none;
}

.cable-config {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}

.cable-config a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
.cable-config a:before {
  content: "?";
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
}

/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}

.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}

.cart-btn {
  display: inline-block;
  background-color: #fbbb12;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #000000;
}

/* Responsive */
@media (max-width: 940px) {
  .container {
    flex-direction: column;
    margin-top: 60px;
  }

  .left-column,
  .right-column {
    width: 100%;
  }

  .left-column img {
    width: 300px;
    right: 0;
    top: -65px;
    left: initial;
  }
}

@media (max-width: 535px) {
  .left-column img {
    width: 220px;
    top: -85px;
  }
}

</style>
</head>

<body>
<?php include 'connection.php';?>
    <!-- header Section -->
    <?php include('./header.php'); ?>
    <!-- Navigation Bar Section -->
    <nav class="navigation-bar">
        <ul class="categories">
            <li class="categorie">
				<a href="index.php">
                <div class="top-categorie-line"></div>
                <div class="categorie-info">
                <img src="images/trending.png" alt="trending" class="img-pasiive"> TRENDING
                </div>
				</a>
            </li>
            <li class="categorie">
                <a href="mobileslaptop.php">
				<div class="top-categorie-line"></div>
                <div class="categorie-info">
                    <img src="images/electricity.png" alt="electricity" class="img-pasiive">
                    <img src="images/electricity_w.png" alt="electricity" class="img-active"> MOBILES & LAPTOPS 
                </div>
				</a>
            </li>
            <li class="categorie">
				<a href="fashion.php">
                <div class="top-categorie-line"></div>
                <div class="categorie-info">
                    <img src="images/fashion.png" alt="fashion" class="img-pasiive">
                    <img src="images/fashion_w.png" alt="fashion" class="img-active"> FASHION
                </div>
				</a>
            </li>
            <li class="categorie">
				<a href="homedecor.php">
                <div class="top-categorie-line"></div>
                <div class="categorie-info">
                    <img src="images/home.png" alt="home" class="img-pasiive">
                    <img src="images/home_w.png" alt="home" class="img-active"> HOME DECOR
                </div>
				</a>
            </li>
            <li class="categorie">
				<a href="books.php">
                <div class="top-categorie-line"></div>
                <div class="categorie-info">
                    <img src="images/books.png" alt="books" class="img-pasiive">
                    <img src="images/books_w.png" alt="books" class="img-active"> BOOKS
                </div>
				</a>
            </li>
            <li class="categorie">
				<a href="homeappliances.php">
                <div class="top-categorie-line"></div>
                <div class="categorie-info">
                    <img src="images/misc.png" alt="children" class="img-pasiive">
                    <img src="images/misc_w.png" alt="children" class="img-active">HOME APPLIANCES
                </div>
				</a>
            </li>
        </ul>
    </nav>
    <!-- Main Product Section -->
    <main class="container-product">

		
<?php 
if(isset($_GET["id"])){

  $sql = "SELECT pname,price,image,time FROM product where ID=".$_GET["id"];
  $result = mysqli_query($con, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      //Left Column / Headphones Image
      echo '<div style="display:none" id="send">false</div>
      <div style="display:none" id="username">'.$username.'</div>';
      echo '<div style="display:none" id="product_id">'.$_GET["id"].'</div> ';
      echo '<div class="left-column"><img data-image="red" class="active" src="images/'.$row["image"].'" height="500" alt=""></div>';
      echo ' <div class="right-column">
      <div>  
            <h1>'.$row["pname"].'</h1><br>
       <big>     <p>Actual Price: ₹'.$row["price"].'</p><br>
        <p>Starting Bid: ₹100</p><br>
          </div>';
          $timeval=$row["time"];
      }
  }
                    
}


?>
      
      


      <!-- Right Column -->
     
		<!-- Display the countdown timer in an element -->
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo date("M d,Y",strtotime($timeval) );?> 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = "Time Left: " + days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<br>
<h1></h1>

<div class="slidecontainer">
  <input type="range" min="100" max=<?php 
  
  $sql5 = "SELECT price FROM product where ID=".$_GET["id"];
  $result5 = mysqli_query($con, $sql5);
  if (mysqli_num_rows($result5) > 0) {
    while($row5 = mysqli_fetch_assoc($result5)) {
      //Left Column / Headphones Image
      echo '"'.$row5["price"].'"';
     
      }
  }
  
  
  ?> value="100" class="slider" id="myRange"><br>
  
  <p>Your Bid: <span id="demo1"></span></p><br>
</div>


<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo1");
output.innerHTML = slider.value;

function bid(){
  var send=document.getElementById("send").innerHTML;

  if (send==="false"){
  var username=document.getElementById("username").innerHTML;
  var prod_id=document.getElementById("product_id").innerHTML;
  var bid_price=document.getElementById("myRange").value;
  var request = new XMLHttpRequest();
  if(username!=""){
    request.open("POST", "bid.php");

    var formdata= new FormData();
    formdata.append("username",username);
    formdata.append("bid_price",bid_price);
    formdata.append("product_id",prod_id);
  
    request.send(formdata);
    alert("Bid Successfull");
    document.getElementById("send").innerHTML="true";
  }else{
    alert("Please Login");
  }
  
}
}

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
		
        <!-- Product Pricing -->
        <div class="product-price">
          <button onclick="bid()" class="cart-btn">BID</button>
          <!-- <a href="#" class="cart-btn" onclick="<script>alert('Bid Successfull!');</script>"><span id="demo1"></span>BID</a> -->
        </div>
      </div>
    </main><br><br>
<footer>
    <!-- Footer Section -->
  <div class="copyright">
    <p>&copy 2019 - Quick Auction</p>
  </div>
  
  <div class="social">
  	<a href="aboutus.php" class="about">AboutUs</a>
    <a href="howitworks.php" class="work">HowItWorks</a>
	<a href="faq.php" class="faq">FAQs</a>
	<a href="testimonials.php" class="testimonials">Testimonials</a>
	<a href="contactus.php" class="contact">ContactUs</a>
  </div>
  <!-- Social media Links -->
  <div class="container">
 <div class="socialmedia">
 <a href="https://www.instagram.com/">
 <img src="images/instagram.png" height="40" width="40" align="center"</img></a>
  <a href="https://www.linkedin.com/">
 <img src="images/linkedin.png" height="40" width="40" align="center"</img></a>
  <a href="https://www.twitter.com/">
 <img src="images/twitter.png" height="40" width="40" align="center"</img></a>
  <a href="https://www.facebook.com/">
 <img src="images/facebook.png" height="40" width="40" align="center"</img></a>
 </div>
  </div>
</footer>


<?php include 'selectwinner.php';?>
</body>
</html>