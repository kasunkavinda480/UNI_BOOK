<!-
Code Initiator - NAFEES IDREES
Begin Date - jan 10 - 2022
>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="incdec.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> UNIBOOK - Contact </title>
 <style>
     
 body {
    background-image: url("images/CONTACT.jpg");
    background-size: 100% 1000px;
    
}
        
.leftcolumn {   
  float: center;
  width: 100%;
  background-color: hsla(0, 9%, 96%, 0.74);
  overflow: hidden;
  border-style: solid;
  padding:0px 0 20px 40px;
  
}

.rightcolumn {
  float: right;
  width: 30%;
  padding:210px 40px 0px 40px;
}

h2{
    text-align:center;
    font-family: Times, Times New Roman, serif;
    font-size: 40px;
    color:BLACK;
    text-decoration:underline;
    font-weight:700;
}
.style{
    font-family: inherit ;
    font-weight:600;
    font-size: 15px;
    text-align:center;
}
.contact{
    padding: 20px;
   margin-top: 20px;
   overflow: hidden;
   background-color: hsla(0, 9%, 96%, 0.74);
   color:BLACK;
   text-align:center;
}
.card {
   padding: 20px;
   margin-top: 20px;
   overflow: hidden;
   background-color: hsla(0, 9%, 96%, 0.74);
   text-align:center; 
}

.card img{
    width:300px;
}

.card a{
    font-size:20px;
    font-family: cursive ;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


}

  @media screen and (max-width: 700px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>

</head>
<body>
    

   <div class="header">
   <a class="logo" href="index.php"> <img src="images/logo.jpg">  </a>
  
            <nav class="header-left">
                <a  href="index.php">Home</a>
                    <div class="dropdown">
                         <button class="dropbtn"> collage
                                <i class="fa fa-caret-down"></i>
                         </button>
                
                    <div class="dropdown-options">
                    <a href="compare.php"> compare </a>
                    <a href="courses.php"> courses </a>
                    </div> 
                    </div>
               <a href="reg.php" target="_blank"> Sign Up </a>
               <a href="login.php" target="_blank"> Login</a>
               <a class="active" href="contact.php">Contact</a>
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

            
       
        </div>
        </div>
        </div>
                <div class="card">
                    <img src="images/socialmedia.png">
                     <h2>Follow Us On</h2>
                     <a href="https://www.facebook.com/uni book/" target="_blank"><i class="fa fa-facebook-official" style="color:blue; font-size:40px"></i> FaceBook</a> <br>
                     <a href="https://www.instagram.com/uni book" target="_blank"> <i class="fa fa-instagram" style="color:magenta; font-size:40px"></i> Instagram </a> <br>
                     <a href="https://twitter.com/uni book" target="_blank"><i class="fa fa-twitter-square" style="color:#00acee; font-size:40px" ></i> Twitter </a>
                </div>
        
        <div class="rightcolumn">
                <div class="contact">
                    <h2>Contact Us</h2>
                    
                    For more details call us: <br>
                    <i class="fa fa-phone-square" style=" font-size:15px"> </i> 011-123-1234 <br> </b>
                    <i class="fa fa-mobile" style="font-size:20px"></i> 0771234567 <br> <br>
                    Or Email us on : <i class="fa fa-envelope" style=" font-size:15px"> </i> unibook@gmail.com
                    
                
        </div>
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
        
            
           
        </div>
        
    </div>
</body>
</html>
