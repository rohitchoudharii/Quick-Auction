<script>
function logout(){
    document.cookie="username=";
    window.location = "login.php";  
}
</script>

    <!-- header Section -->
    <header class="upper-main-line">
        <img src="images/logo.png" alt="QuickAuction">
        <?php
        
        try{
            if(isset($_COOKIE["username"]) && $_COOKIE["username"]!="")
        {
            echo '<a class="user-button" href="status.php">'.$_COOKIE["username"].'</a>';
            echo '<a class="login-button" onclick="logout()">Logout</a>';
            $username=$_COOKIE["username"];
        }else{
            $username="";
            echo '<a href="login.php" class="login-button">Login/Signup</a>';
        }

        } catch(exception $e){
            $username="";
            echo '<a href="login.php" class="login-button">Login/Signup</a>';
        }
        
        ?>
		<a href="sell.php" class="sell-button">Sell Product</a>
    </header>