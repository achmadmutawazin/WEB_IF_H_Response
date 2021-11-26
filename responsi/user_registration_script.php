<?php
    require 'connection.php';
    session_start();
    $item_id=($_POST['item_code']);
    $name=($_POST['name']);
    $amount=$_POST['amount'];
    $unit=($_POST['unit']);
    $date=$_POST['date'];
    $category=($_POST['category']);
    $status=($_POST['status']);
    $unit_price=$_POST['unit_price'];
    $duplicate_user_query="select item_id from inventory where item_id='$item_id'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        ?>
        <script>
            window.alert("item id already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into inventory(item_id,item_name,amount,unit,arrival_date,category,item_status,price) values ('$item_id','$name','$amount','$unit','$date','$category','$status','$unit_price')";
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "successfully registered inputted";
        $_SESSION['item_id']=mysqli_insert_id($con); 
        ?>
        <meta http-equiv="refresh" content="3;url=list.php" />
        <?php
    }
    
?>