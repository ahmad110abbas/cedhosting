<?php 
session_start();
if ((isset($_POST['name']))&&(isset($_POST['email']))&&(isset($_POST['password']))&&(isset($_POST['mobnum']))&&(isset($_POST['sq']))&&(isset($_POST['sanswer']))) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobnum=$_POST['mobnum'];
	$sq=$_POST['sq'];
	$sanswer=$_POST['sanswer'];
	$_SESSION['name']=$name;
	$_SESSION['email']=$email;
	$_SESSION['number']=$mobnum;
	// echo $name;
	// echo $email;
	// echo $password;
	// echo $mobnum;
	// echo $sq;
	// echo $sanswer;
	require_once "user_class.php";
    $user_registration= new user();
    $sql=$user_registration->user_registration($email,$name,$mobnum,$password,$sq,$sanswer);
    echo $sql;
    // print_r($sql);
		
}

 ?>