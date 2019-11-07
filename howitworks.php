<!DOCTYPE html>
<html lang="en">
<!-- Header for initialization -->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <title>Auctions</title>
    <link rel="icon" href="images/favicon.png" type="image/png">

	</head>

<body>
    <!-- Header Logo -->

<?php include 'connection.php';?>
    <!-- header Section -->
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
    <!-- How it works COntainer -->
<div class="container">
	<h1 class="howitworks-head">How It Works</h1>    
	<ol class="content-howitworks">
      <li>Here the registration is free of cost, you don’t have to pay anything to register with us. Simply you click the Signup button which is present in the top of the right side.</li>
      <li>Select the product you wish to Place the bids. Then click on BID NOW button. It will redirect to a page where you can place the bids.</li>
      <li>On the next page you have to enter the bid amount which you wants to place.</li>
	  <li>On the next page you will see the total amount which will debited from your account then Click the CONFIRM button to place the bids.</li>
	  <li>On the next page you will see the bids status of each bid you had placed at last
			<br>
			Note: Your bid must be lowest unique bid to display it on the product page, if your username is there till the auction timer end then you will be automatically declared as a winner for that item</li>
	  <li>Then click on Go To Auction button and then check your name whether it’s there on the below of the product or not, else place the bids in range & find the lowest unique bid.</li>
	  <li>Refresh the home page to see the updated lowest unique bidder for each auctions.</li>
    </ol>
</div>
<!-- Image -->
<div class="container">
	<img src="images/howitworks.png" class="img-howitworks">
</div>
<!-- Footer Section -->
<footer>
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




