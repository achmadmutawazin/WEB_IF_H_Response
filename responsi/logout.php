<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>123200058</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
