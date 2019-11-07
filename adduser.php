<?php include 'connection.php';?>
<?php 

    if(isset($_POST["email"])&&isset($_POST["password"])&&isset($_POST["cpassword"])){

        if($_POST["password"]==$_POST["cpassword"]){
            $sql="insert into user(username,password) values('".$_POST["email"]."','".$_POST["password"]."');";
            //echo $sql;
            $result = mysqli_query($con, $sql);

            header("Location: login.php");

        }else{
            echo "<script> alert('password doesnt match');</sript>";
        }

    }





?>