<?php include 'connection.php';?>

<?php 

if(isset($_GET["id"])&&isset($_GET["username"])&&isset($_COOKIE["username"])){
    $id=$_GET["id"];
    $username=$_COOKIE["username"];
    if($_GET["username"]===$username){

        $sql = "delete from bid_table where id='$id' and username='$username'";
        $result = mysqli_query($con, $sql);
        if(!$result){
            echo "Error 404 cannot delete";    
        }else{
            header("Location: status.php");
        }
    }else{
        echo "Error 404 cannot delete";
    }
}
?>