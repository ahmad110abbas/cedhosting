<?php include "header.php";
session_start();
require('config.php');
require('user.php');
$dbcon = new Dbcon();
$details = new User();

    if (isset($_POST['submit'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];

// print_r($email);
// print_r($password);

			// require_once "config.php";
    		// $log= new db_con();
    		$msg = $details -> login($email,$password,$dbcon -> conn);
    		print_r($msg);
    		print_r($_SESSION);
    		die();

    		// print_r($sql);
    		// die();
            // $sql=$user->signin($username,$_POST['password']);
      //       $num=mysqli_num_rows($sql);
      //       if($num>0)
      //       {
      //       $rows=mysqli_fetch_assoc($sql);
      //       print_r($rows);
      //       die();
      //       session_start();
      //       $_SESSION['user']=$_POST['username'];
      //       $_SESSION['id']=$rows['user_id'];
      //       $status=$rows['isblock'];
      //        $power=$rows['isadmin'];
    		// echo "string";
    		//print_r($sql);
    	}
    

 ?>
	<!---header--->
		<!---login--->
			<div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">
								<div class="col-md-6 login-left">
									 <h3>new customers</h3>
									 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									 <a class="acount-btn" href="account.php">Create an Account</a>
								</div>
								<div class="col-md-6 login-right">
									<h3>registered</h3>
									<p>If you have an account with us, please log in.</p>
									<form method="post" action="">
									  <div>
										<span>Email Address<label>*</label></span>
										<input type="text" name="email"> 
									  </div>
									  <div>
										<span>Password<label>*</label></span>
										<input type="password" name="password"> 
									  </div>
									  <a class="forgot" href="#">Forgot Your Password?</a>
									  <input type="submit" name="submit" value="Login">
									</form>
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- login -->
				<?php include "footer.php"; ?>