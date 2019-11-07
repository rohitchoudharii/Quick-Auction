<?php include 'connection.php';?>
<?php 
if(isset($_POST["submit"])){
    //if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["phone"])&&isset($_POST["typep"])&&isset($_POST["pincode"])&&isset($_POST["addr"])&&isset($_POST["pname"])&&isset($_POST["message"])&&isset($_FILES['imagefile'])){

        $fileext=explode("." ,    $_FILES['imagefile']["name"]);
        $filenewname=uniqid("image",true).".".strtolower(end($fileext));

        move_uploaded_file($_FILES["imagefile"]["tmp_name"],"images/".$filenewname);
        //echo $filenewname;

        $sql = "insert into product(seller,email,phone,type,pin,address,pname,pdetails,image,price,time) values('".$_POST["name"]."','".$_POST["email"]."',".$_POST["phone"].",".$_POST["typep"].",".$_POST["pincode"].",'".$_POST["addr"]."','".$_POST["pname"]."','".$_POST["message"]."','".$filenewname."',".$_POST["price"].",'".$_POST["datetime"]."');";
        //echo $sql;
        //echo $_FILES["imagefile"]["name"];
        //return;
        $result = mysqli_query($con, $sql);
        header("Location: success.php");
    }
//}
?>