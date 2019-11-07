<?php include 'connection.php';?>
<?php

$date=date("Y-m-d",time());
$sql = "select id from product where time='".$date."' and buyer=''";
//echo "result 1 executed";
$result = mysqli_query($con, $sql);
//get all rows
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $id=$row["id"];
        //echo $id; 
        //echo "result 2 prep";   
        $sql_bid="select id,username from bid_table where prod_id=".$id." and bid_price =(select max(bid_price) from bid_table where prod_id=".$id.");";
        $result2=mysqli_query($con,$sql_bid);
        if(mysqli_num_rows($result2) > 0){
            while($row2 = mysqli_fetch_assoc($result2)){
                //echo "result 3 prep";
                $sql_update_prod="update product set buyer='".$row2["username"]."' where id=".$id;
                $set_bid_table_winner="update bid_table set winner=1 where id=".$row2["id"];
                $set_bid_table_loser="update bid_table set winner=2 where id != ".$row2["id"]." and prod_id=".$id.";";
                
                $result3=mysqli_query($con,$sql_update_prod);
                $result4=mysqli_query($con,$set_bid_table_winner);
                $result5=mysqli_query($con,$set_bid_table_loser);
                break;
            }
        }
   }
}


?>





