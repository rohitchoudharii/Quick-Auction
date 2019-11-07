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
    <!-- Header Logo -->
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
   

  <?php 
  if(isset($_COOKIE["username"])&&$_COOKIE["username"]!=""){
    $username=$_COOKIE["username"];

    echo '<h1> Pending and loosed bid</h1>
<table>
<tr>
  <th>Product Name</th>
  <th>Bid Price</th>
  <th>Status</th>
  <th>Delete</th>

</tr>';
  $sql = "select  product.ID,pname,seller,phone,bid_table.BID_price,bid_table.winner,bid_table.id bidid from product,bid_table where product.ID=bid_table.prod_id and bid_table.username='".$username."'";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row["winner"]==0){
        $status="Pending";
        $bidId=$row["bidid"];
        $delete='<a href="./deletebid.php?id='.$bidId.'&username='.$username.'">Delete Bid</a>';
      }else if($row["winner"]==1){
          $id=$row["ID"];
          $price=$row["BID_price"];
        $status = '<a href="./winner.php?prod_id='.$id.'&price='.$price.'">You win :)</a>';
        $delete="Cannot delete";
      }else if($row["winner"]==2){
        $status="You Lose :(";
        $delete="Cannot delete";
      }
        echo "<tr>
                <td>".$row["pname"]."</td>
                <td>".$row["BID_price"]."</td>
                <td>".$status."</td>
                <td>".$delete."</td>
              </tr>";
   }
}
  }else{
    echo '<header class="m-header"><center><h1>Please Login to see your status</h1></center><br></header>';
    echo '<br><br><br>';
    echo '<a href="login.php" class="sell-login-button">Login/Signup</a>';
    echo '<br><br><br>';
  }

  
  ?>

	</table><br><br>

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
