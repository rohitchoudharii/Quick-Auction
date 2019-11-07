<!DOCTYPE html>
<html lang="en">
<!-- Header for initialization -->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
<link rel="manifest" href="manifest.json">
    <title>Auctions</title>
	<link rel="icon" href="images/favicon.png" type="image/png">
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
    <main class="main-content">
        <!-- Production Catalog -->
        <div class="container-withspace">
            <div class="categorie-name">TRENDING</div>
            <div class="content-container">
                
                <!-- Product -->
                <?php
                
                $date=date("Y-m-d",time());
                
                $sql = "SELECT pname,price,image,time,type,ID,seller FROM product where buyer ='' and time >'".$date."' order by time desc;";
                $result = mysqli_query($con, $sql);
                
                
                if (mysqli_num_rows($result) > 0) {
                         while($row = mysqli_fetch_assoc($result)) {
                             if($row["type"]==1){
                                echo ' <div class="item bottom-sale-border-books">';
                             }
                             else if($row["type"]==2){
                                echo ' <div class="item bottom-sale-border-fashion">';
                             }
                             else if($row["type"]==3){
                                echo ' <div class="item bottom-sale-border-homeappliances">';
                             }
                             else if($row["type"]==4){
                                echo ' <div class="item bottom-sale-border-homedecor">';
                             }
                             else if($row["type"]==5){
                                echo ' <div class="item bottom-sale-border-mobilesandlaptop">';
                             }
                                echo '<div class="price-bid-container">
                                            <div class="price">₹ '.$row["price"].'</div>
                                            <div class="bid">be the first bidder!</div>
                                        </div>
                                        
                                        <div class="img-div">
                                            <img class="item-img" src="images/'.$row["image"].'" alt="dress">
                                            <div class="bid-button">
                                                <a href="product.php?id='.$row["ID"].'" class="bid-text">Bid Now!</a>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <div class="item-name">'.$row["pname"].'</div>
                                            <span class="seller">Seller:</span>
                                            <span class="seller-name">'.$row["seller"].'<img class="email-img" src="images/email.png" alt="email"></span>
                                            <div class="rest-bid-time">'.$row["time"].'</div>
                                        </div>
                                        </div>';
                        }
                     }
                
                ?>
            </div>
        </div>
    </main>
    <?php include('./rss.php'); ?>
    
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
</body>
</html>