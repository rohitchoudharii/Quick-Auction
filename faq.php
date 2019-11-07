<!DOCTYPE html>
<html lang="en">
<!-- Header for initialization -->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <title>Auctions</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
	
	<style>
        .accordion {
            background-color: #5aa8c4;
            color: #ffffff;
            cursor: pointer;
            padding: 20px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size:20px;
            transition: 0.4s;
        }

            .active, .accordion:hover {
                background-color: #3788a6;
            }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
		
		.panel p{
            font-size:20px;
			padding: 10px;
        }
    </style>
</head>

<body>
    <!-- Header Logo -->
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
    <!-- FAQ Section -->
<div class="faq-content">
  <h1 class="faq-head">Frequently Asked Questions</h1>

  <!-- Questions and answer -->
  <button class="accordion">What is QuickAuction.com all about?</button>
  <div class="panel">
    <p>
    QuickAuction.com is an unique online auction platform that allows you to BID on branded products and gives you a change to WIN products at few rupees. It’s a kind of fun bargain deals and online shopping.
    </p>
  </div>
  <button class="accordion">Who can participate in online auctions?</button>
  <div class="panel">
    <p>
    Any one above 18+ years of age can sign up and participate in auctions
    </p>
  </div>
  <button class="accordion">Is it legal to offer such online auction service and to participate in them?</button>
  <div class="panel">
    <p>
    Yes, Absolutely. this is a new version of traditional offline auction Going 1- Going 2- SOLD. Online auctions are legal in India and we have to meet with all compliance requirements of RBI, various Banks and Payment Gateway service providers.
    </p>
  </div>
  <button class="accordion">Are all products brand new, original, with original bill and warranty?</button>
  <div class="panel">
    <p>
    Absolutely Yes, All products are 100% brand new, original, unused, seal pack, with GST paid bill and manufacturer warranty. Products will be shipped by our 3rd party vendors and we will monitor the entire delivery process.
    </p>
  </div>
  <button class="accordion">Can I open more than one account on QuickAuction?</button>
  <div class="panel">
    <p>
    No. it is illegal to operate multiple accounts by single user. Our system monitors your IP address and MAC address. If you are found violating this rule, we will terminate your account permanently.
    </p>
  </div>
  <button class="accordion">Is there any winning limit? Can I participate and win unlimited auctions??</button>
  <div class="panel">
    <p>
    There is no limits at bidderboy. you can participate in unlimited auctions and also you can win unlimited products. There is no such limitations like other bidding websites.
    </p>
  </div> 
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
<!-- Script -->
<script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
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
</body>

</html>




