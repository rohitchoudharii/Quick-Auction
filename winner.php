<!DOCTYPE html>
<html lang="en">
<!-- Header for initialization -->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <title>Auctions</title>
	<link rel="icon" href="images/favicon.png" type="image/png">
	
<style>


#loading {
		-webkit-animation: rotation 3s linear;
}

@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}





</style>
</head>

<body>
<?php include 'connection.php';?>
<?php include('./header.php'); ?>
    <!-- Navigation bar -->
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
    <!-- Main Container -->
<main class="main-content">
   <div>
     <!-- Congras Text -->
		<br><h1 align="center"><b>Congratulations !!!</b></h1><br>
</div>
<!--
<audio controls autoplay>
  <source src="congratulations.mp3" type="audio/mpeg">
  </audio>
		<div>
<p><audio autoplay loop>
  <source src="audio/ogg/congratulations.ogg" type="audio/ogg">
  <source src="audio/mpeg/congratulations.mp3" type="audio/mpeg">
  </audio></p>
  </div>
  <div>
<audio src="audio/mpeg/congratulations.mp3" autoplay=true>
<p>If you are reading this, it is because your browser does not support the audio element.</p>
<embed src="audio/mpeg/congratulations.mp3" width="180" height="90" hidden="false" />
</audio>
</div
<div>
<audio controls autoplay loop>
  <source src="audio/mpeg/congratulations.mp3" type="audio/mpeg">
  <embed src="audio/mpeg/congratulations.mp3" autostart="true" loop="true" > 
</audio>
</div>-->
<!-- Trophy image -->
	
  <?php 

  $id=$_GET["prod_id"];
  $price=$_GET["price"];
  $sql = "select id,seller,phone,address,pname,pdetails,image,buyer from product where id='$id'";
  $result = mysqli_query($con, $sql);
  //$username=$_COOKIE["username"];
  while($row = mysqli_fetch_assoc($result)){
    if($username===$row["buyer"]){
    $image=$row["image"];
    $pname=$row["pname"];
    $seller=$row["seller"];
    $phone=$row["phone"];
    $addr=$row["address"];
    echo '
    <div>
          <img src="images/trophy.png" id="loading" align="middle" class="img-winner" alt="win" >
      </div>
      <!-- Center Text -->
    <h1 align="center"><b>You have won the auction for</b></h1>
    <h1 align="center" style="color:red"><b>'.$pname.'</b></h1><br>
                        <div class="img-div1">
                          <img class="item-img-win" src="images/'.$image.'" alt="dress">
                      </div><br>
        <h1Contact Seller</h1>
  <!-- Table Content -->
  <table>
    <tr>
      <th>Seller Name</th>
      <th>Contact Number</th>
      <th>City</th>
    <th>Bid Placed</th>
    </tr>
    <tr>
      <td>'.$seller.'</td>
      <td>+91'.$phone.'</td>
      <td>'.$addr.'</td>
    <td>'.$price.'</td>
    </tr>
    </table><br><br>
  ';
    }
    else{
      echo '<h2>Error 404, Not authorized to access</h2>';
    }
  }
  
  
  ?>


</main>
<footer>
  <div class="copyright">
    <p>&copy 2019 - Quick Auction</p>
  </div>
  <!-- Footer Section -->
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
</body>

</html>
