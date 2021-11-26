<?php
    require 'connection.php';
    session_start();
    $item_id=$_GET['id'];
    $delete_query="delete from inventory where item_id ='$item_id'";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    header('location: list.php');
?>