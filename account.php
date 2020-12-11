<?php include "header.php"; ?>
	<!---header--->
		<!---login--->
			<div class="content">
				<!-- registration -->
				<div class="main-1">
					<div class="container">
						<div class="register">
							<form> 
								<div class="register-top-grid">
									<h3>personal information</h3>
									<div>
										<span>Name<label>*</label></span>
										<input type="text" id="name" name="name" placeholder="FirstName LastName" ondrop="return false" onpaste="return false" oncopy="return false" ondrag="return false" required> 
									</div>
									<div>
										<span>Email Address<label>*</label></span>
										<input type="text" id="email" name="email" placeholder="Something@something.com" ondrop="return false" onpaste="return false" oncopy="return false" ondrag="return false" required> 
									</div>
									<div>
										<span>Mobile Number<label>*</label></span>
										<input type="text" id="mob" name="mob" placeholder="Valid Mobile Number" ondrop="return false" onpaste="return false" oncopy="return false" ondrag="return false" required> 
									</div>
									<div class="clearfix"> </div>
									<a class="news-letter" href="#">
										<label class="checkbox"><input type="checkbox" id="cbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
									</a>
								</div>
								<div class="register-bottom-grid">
									<h3>login information</h3>
									<div>
										<span>Password<label>*</label></span>
										<input id="pass" type="password" name="password" placeholder="" ondrop="return false" onpaste="return false" oncopy="return false" ondrag="return false" required>
									</div>
									<div>
										<span>Confirm Password<label>*</label></span>
										<input id="repass" type="password" name="repassword" placeholder="" ondrop="return false" onpaste="return false" oncopy="return false" ondrag="return false" required>
									</div>
								</div>
								<div class="register-top-grid">
									<h3>Security Question</h3>
									<div>
										<span>Question<label>*</label></span>
										  <select id="sq" name="sq">
										    <option value="What was your childhood nickname?">What was your childhood nickname?</option>
										    <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
										    <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
										    <option value="What was your dream job as a child?">What was your dream job as a child?</option>
										    <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
										  </select>
									</div>
									<div>
										<span>Answer<label>*</label></span>
										<input type="text" id="sanswer" name="sanswer" placeholder="" ondrop="return false" onpaste="return false" oncopy="return false" ondrag="return false" required>
									</div>
								</div>
								<div class="clearfix"> </div>
								<div class="register-but">

									<input id="sub" class="B" type="submit" name="submit" value="submit">
									<div class="clearfix"> </div>
								</form>
							</div>
						</div>
					</div>
				</div>
<!-- registration -->

			</div>
<!-- login -->
				<?php include "footer.php"; ?>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#sub').click(function(e){
							e.preventDefault();
							var regname=/[ ]{2,}/;
							var regtwodots=/^(?!.*?\.\.).*?$/;
							var letters =  /^[a-zA-Z ]*$/;
							// var regemail= /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
							var regemail=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
							var regpass = /^(?=.*[0-9])(?=.*[A-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
							var regidentical=/(\d)\1{9}/g;
							var reganswer = /^[0-9a-zA-Z]+$/;
							var regnum=/^[0-9]*$/;
							// var regpass2=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;


							if($('#name').val()==""){
								alert("Insert Name");
								return;
							}
							else{
								var name=$('#name').val();
							}
							var l = name.length;
							if ((name.indexOf(" ")==0) || (name.charAt((l-1))==" ") || (regname.test(name)) || !(letters.test(name))) {
								alert("no white spaces in beginning or ending of name or in between name and no special character");
								return;
							}
							if($('#email').val()==""){
								alert("Insert Email");
								return;
							}
							else{
								var email=$('#email').val();
							}




							var lemail = email.length;
							if (((email.indexOf(" ")==0)||email.indexOf(".")==0) || (email.charAt((lemail-1))==" ") || !(regemail.test(email))||!(regtwodots.test(email))) {
								alert("invalid email");
								return;
							}






							if($('#mob').val()==""){
								alert("Insert Mobile Number");
								return;
							}
							else{
								var mob=$('#mob').val();
							}
							if (!(Number.isInteger(parseInt(mob)))) {
								alert("Mobile Number Field Must contain numbers no dots no alphabets no special characters");
								return;
							}
							var lmob = mob.length;
							// console.log(lmob);
							if ((lmob>11) || (lmob<10)) {
								alert("invalid length of mobile number");
								return;
							}
							if ((mob.charAt(0)!=0)&&(lmob>10)) {
								alert("invalid length of mobile number");
								return;
							}
							if ((mob.indexOf(" ")==0) || (mob.charAt((lmob-1))==" ") || (regidentical.test(mob)) || ((mob.charAt(0)=="0")&&(mob.charAt(1)=="0"))) {
								alert("invalid mobile");
								return;
							}
							var mobnum=parseInt(mob);
							if (!(Number.isInteger(mobnum))) {
								console.log("hii");
								if (mobnum!=mob) {
									alert("Mobile Number Cannot be decimal");
									return;
								}
							}


							if($('#pass').val()==""){
								alert("Insert password");
								return;
							}
							else{
								var pass=$('#pass').val();
							}
							if($('#repass').val()==""){
								alert("Insert Password again");
								return;
							}
							else{
								var repass=$('#repass').val();
							}
							if(pass!=repass){
								alert("Both password are not same");
								return;
							}
							else{
								var password=$('#pass').val();
							}

							var lpass = password.length;
							if ((password.indexOf(" ")==0) || (password.charAt((lpass-1))==" ") || !(regpass.test(password) )) {
								alert("invalid Password");
								return;
							}



							var cbox=$('#cbox').val();


							if($('#pass').val()==""){
								alert("Insert First Name");
								return;
							}
							else{
								var pass=$('#pass').val();
							}
							if($('#sq').val()==""){
								alert("Choose a security question");
								return;
							}
							else{
								var sq=$('#sq').val();
							}
							if($('#sanswer').val()==""){
								alert("Insert Security answer");
								return;
							}
							else{
								var sanswer=$('#sanswer').val();
							}
							if ((regnum.test(sanswer))){
								alert("Only Numeric is not allowed in security answer");
								return;
							}
							var lans = sanswer.length;
							if ((sanswer.indexOf(" ")==0) || (sanswer.charAt((lans-1))==" ") || !(reganswer.test(sanswer) )) {
								alert("invalid Security Answer");
								return;
							}
							 $.ajax({
							  url:'helper.php',
							  type:'POST',
							  data:{name:name,email:email,password:password,mobnum:mobnum,sq:sq,sanswer:sanswer
							  },
							  success:function(result){
							    console.log(result);
							    if (result=="m") {
							    	alert("mobile already exist");
							    	return;
							    }
							    if (result=="e") {
							    	alert("email already exist");
							    	return;
							    }
							    alert("Verify to Log in");
							    // window.location.href = "http://localhost/task/cedhosting/verification.php";
							    // window.location.reload();
							  },
							  error: function(){
							    alert("error");
							  }
							});
							console.log(name);
							console.log(email);
							console.log(cbox);
							console.log(password);
							console.log(mobnum);
							console.log(sq);
							console.log(sanswer);
							// if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email)) {
							// 	console.log("correct");
							// }
					// if (regex.test(email)) {
					// 	console.log("two dots not present")
					// }else{
					// 	console.log("two dots present");
					// }
					// if (regname.test(name)) {
					// 	console.log("more than one space");
					// 	alert("only one space can be inbetween firstname and lastname");
					// 	return;
					// }else{
					// 	console.log("single space");
					// }
						});
					
					});

						</script>