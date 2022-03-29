<!-
Code Initiator - NAFEES IDREES
Begin Date - jan 10 - 2022
>

<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<php>
<HEAD>
  <meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="incdec.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<TITLE>COMPARE</TITLE>
<style>
    body {
         background-image: url("images/.jpg");
	background-size: 100% 1400px;
         
        } 
</style>
</HEAD>
<BODY>
    <div class="header">
    <a class="logo" href="index.php"> <img src="images/logo.jpg">  </a>
  
            <nav class="header-left">
                <a  href="index.php">Home</a>
                    <div class="dropdown">
                <a class="active" href="compare.php">compare</a>
                    <div class="dropdown-options">
                    <a href="collage.php"> collage </a>
                    <a href="courses.php"> courses </a>  
                    </div>
                    </div>
               <a href="reg.php" target="_blank"> Sign Up </a>
               <a href="login.php" > Login </a>
               <a href="contact.php" target="_blank">Contact</a>
               <a href="feedback.php" target="_blank">Feedback</a>   
                   
             </nav>
          <div class="search-right">
                <form class="search" method="POST" action="search.php" style=" margin:auto">
                    <input type="text" placeholder="Whats on your mind??" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
          </div>
             
            </a>
        </div>
    </div>

<div class="collage"> compare</div>
 
<div id="collage-grid">
	
            <?php
            $product_array = $db_handle->runQuery("SELECT * FROM compare ORDER BY id ASC");
            if (!empty($product_array)) { 
                    foreach($product_array as $key=>$value){
            ?>
		<div class="product-item">
			<form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                        <form method="post" action="account.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                        <div class="product-desc"><?php echo $product_array[$key]["description"]; ?></div>
			<div class="product-price"><?php echo "LKR ".$product_array[$key]["price"]; ?></div>
			<div class="cart-action">

<script>      
</script>

			</form>
		</div>
	<?php
		}
	}
	?>
</div>
 <div class="footer">
        <div class="footer-left">
                
            <i class="fa fa-phone-square" style=" font-size:15px"> </i> 011-123-1234 <br> 
            <i class="fa fa-mobile" style="font-size:20px"></i> 0771234567 <br>
            <i class="fa fa-envelope" style=" font-size:15px"> </i> unibook@gmail.com
        </div>
        
        <div class="footer-center">
                <i class="fa fa-facebook-official" style="color:blue; font-size:40px; margin: 5px"></i> 
                <i class="fa fa-instagram" style="color:magenta; font-size:40px; margin: 5px"></i> 
                <i class="fa fa-twitter-square" style="color:#00acee; font-size:40px; margin: 5px" ></i> 
                <br>
             </a>  <br>
             &copy;2022-2025 copyright by UNI BOOK<br>
             all rights reserved. <br>
               Designed by Nafees idrees!  
        </div>
        
        <div class="footer-right">
            
           
        </div>
        
    </div>


</BODY>
</php>