﻿<!DOCTYPE HTML>
<html>
<head>
<style>

/*--login start here--*/
 body{
   font-size: 100%;
   background-image: url("images/loginbackground.jpg"); 
   font-family: 'Roboto', sans-serif;
}
a {
  text-decoration: none;
}
a:hover {
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}
/*--elemt style strat here--*/
.elelment h2 {
    font-size: 2.5em;
    color: #fff;
    text-align: center;
    margin-top:2em;
    font-weight: 700;
}
.element-main {
    width:27%;
    background: #fff;
    margin:4em auto 0em;
    border-radius: 5px;
    padding:3em 2em;
}
.element-main h1 {
    text-align: center;
    font-size: 2.3em;
    color:#b93939;
    font-weight: 700;
}
.element-main p {
    font-size: 1em;
    color: #696969;
    line-height: 1.5em;
    margin: 1.5em 0em;
    text-align:center;
}
.element-main input[type="text"] {
    font-size: 1em;
    color: #A29E9E;
    padding: 1em 0.5em;
    display: block;
    width: 95%;
    outline: none;
    margin-bottom: 1em;
    text-align:center;
    border: 1px solid #B9B9B9;
}

.element-main input[type="password"] {
    font-size: 1em;
    color: #A29E9E;
    padding: 1em 0.5em;
    display: block;
    width: 95%;
    outline: none;
    margin-bottom: 1em;
    text-align:center;
    border: 1px solid #B9B9B9;
}
.element-main input[type="submit"] {
    font-size: 1em;
    color: #fff;
    background:#b93939;
    width: 50%;
    padding: 0.8em 0em;
    outline: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: block;
    margin: 1.5em auto 0;
}
.element-main input[type="submit"]:hover{
    background:#1D1C1C;
    border-bottom: 3px solid #2F2F2F;  
    transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}
/*---copyrights--*/
.copy-right {
    margin: 9em 0em 2em 0em;
}
.copy-right p {
    text-align: center;
    font-size:1em;
    color:#fff;
    line-height: 1.5em;

}
.copy-right p a{
  color:#fff;
}
.copy-right p a:hover{
	 color:#000;
	 transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}
/*--element end here--*/
/*--media quiries start here--*/
@media(max-width:1440px){
	
}
@media(max-width:1366px){
	
}
@media(max-width:1280px){
.elelment h2 {
    margin-top: 1em;	
}
.copy-right {
    margin: 6em 0em 2em 0em;
}
.element-main {
    width: 30%;
}
}
@media(max-width:1024px){
.element-main {
    width: 37%;	
}
}
@media(max-width:768px){
.element-main {
    width: 49%;
}	
.elelment h2 {
    font-size: 2em;
}
.element-main {
    width: 60%;
}
.element-main h1 {
    font-size: 2em;
}
}
@media(max-width:640px){
	
}
@media(max-width:480px){
.element-main {
    width: 80%;
    padding: 3em 1.5em;
}	
.copy-right {
    margin: 5em 0em 2em 0em;
}
.copy-right p {
    font-size: 0.9em;
}
}
@media(max-width:320px){
.elelment h2 {
    font-size: 1.5em;
}
.element-main h1 {
    font-size: 1.5em;
}
.element-main {
    width: 80%;
    margin: 2em auto 0em;
    padding: 1.5em 1.5em;
}
.element-main p {
    font-size: 0.9em;	
}
.element-main input[type="submit"] {
    font-size:0.9em;
    width: 75%;
}
.element-main input[type="text"] {
    font-size: 0.9em;
    padding: 0.8em 0.5em;
}
.copy-right {
    margin: 3em 0em 2em 0em;
}
.copy-right p {
    font-size: 0.85em;
	padding:0 4px;
}
}
/*--media quiries end here--*/
</style>
<title>Reset Password Form</title>
</head>
<body>
<?php include 'connection.php';?>
<?php 

if(isset($_POST['submiit'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];

    $sql="update user set password='$pass' where username='$username'";
    $result = mysqli_query($con, $sql);
    echo "<script type='text/javascript'>alert('Password Reset');</script>";
    
    header("Location: login.php");

}
?>
<!--element start here-->
<div class="elelment">
	<h2>Forgot Password</h2>
	<div class="element-main">
		<h1>Reset Password</h1>
		<p> Enter your email and new password</p>
		<form method="POST" action="forgot.php">
			<input type="text" name = "username" value="Your e-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your e-mail address';}">
			<input type="password" name= "pass" value="Your new password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your new password';}">
			<input type="submit" name = "submiit" value="Reset my Password">
		</form>
	</div>
</div>

<!--element end here-->
</body>
</html>