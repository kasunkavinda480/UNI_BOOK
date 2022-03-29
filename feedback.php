<!-
Code Initiator - NAFEES IDREES
Begin Date - jan 10 - 2022
>

<!DOCTYPE php>
<php>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="incdec.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> UNIBOOK - Feedback </title>
 <style>
     
 body {
    background-image: url("images/CONTACT.jpg");
 }   
 .feedback{
  border-radius: 5px;
  background-color: hsla(0, 9%, 96%, 0.74);
  overflow: hidden;
  padding: 20px;
  margin-top: 20px;
  float: below;
}

input[type=email],[type=text], textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

  
.submit{
  background-color: seagreen;
  color: white;
  padding: 12px 20px;
  margin: 10px 0;
  cursor: pointer;
  border-radius:4px;
  font-size:15px;
}
.submit:hover {
  background-color: green;
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
               <a href="contact.php" target="_blank">Contact</a>
               <a class="active" target="feedback.php">Feedback</a>   
                   
             </nav>
             <div class="search-right">
                <form class="search" method="POST" action="search.php" style=" margin:auto">
                    <input type="text" placeholder="Whats on your mind??" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                
                </form>
                 
             </div>
             
    </div>



                
            </div>
            <div class="feedback">
            <h2>FEEDBACK</h2>
            <p class="style">We would love to hear from you...Please drop us a message in here! </p>      
            
            <form action="feedback1.php" method="POST">
                        Email:
                        <input type="email" id="email" name="email" placeholder="Enter your email address..." required>
                        Comment Your Feedback
                        <textarea id="feedback" name="feedback" placeholder="Write something..." style="height:200px" required></textarea> <br>
                        <button type="submit" class="submit" value ="submit" >SUBMIT</button>
            </form>

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
</php>
  
 