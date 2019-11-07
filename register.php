<!DOCTYPE html>
<html>
  <!-- Header for initialization -->
<head>
<title>Auctions</title>
<link rel="icon" href="images/favicon.png" type="image/png">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f2f2f2;
}

html {
  background-image: url("images/loginbackground.jpg");
  background-color: #ededed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #f2f2f2;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding:0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #acb700;
  border: none;
  color: #f2f2f2;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #aec800;
}



input[type=text] , input[type=password]{
  background-color: #f2f2f2;
  border: none;
  color: #0d0d0d;
  padding: 20px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px;
  width: 85%;
  border: 2px solid #f6f6f6;
  border-radius: 5px 5px 5px 5px;
}

input[type=text], input[type=password] {
  background-color: #fff;
  border-bottom: 2px solid #b93939;
}

input[type=text],input[type=password]:placeholder {
  color: #cccccc;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #b93939;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;  
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width:100%;
  background-color: #b93939
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
  <!-- Mainbox -->
<div class="wrapper">
  <!-- Main Form -->
<div id="formContent">
	<form style="border:1px solid #ccc" action="adduser.php" method="POST">
	<button class="signupbtn"><h1>Welcome To Quick Auction</h1></button>
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpassword" required><br>
    

    <div class="clearfix">
      <button type="button" class="signupbtn" onclick="redirect()">Go Back</button>
      <button type="submit" class="signupbtn" >Sign Up</button>
    </div>
	</div>
  </div>
</form>


<!-- Script -->
<script type="text/javascript">

function redirect()
{
  if(confirm("This will redirect you to home page. Are you sure you want to continue ?"))
  {
  window.location = "index.php";  
  }
  
}
</script>
</body>
</html>
