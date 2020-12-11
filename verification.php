<?php 
session_start();
include "header.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/cedcoss/vendor/autoload.php';
// echo $_SESSION['number'];


if (isset($_POST['sendmob'])) {
	echo "mobsend";
	$otp = rand(1000,9999);
	$_SESSION['otp']=$otp;
    $fields = array(
    "sender_id" => "FSTSMS",
    "message" => "This is Test message".$otp,
    "language" => "english",
    "route" => "p",
    "numbers" => $_SESSION['number'],
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: U6WjZOCs7M1lNqcYrxDBwPEIFHAzn30iRo5SGJVk8umtaphvgbn6Bm7oEMyKvNIHL1htq8VWA4SrzukD",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
}



if (isset($_POST['sendemail'])) {
	echo "mailsend";
	$otp = rand(1000,9999);
	$_SESSION['otp']=$otp;
		$mail = new PHPMailer();
		try {
		$mail->isSMTP(true);
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'ahmad110abbas@gmail.com';
		$mail->Password = 'ahmad110abbas';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;

		$mail->setfrom('ahmad110abbas@gmail.com', 'CedHosting');
		$mail->addAddress($_SESSION['email']);
		$mail->addAddress($_SESSION['email'], $_SESSION['name']);

		$mail->isHTML(true);
		$mail->Subject = 'Account Verification';
		$mail->Body = 'Hi User,Here is your otp for account verification'.$otp;
		$mail->AltBody = 'Body in plain text for non-HTML mail clients';
		$mail->send();
		// header('location: verification.php?email=' . $email);
		} catch (Exception $e) {
		echo "Mailer Error: " . $mail->ErrorInfo;
		}
}if (isset($_POST['vmob'])) {
	echo $_SESSION['otp'];
	// echo "vmob";
	if ($_POST['otp']==$_SESSION['otp']) {
		echo "verified";
	}else{
		echo "not verified";
	}
}
if (isset($_POST['vemail'])) {
	// echo "vemail";
	echo $_SESSION['otp'];
	if ($_POST['email']==$_SESSION['otp']) {
		echo "verified";
	}else{
		echo "not verified";
	}
}
print_r($_SESSION);
 ?>
 <h1>Hello</h1>
 <div class="content">
				<div class="main-1">
					<div class="container">
						<div class="login-page">
							<div class="account_grid">						
								<div class="col-md-6 login-right">
									<h3>Verify Your Account</h3>
									<p>You can verify yourself through email or otp</p>
									<form action="verification.php" method="post">
									  <div>
										<?php echo "<span>".$_SESSION['email']."<label>*</label></span>"; ?>
										<input type="text" name="email" placeholder="OTP"> 
									  </div>
									  <input type="submit" name ="sendemail" value="sendemail">
									  <input type="submit" name ="vemail" value="Verify">
									 
									</form>

									<form action="verification.php" method="post">
									  <div>
										<?php echo "<span>".$_SESSION['number']."<label>*</label></span>"; ?>
										<input type="text" name="otp" placeholder="OTP"> 
									  </div>	
									  <input type="submit" name ="sendmob" value="sendotp">							
									  <input type="submit" name ="vmob" value="Verify">
									 
									</form>
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
 <?php 
include "footer.php";
  ?>