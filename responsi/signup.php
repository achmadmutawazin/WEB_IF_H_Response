<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['username'])){
        header('location: login.php');
    }
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
                                    <center><h1 >Add inventory data</h1></center>
            <br><br>
            <center>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                Item code&#9;
                                <input type="text" class="form-control" name="item_code" placeholder="item code" required="true">
                            </div>
                            <div class="form-group">
                                 Name of Goods&#9;
                                <input type="text" class="form-control" name="name" placeholder="Name of goods" required="true">
                            </div> 
                            <div class="form-group">
                                Amount&#9;
                                <input type="number" class="form-control" name="amount" placeholder="Amount" required="true">
                            </div>
                            <div class="form-group">
                                Unit&#9;
                                <input type="text" class="form-control" name="unit" placeholder="Unit" required="true">
                            </div>
                            <div class="form-group">
                                Coming date&#9;
                                <input type="date" class="form-control" name="date" placeholder="date" required="true">
                            </div>
                            <div class="form-group">
                                Category&#9;
                                <select name="category" >
                                    <option value="Building">Building</option>
                                    <option value="Vehicles">Vehicles</option>
                                    <option value="Office Inventory">Office Inventory</option>
                                    <option value="Electronic">Electronic</option>
                                </select>
                            </div>
                            <div class="form-group">
                                Status&#9;
                                <input type="radio" name="status" id="status" value="Well">
                                <label for="Well">Well</label>
                                <input type="radio" name="status" id="status" value="Maintenance">
                                <label for="Maintenance">Maintenance</label>
                                <input type="radio" name="status" id="status" value="Damaged">
                                <label for="Damaged">Damaged</label>
                            </div>
                            <div class="form-group">
                                Unit Price&#9;
                                <input type="number" class="form-control" name="unit_price" placeholder="Unit_Price" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Save">
                                <input type="reset" class="btn btn-primary" value="cancel">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br></center>
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
