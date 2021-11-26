<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>123200058</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <center style="font-size:large">
           <?php
            require 'header.php';
                if(isset($_SESSION['email'])){
                $username = $_SESSION['username'];?>
                <h1>Welcome</h1> <br><h1><?php echo $_SESSION['username'];
            }?></h1></center>
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