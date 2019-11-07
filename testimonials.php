<!DOCTYPE html>
<html lang="en">
<!-- Header for initialization -->
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/style.css">
    <title>Auctions</title>
	<link rel="icon" href="images/favicon.png" type="image/png">
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

*{
  box-sizing:border-box;
}
html, body{
  height:100%;
  font: normal 1em/1.5 "Open Sans";
  background-color:#ffffff;
  background-size:cover;
}


h1{
  text-align:center;
  text-shadow:0 1px white;
  color:#02303F;
}
h2{
  color:#736861; 
  margin:15px 0 5px;
  text-shadow:0 1px rgba(255,255,255,0.5);
}
h6{
  color:#928566; 
  margin:0;
}

input[type="radio"] {
position: absolute;
width: 1px; /* Setting this to 0 make it invisible for VoiceOver */
height: 1px; /* Setting this to 0 make it invisible for VoiceOver */
padding: 0;
margin: -1px;
border: 0;
clip: rect(0 0 0 0);
overflow: hidden;
}
label{
  display:block;
  width:32%;
  border: 4px solid white;
  position:absolute;
  bottom:5px;
  cursor: pointer;
  transition: border-color 0.3s linear;
}
.img1{
  float:left;
  margin-right: 20px;
}
.slide{
  position:absolute;
  left:-100%;
  opacity:0;
  transition: all 0.6s ease-in;
}
.container1{
  width:1000px;
  height:400px;
  margin:0 auto;
  position:relative;
}

label.second{
  left:34%;
}
label.third{
  left:68%;
}
blockquote{
  margin:0;
  padding:30px;
  width:100%;
  height:120px;
  background-color: #DB532B;
  color:white;
  box-shadow: 0 5px 2px rgba(0,0,0,0.1);
  position:relative;
  transition: background-color 0.6s linear;
}

blockquote:after { 
  content: " "; 
  height: 0; 
  width: 0; 
  position: absolute; 
  top: 100%; 
  border: solid transparent; 
  border-top-color: #DA532B;
  border-left-color:#DA532B;
  border-width: 10px; 
  left: 10%; 
} 

#second:checked ~ .two blockquote {
  background-color:purple;
}
.two blockquote:after{
  border: solid transparent; 
  border-top-color: purple;
  border-left-color:purple;
  border-width: 10px;
}
#third:checked ~ .three blockquote{
  background-color:#54885F;
}
.three blockquote:after{
  border: solid transparent; 
  border-top-color: #54885F;
  border-left-color: #54885F;
  border-width: 10px;
}
.quotes{
  position:absolute;
  color:rgba(255,255,255,0.5);
  font-size:5em;
}
.leftq{
  top:-25px;
  left:5px;
}
.rightq{
  bottom:-10px;
  right:5px;
}
#first:checked ~ label.first {
  border-width:6px;
  border-color:#DB532B;
}
#second:checked ~ label.second {
  border-width:6px; border-color:purple;
}
#third:checked ~ label.third {
  border:6px solid #54885F;
}

#first:checked ~ div.one {
  left:0;
  opacity:1;
}
#second:checked ~ div.two {
  left:0;
  opacity:1;
}
#third:checked ~ div.three {
  left:0;
  opacity:1;
}

</style>
</head>

<body>
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
    <script>
			 var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  myFunction(this);
			}
		  };
		  xhttp.open("GET", "feedback.xml", true);
		  xhttp.send();
		
		function myFunction(xml) {
		  var i;
		  var xmlDoc = xml.responseXML;
		  var x = xmlDoc.getElementsByTagName("PERSON");
		  document.getElementById("person1desc").innerHTML = x[0].getElementsByTagName("desc")[0].childNodes[0].nodeValue;
		  document.getElementById("person1name").innerHTML = x[0].getElementsByTagName("name")[0].childNodes[0].nodeValue;
		  document.getElementById("person1place").innerHTML = x[0].getElementsByTagName("place")[0].childNodes[0].nodeValue;
		  document.getElementById("person1image").src = x[0].getElementsByTagName("imageurl")[0].childNodes[0].nodeValue;
			
			document.getElementById("person2desc").innerHTML = x[1].getElementsByTagName("desc")[0].childNodes[0].nodeValue;
		  document.getElementById("person2name").innerHTML = x[1].getElementsByTagName("name")[0].childNodes[0].nodeValue;
		  document.getElementById("person2place").innerHTML = x[1].getElementsByTagName("place")[0].childNodes[0].nodeValue;
		  document.getElementById("person2image").src = x[1].getElementsByTagName("imageurl")[0].childNodes[0].nodeValue;
		  
		  document.getElementById("person3desc").innerHTML = x[2].getElementsByTagName("desc")[0].childNodes[0].nodeValue;
		  document.getElementById("person3name").innerHTML = x[2].getElementsByTagName("name")[0].childNodes[0].nodeValue;
		  document.getElementById("person3place").innerHTML = x[2].getElementsByTagName("place")[0].childNodes[0].nodeValue;
		  document.getElementById("person3image").src = x[2].getElementsByTagName("imageurl")[0].childNodes[0].nodeValue;
		
		
		
		}

	
	
	</script>
    <!-- Testimonial Section -->
<main class="main-content">
    <br><h1>Testimonials</h1><br>
<div class="container1">
  <input type="radio" name="nav" id="first" checked/>
  <input type="radio" name="nav" id="second" />
  <input type="radio" name="nav" id="third" />
  
  <label for="first" class="first"></label>
<label for="second"  class="second"></label>
<label for="third" class="third"></label>
 
<div class="one slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span> <span id="person1desc"></span><span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img class="img1" width="230" height="180" id="person1image"/>
    <h2><span id="person1name"></span></h2>
    <h6><span id="person1place"></span></h6>
  </div>
  
  <div class="two slide">
    <blockquote>
      <span class="leftq quotes">&ldquo;</span><span id="person2desc"></span><span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img  class="img1" width="230" height="180" id="person2image" />
    <h2><span id="person2name"></span></h2>
    <h6><span id="person2place"></span></h6>
  </div>
  
  <div class="three slide">
    <blockquote>
      <span class="quotes leftq"> &ldquo;</span> <span id="person3desc"></span> <span class="rightq quotes">&bdquo; </span>
    </blockquote>
    <img class="img1" width="230" height="180" id="person3image"/>
    <h2><span id="person3name"></span></h2>
    <h6><span id="person3place"></span></h6>
  </div>
</main><br>
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
