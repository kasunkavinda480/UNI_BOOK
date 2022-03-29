<!-
Code Initiator - NAFEES IDREES
Begin Date - jan 10 - 2022
>

<?php include('database.php') ?>

<!DOCTYPE php>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> UNIBOOK - Login </title>
<style>
  body{
	margin: 0 auto;
	background-image: url("images/PAGE 1.jpg");
	background-repeat: no-repeat;
	background-size: 100% 1000px;
      }
</style>

</head>
<body>
 
    <div class="header">
    <a class="logo" href="index.php"> <img src="images/logo.jpg">  </a>  
            <nav class="header-left">
                <a  href="index.php" target="_blank">Home</a>
                
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
               <a class=" active" href="login.php" > Login</a>
               <a href="contact.php" target="_blank">Contact</a>
               <a href="feedback.php" target="_blank">Feedback</a>   
                   
             </nav>
             <div class="search-right">
                <form class="search" method="POST" action="search.php" style=" margin:auto">
                    <input type="text" placeholder="Whats on your mind?? " name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                
                </form>
                 
             </div>
             
    </div>

<style>
h1{
     color: mediumvioletred;  
      font-family: cursive;
    font-size: 30px;
    text-align:center;
  }
      
.login{
  padding-left: 100px;
       padding-right:100px;
       width: 450px;
       height: 500px;
       text-align:left;
       margin: 0 auto;
       background-color: hsla(0, 9%, 96%, 0.74);
       margin-top: 40px;
}

.login img{
	width: 100px;
	height: 100px;
	margin-top:40px;
       display: block;
        margin-left: auto;
        margin-right: auto;
}

.loginbtn {
  background-color: white;
  color: black;
  padding: 5px 5px;
  margin: 10px 0;
  border-radius: 4px;
  cursor: pointer;
  width: 40%;
  font-size:15px;
}

.loginbtn:hover{
    background-color:lightsalmon ;
    
}

  input[type=text], input[type=password], input[type=email] {
  width: 110%;
  padding: 10px;
  opacity :0.7;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
}

input[type=text]:focus, input[type=password]:focus, input [type=email]:focus {
  background-color: lightgray;
  outline: none;
}


</style>
</head>
    <body>
      
       <div class="login">
           <img src="images/LOGIN.png"> 
           <h1> LOGIN </h1>
           <p style="text-align:center; font-weight:bold"><em>Don't have an account?<br> Click <a href="reg.php"> SignUp </a> </em> </p>
            <form action="login.php" method="POST">
                <?php include('errors.php'); ?>
                <div class="logdetail">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <b>Username </b> <input type="text" name="username" placeholder="Enter username" required >
                    <b>Password </b> <input type="password" name="password" placeholder="Enter password" required>
           
                     <button type="submit" class="loginbtn" value ="login" name="login_user">  Login </button> 
                     <i class="fa fa-question-circle" aria-hidden="true">  <a href="fp.php" > Forgot Username/Password </a></i>
                
                 </div>
            </form>
       </div>
    </body>
    
          
</php>