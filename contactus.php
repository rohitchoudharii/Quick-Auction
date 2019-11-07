<!DOCTYPE html>
<html lang="en">
<!-- Header for initialization -->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/contactus.css">
    <title>Auctions</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <script src="./js/jquery-3.4.1.min"></script>
	<style>

    #mapcss{
    	width:525px; 
    	height:350px;
    }
   
  @media only screen and (max-width: 400px) {
  #mapcss{
    width:300px !important;
    height:300px;
  }
}
}

#maindiv{
  border: 2px solid black;
  overflow: hidden;
  white-space: nowrap;
}

#div1 {
  display: 100%;
  animation: marquee 25s linear infinite;
}

#div2 {
  display: inline-block;
  animation: marquee2 10s linear infinite;
  animation-delay: 5s;
}

@keyframes marquee {
  from {
    transform: translateX(100%);
  }
  to {
    transform: translateX(-100%);
  }
}

@keyframes marquee2 {
  from {
    transform: translateX(0%);
  }
  to {
    transform: translateX(-200%);
  }
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
	<!-- Main Container -->
<div class="container-contact100">
	<!-- Send msg -->
	<?php include 'connection.php';?>
	<?php 
	if(isset($_POST['submiit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$query = "insert into contactus(fname,lname,email,phone,msg) values('".$fname."','".$lname."','".$email."',".$phone.",'".$message."');";
		//echo $query;
		$result = mysqli_query($con, $query);
		if($result){
			echo "<script type='text/javascript'>alert('Your request is been registered');</script>";
		}else{
			echo "<script type='text/javascript'>alert('Error uploading');</script>";
		}
	}
	
	?>
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="contactus.php" method="POST">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="fname" placeholder="First name">
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input id="last-name" class="input100" type="text" name="lname" placeholder="Last name"/>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="email" name="email" placeholder="Eg. example@email.com"/>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="number" name="phone" placeholder="Eg. +1 800 000000"/>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
				</div>

				<div class="container-contact100-form-btn">
					<input type="submit" name="submiit" class="contact100-form-btn" >
				</div>
			</form>
			<!-- Company Info -->
			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							St. Francis Institute Of Technology, Borivali (West), Mumbai, India
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Call Us
						</span>

						<span class="txt3">
							+91 9876543210
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							contact@quickauction.com
						</span>
					</div>
				</div>
				<!-- GeoLocation -->
				<div class="mapouter responsive"><div class="gmap_canvas"><iframe id="mapcss"width="525" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=st.%20francis%20insti&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:600px;}</style></div>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>  
	<script>
$('#maindiv').width($('#div1').width());
</script>
<div class= "w3-container w3-theme-l2" >
  <h1 align="center">OUR TEAM</h1>
  <div id="maindiv">
  <div id="div1">
	<img src="images/team.jpg" height=350 width=1400 style="padding-right:100px">
  </div>
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
<script type="text/javascript">
	function send(){
		var fname=document.getElementById("first-name").value;
		var lname=document.getElementById("last-name").value;
		var email=document.getElementById("email").value;
		var phone=document.getElementById("phone").value;
		var message=document.getElementById("message").value;

		if(fname==""){
			alert("Fill First name");
			return;
		}
		if(lname==""){
			alert("Fill last name");
			return;
		}
		if(message==""){
			alert("Fill message box");
			return;
		}
		if(phone<9999999999 &&phone>999999999 ){
		alert("Your Request is been Forwarded");
		}
		if(message==""){
			alert("Your Request is been Forwarded");
		}
	}

</script>
</body>

</html>




