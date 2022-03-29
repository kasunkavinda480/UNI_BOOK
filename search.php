<!-
Code Initiator - NAFEES IDREES
Begin Date - FEB 4 - 2022
>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<?php

if(isset($_POST['search']))
{
    $search = $_POST['search'];
    $query = "SELECT * FROM `collages` WHERE CONCAT( `name`, `description`, 'phone number') LIKE '%".$search."%'";
    $search_result = filter($query);   
}
else {
    $query = "SELECT * FROM `collages`";
    $search_result = filter($query);
}

function filter($query)
{
    $connect = mysqli_connect('localhost', 'root', '', 'unibook');
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<php>
<HEAD>
    <meta charset="UTF-8">
    <meta name="viewport" content="width =device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<TITLE>Search collages</TITLE>

</HEAD>
<BODY>
    <div class="header">
    <a class="logo" href="index.php"> <img src="images/logo.jpg">  </a>
  
            <nav class="header-left">
                <a  href="index.php">Home</a>
                    <div class="dropdown">
                       <a class="active" href="comics.php">collage</a>
                 
                    <div class="dropdown-options">
                    <a href="compare.php"> compare </a>
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
            
             
       </div>
    </div>

<div class="collages">YOUR SEARCH REVEALED THE FOLLOWING collages! </div>

 <div id="collages-grid">
     
  <?php while($row = mysqli_fetch_array($search_result)):?>
     
    <div class="collages-item">
			<form method="post" action="cart.php?action=add&code=<?php echo $row["code"]; ?>">
                        <form method="post" action="account.php?action=add&code=<?php echo $row["code"]; ?>">
			<div class="product-image"><img src="<?php echo  $row["image"]; ?>"></div>
			<div class="product-tile-footer">
                        
			<div class="product-title"><?php echo  $row["name"]; ?></div>
                        
			<div class="description"><?php echo "text ". $row["description"]; ?></div>
			
			</div>
			</form>
        </div>
                 <?php endwhile;?>  
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
             all rights reserved.<br>
                Designed by Nafees Idrees!  
        </div>
        
        <div class="footer-right">
        
           
        </div>
        
    </div>
</BODY>
</php>