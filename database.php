<!-
Code Initiator - NAFEES IDREES
Begin Date - jan 10 - 2022
>

<?php
session_start();

$username = "";
$fname="";
$lname="";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'unibook');
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  
  $user_check_query = "SELECT * FROM students WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Sorry, this username already exists.");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Sorry, this Email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO students (username,fname, lname, email, password) 
  			  VALUES('$username', '$fname','$lname', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: account.php');
  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM students WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
            $query="INSERT into login (username) values ('$username')";
           mysqli_query($db, $query);
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: account.php');
  	}else {
  		echo '<script> alert ("Invalid Username or Password."); window.location="login.php"; </script>';
  	}
  }
}

//update user
//if (isset($_POST['update'])) {
//	$fname = $_POST['fname'];
//	$lname = $_POST['lname'];
//	mysqli_query($db, "UPDATE customers SET fname='$fname', lname='$lname' WHERE username=$username");
//	$_SESSION['message'] = "Address updated!"; 
//	header('location: index.php');
//}

?>