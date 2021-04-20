<?php
// starting the session
session_start();
//print_r($_POST['password']);
// Import the connection details from connection.php
require 'connection.php';

// Checking if login button was clikcked
// ensures the php script is only executed on click on the submit button

if(isset($_POST['submit']))
  {

	    $username=$_POST['username'];
		$password=$_POST['password'];
// echo $username.$password;
// exit;
//pick login details from the form
if(($username=="Admin")&&($password=="maggy123")){
	$_SESSION['Admin']=$username;
	header("Location: index.php");
}
else{
  ?>
  <script>
  alert("Access Denied!");
  window.location="login.php";
  </script>
  <?php
		}
}
?>
