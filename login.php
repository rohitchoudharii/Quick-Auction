<html>
  <!-- Header for initialization -->
<head>
<title>Auctions</title>
	<link rel="icon" href="images/favicon.png" type="image/png">
<style>
* {box-sizing: border-box}

html {
  background-image: url("images/loginbackground.jpg");
  background-color: #ededed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* style the container */
.container {
  margin-left: 12%;
  height: 40%;
  width: 75%;
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
  margin-top:200px;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit]{
	background-color:#4CAf50;
	color:white;
	cursor:ponter;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* text inside the vertical line */
.inner {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}



/* bottom container */
.bottom-container {
  margin-left: 12%;
  width: 75%;
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }

  .container{
    height: 80%;
  }

}
</style>
</head>
<body>

<?php include 'connection.php';?>
<!-- phpcode -->
<?php


//$_SESSION['Login'.$_COOKIE["username"]]=false;

if(isset($_COOKIE["username"]) && $_COOKIE["username"]!=""){
        header("Location: index.php");
}

//echo "Test";
if(isset($_POST["username"]) && isset($_POST["password"])){
    
    //echo "Over here";
    $fieldusername=$_POST["username"];
    $fieldpassword=$_POST["password"];
   // $sql = "SELECT username,password FROM user where username='$fieldusername' and password='$fieldpassword' limit 1";
    $sql = "SELECT username,password FROM user where username='$fieldusername' limit 1";
    $result = mysqli_query($con, $sql);
    //echo mysqli_num_rows($result);
    if(mysqli_num_rows($result) == 1){
        //echo "inside if";
        $row = mysqli_fetch_assoc($result);
        $pass=$row["password"];
        if($fieldpassword==$pass){
             //echo "inside pass check";
             setcookie("username",$fieldusername);
             header("Location: index.php");
         }
         else{
             echo "<script type='text/javascript'>alert('wrong password');</script>";
         }
        // setcookie("username",$fieldusername);
        // header("Location: index.php");
    }else{
      echo "<script type='text/javascript'>alert('wrong password');</script>";
    }
}
?>

  <!-- Main Contaier -->
<div class="container">
  
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      
      <!-- Social Media Login -->
      <div class="col">
        <a href="error404.php" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="error404.php" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="error404.php" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
      </div>
<!-- Middel Line -->
      <div class="col">
          <!-- Unsername passs login -->
          <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" id="uname" required>
        <input type="password" name="password" placeholder="Password" id="pass" required>
	<input type="submit" value="Login" id="login" >
	
      </div>

    </div>
  </form>
</div>
<!-- Bottom Sign in -->
<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="register.php" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="forgot.php" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
<!-- Script -->
<script>
function logintest(){
	var username=document.getElementById("uname").value;
	var pass=document.getElementById("pass").value;
	var loginbtn=document.getElementById("login");
	if(pass=="current"){
		location.href="index.php";
	}
	else{
		alert("Authentication Failure");
	}
}
</script>
</body>
</html>