<html>
  <!-- Header for initialization -->
<head>
<meta http-equiv="Cache-Control" content="no-store" />
<link rel="icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="styles/style.css">
<style>
@import url("https://fonts.googleapis.com/css?family=Bree+Serif|Roboto");
html {
  box-sizing: border-box;
}

*,
*::after,
*::before {
  box-sizing: inherit;
}

body {
  background: #ffffff;
  color: #263238;
  font-family: 'Roboto', sans-serif;
}

.wrapper {
  padding: 0 24px;
  max-width: 650px;
  margin: 0 auto;
  margin-bottom: 20px;
}

h1 {
  font-family: 'Bree Serif', serif;
}

h2 {
  font-family: 'Bree Serif', serif;
}

h3 {
  font-family: 'Bree Serif', serif;
}

h4 {
  font-family: 'Bree Serif', serif;
}

h5 {
  font-family: 'Bree Serif', serif;
}

.m-header {
  background: #307fc9;
  color: #ECEFF1;
  padding: 24px 0;
  margin: 0 0 48px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.m-header h1 {
  margin: 0;
}
.m-header ul {
  padding: 0;
  list-style: none;
  overflow: hidden;
  margin: 24px -24px 0;
  border-top: 1px solid #E3F2FD;
}
.m-header li {
  float: left;
  width: 50%;
}
.m-header a {
  display: block;
  color: #E3F2FD;
  padding: 8px 24px;
  text-decoration: none;
  border-bottom: 1px solid #E3F2FD;
  transition: all 70ms ease-in-out;
}
.m-header a:hover {
  background: rgba(227, 242, 253, 0.2);
}
@media (min-width: 500px) {
  .m-header {
    padding-bottom: 10px;
	border-top: 5px solid #000000;
    border-bottom: 5px solid #000000;
  }
  .m-header ul {
    border: 0;
    margin: 24px 0 -5px;
  }
  .m-header li {
    width: 25%;
  }
  .m-header a {
    border: 0;
    border-bottom: 5px solid transparent;
    padding: 18px 24px 18px 12px;
  }
  .m-header a.is-active, .m-header a:hover {
    background: none;
    border-bottom-color: #E3F2FD;
  }
}

.grid {
  overflow: hidden;
}
.grid .col {
  margin-bottom: 10px;
}
.grid .col p:last-child {
  margin-bottom: 0;
}
@media (min-width: 500px) {
  .grid {
    margin-left: -24px;
  }
  .grid .col {
    float: left;
    padding-left: 24px;
    margin-bottom: 0;
  }
  .grid .col.col25 {
    width: 25%;
  }
  .grid .col.col50 {
    width: 50%;
  }
  .grid .col.col75 {
    width: 75%;
  }
  
  .grid .col.col100 {
    width: 100%;
  }
}

.m-form__item {
  margin: 0 0 24px;
}
.m-form__item [type="text"],
.m-form__item [type="tel"],
.m-form__item [type="email"],
.m-form__item [type="number"],
.m-form__item select {
  display: block;
  width: 100%;
  border: 1px solid #78909C;
  color: #263238;
  padding: .5em;
  outline: none;
  border-radius: 3px;
  font-size: inherit;
}
.m-form__item [type="text"]:focus,
.m-form__item [type="tel"]:focus,
.m-form__item [type="email"]:focus,
.m-form__item [type="number"]:focus,
.m-form__item select:focus {
  background: #FFF9C4;
  box-shadow: 0 0 10px rgba(38, 50, 56, 0.5);
}
.m-form__item select {
  height: 36px;
}
.m-form__item textarea {
  display: block;
}
.m-form__item [data-numeric-input] {
  -moz-appearance: textfield;
}
.m-form__item [data-numeric-input]::-webkit-inner-spin-button, .m-form__item [data-numeric-input]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
.m-form__label {
  display: inline-block;
  font-size: .8em;
  color: #546E7A;
  margin: 0 0 .2em 0;
}


.m-form .textlabel {
  display: inline-block;
  font-size: 1em;
  margin: 0;
  color: #263238;
  padding-right: 1em;
}
.m-form .textlabel input {
  display: inline;
  width: auto;
}
.m-form .button {
  border: 1px solid #78909C;
  border-radius: 3px;
  background: #78909C;
  color: #ECEFF1;
  padding: 8px 24px;
  transition: background 200ms ease-in-out;
}
.m-form .button:hover {
  background: #5f7682;
}

img{
  max-width:180px;
}
input[type=file]{
padding:10px;
background:#2d2d2d;}

.sell-login-button {
    height: 70px;
    width: 200px;
    border: none;
    color: white;
    font-size: 30px;
	  text-align: center;
    text-decoration: none;
    border-radius: 5px;
    float: center;
    background-color: #acb700;
    margin-top: 10px;
    margin-right: none;
    margin-left:550px
}
</style>
</head>
<body>

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
  <?php 
  if(isset($_COOKIE["username"]) && $_COOKIE["username"]!="")
  {
  echo '
  <header class="m-header">
  <div class="wrapper">
  <h1>
    You\'re just 1 step away from selling your product
  </h1>
</div>
</header>
<!-- Form -->
<div class="wrapper">
<form action="upload.php" method="POST" class="m-form js-form" enctype="multipart/form-data">
  <div>
    <input type="hidden" name="hidden" value="foobar">
  </div>

  <div class="grid">
    <div class="col col50">
      <div class="m-form__item">
        <label for="name" class="m-form__label">Name:</label>
        <input type="text" name="name" id="name" class="field" autocomplete="name">
      </div>
    </div>

    <div class="col col50">
      <div class="m-form__item">
        <label for="email" class="m-form__label">E-Mail:</label>
        <input type="email" name="email" id="email" placeholder="my@example.com" class="field" autocomplete="email">
      </div>
    </div>
  </div>

  <div class="grid">
    <div class="col col50">
      <div class="m-form__item">
        <label for="phone" class="m-form__label">Phone:</label>
        <input type="number" name="phone" id="phone" class="field" autocomplete="tel">
      </div>
    </div>
    <!-- New ADD -->
    <div class="col col50">
      <div class="m-form__item">
        <label for="price" class="m-form__label">Price:</label>
        <input type="number" name="price" id="price" class="field" autocomplete="tel">
      </div>
    </div>

    <div class="col col50">
            <div class="m-form__item">
              <label for="date" class="m-form__label">Last Date:</label><br>
              <input type="date" name="datetime" id="date" class="field" autocomplete="tel">
            </div>
          </div>


    <div class="col col50">
      <div class="m-form__item">
        <label for="options" class="m-form__label">Choose product category</label>
        <select name="typep" id="options" class="field" autocomplete="off">
          <option value="" selected disabled>Please choose</option>
          <option value="5">Mobiles & Laptops</option>
          <option value="2">Fashion</option>
          <option value="4">Home Decor</option>
          <option value="1">Books</option>
          <option value="3">Home Appliances</option>
        </select>
      </div>
    </div>
  </div>
  
  <div class="grid">
    <div class="col col25">
      <div class="m-form__item">
        <label for="zip" class="m-form__label">Pin Code:</label>
        <input type="number" name="pincode" id="zip" class="field" pattern="[0-9]*" inputmode="numeric" data-numeric-input autocomplete="shipping postal-code">
      </div>
    </div>
    
    <div class="col col75">
      <div class="m-form__item">
        <label for="city" class="m-form__label">Address:</label>
        <input type="tel" name="addr" id="city" class="field" autocomplete="shipping locality">
      </div>
    </div>
  </div>

 <div class="grid">
    <div class="col col100">
      <div class="m-form__item">
        <label for="name" class="m-form__label">Product Name:</label>
        <input type="text" name="pname" id="pname" class="field" autocomplete="name">
      </div>
    </div>
</div>

<div class="grid">
    <div class="col col100">
      <div class="m-form__item">
        <label for="name" class="m-form__label">Product Details:</label>
        <textarea id="pdetails" name="message" rows="5" cols="80"></textarea>
      </div>
    </div>
</div>
  
<div class="grid">
    <div class="col col100">
      <div class="m-form__item">
      <label for="name" class="m-form__label">Product Image:</label><br>
          <p><input type="file"  accept="image/*" name="imagefile" id="file"  onchange="loadFile(event)" style="display: none;"></p>
		<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
    <p><img id="output" width="400" /></p>
    
      </div>
    </div>
</div>
 
  <p>
    <button type="submit" class="button" name="submit">Sell Now</button>
  </p>
</form>


<!-- PHP code for form -->


</div>';}
else{
  echo '<header class="m-header"><center><h1>Please Login to sell your product</h1></center><br></header>';
  echo '<br><br><br>';
  echo '<a href="login.php" class="sell-login-button">Login/Signup</a>';
  echo '<br><br><br>';
}
  ?>
  <!-- Slogan -->
  
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

<!-- Upload Script -->
<script type="text/javascript">
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

</body>
</html>