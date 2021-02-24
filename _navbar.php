<?php 

require_once 'AutoLoader.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class='nav-item'>
      <?php 
      if (!isset($_SESSION['principal'])) {
          echo "<a class='nav-link' href='loginForm.html'>Log In</a>";
          echo " <a class='nav-link' href='registerForm.php'>Register </a>";
      }
      ?>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="adminProducts.php">Shop</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php 
          if (isset($_SESSION['username'])) {
              echo "Welcome " .$_SESSION['username']. " ";
          }
          ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <?php 
          if (isset($_SESSION['principal'])) {
              if($_SESSION['principal'] == 'true'){
                  
              
              echo "<div class='dropdown-divider'></div>";
              echo "<a class='dropdown-item' href='processLogOut.php'>Log Out</a>";
             }
          
             
          }
          echo " </div>";
          ?>
       
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php 
          if (isset($_SESSION['principal']) && isset($_SESSION['role'])) {
            if($_SESSION['role'] == '2'){
                echo "Admin Menu";
                echo "</a>";
                echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
                echo "<a class='dropdown-item' href='adminProducts.php'>Products</a>";
                echo "<a class='dropdown-item' href='adminUsers.php'>User</a>";
                echo "<a class='dropdown-item' href='showOrderReports.php'>Reports</a>";
            }else{
                echo "Your Account";
                echo "</a>";
                echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown'>";
                echo "<a class = 'dropdown-item' href = 'showCart.php'>Cart</a>";
                echo "<a class='dropdown-item' href=''>Order History</a>";
                echo "<a class='dropdown-item' href=''>Account Information</a>";
            }
        }
        echo "</div>";
      ?>
          
        
      </li>
      
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <a class="nav-link" href='searchForm.html'>Search <span class="sr-only">(current)</span></a>    
    </form>
    
    
  </div>
</nav>
