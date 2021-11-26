<?php
    require 'connection.php';
    session_start();
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
            <br><br><br>
            <center>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p>Login to continue.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           </div></center>
           <br><br><br><br><br>
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
