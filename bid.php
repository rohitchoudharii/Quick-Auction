<?php include 'connection.php';?>
<?php
if(isset($_POST["username"])&&isset($_POST["bid_price"])&&isset($_POST["product_id"])){
echo "Bid session";
$sql = "insert into bid_table(BID_price,username,prod_id) values(".$_POST["bid_price"].",'".$_POST["username"]."',".$_POST["product_id"].");";
$result = mysqli_query($con, $sql);
echo "uploaded";
}

?>





