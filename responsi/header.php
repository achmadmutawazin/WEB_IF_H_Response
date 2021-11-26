<div class="header">
  <h2>LIST OF INVENTORY</h2>
  <H2>EVERYTHING OFFICE</H2>
</div>

<div class="navbar">
  <a href="index.php">Home</a>
  <?php
  if(isset($_SESSION['username'])){
  ?>
  <a href="list.php">Inventory List</a>
  <?php
  }else{
  ?>  <a href="login.php">Inventory List</a>
  <?php
  }?>
  <div class="dropdown">
    <button class="dropbtn">List per Category 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="building.php">Buildings</a>
      <a href="vehicles.php">Vehicles</a>
      <a href="Office.php">Office Inventory</a>
      <a href="Electro.php">Electronic</a>
    </div>
  </div>
  <?php
  if(isset($_SESSION['email'])){
  ?>
  <a href="logout.php" style="float: right;">logout</a>
  <?php
  }else{
  ?>
  <a href="login.php" style="float: right;">login</a>
  <?php
  }
  ?>
</div>