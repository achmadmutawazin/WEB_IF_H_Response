<?php
    require 'connection.php';
    session_start();
    $username=($_POST['username']);
    $password=($_POST['password']);
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }
    $user_authentication_query="select * from staff where username='$username' and password='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
        ?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
    }else{
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['username']=$username;
        $_SESSION['email']=$row['email'];
        header('location: index.php');
    }
    
 ?>