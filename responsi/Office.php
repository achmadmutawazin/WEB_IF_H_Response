<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }
    $user_products_query="SELECT * FROM `inventory` WHERE category = 'Office stationery' ORDER BY `inventory`.`price` ASC";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $total=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>123200058</title>
</head>
<body>
<div>
            <?php 
               require 'header.php';
            ?>
            <br>
            <div class="container"> 
            <center>
                <table class="table">
                    <tbody>
                        <tr style="background-color:#210466;color:white;font-size:smaller">
                        <th>No</th><th>Code</th><th>Name of goods</th><th>Amount</th><th>Unit</th><th>Coming Date</th><th>Category</th><th>Status</th><th>Unit Price</th><th>Total Price</th><th>Action</th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                        $sum=$row['amount']*$row['price'];
                        $total=$total+$sum;
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['item_id']?></th><th><?php echo $row['item_name']?></th><th><?php echo $row['amount']?></th><th><?php echo $row['unit']?></th>
                            <th><?php echo $row['arrival_date']?></th><th><?php echo $row['category']?></th><th><?php echo $row['item_status']?></th><th><?php echo $row['price']?></th><th><?php echo $sum?></th><th><a href='cart_remove.php?id=<?php echo $row['id'] ?>' class="button" >Edit</a><a href='cart_remove.php?id=<?php echo $row['item_id'] ?>' class="button" >Delete</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                    </tbody>
                </table>
            Total Inventory = Rp. <?php echo $total;?>
            </center>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer"  style="background-color: #210466;"> 
               <div class="container" style="background-color: #210466;">
               <center>
                   <p>Inventory Web 2021</p>
               </center>
               </div>
           </footer>
        </div>
</body>
</html> 