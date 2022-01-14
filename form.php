<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-success text-center">Online_Form</h1><br>
		<div class="col-lg-8 m-auto d-block">
			<form action="registration.php" onsubmit = "return validation()" class = "bg-light" method="post">
				<div class="form-group">
					<label>username: </label>
					<input type="text" name = "user" class="form-control" id="user" autocomplete="off">
					<span id="username" class="text-danger font-weight-bold"></span>
				</div>
				<div class="form-group">
				<label>passsword: </label>
					<input type="password" name = "pass" class="form-control" id="pass" autocomplete="off">
					<span id="password" class="text-danger font-weight-bold"></span>
				</div>
				<div class="form-group">
				<label>confirm password: </label>
					<input type="passsword" name = "conpass" class="form-control" id="conpass" autocomplete="off">
				<span id="confirm password" class="text-danger font-weight-bold"></span>
				</div>
				<div class="form-group">
				<label>mobilenumber: </label>
					<input type="text" name = "mobno" class="form-control" id="mobno" autocomplete="off">
					<span id="mobile" class="text-danger font-weight-bold"></span>
				</div>
				<div class="form-group">
				<label>Email-Id: </label>
					<input type="text" name = "email" class="form-control" id="email" autocomplete="off">
					<span id="Email-Id" class="text-danger font-weight-bold"></span>
				</div>
				<input type="submit" name="submit" value="subimt" class="btn btn-success">
			</form>
		</div>
	</div>
	<script type="text/javascript">
		function validation(){
			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var conpass = document.getElementById('conpass').value;
			var mobno = document.getElementById('mobno').value;
			var email = document.getElementById('email').value;
			if (user == "") {
				document.getElementById('username').innerHTML="*Please type username";
				return false;
			}
			if((user.length < 3) || (user.length > 21)){
				document.getElementById('username').innerHTML="*username must be in between 3 and 21 charecter.";
				return false;
			}
			if (!isNaN(user)) {
				document.getElementById('username').innerHTML="*username should be charecters only";
				return false;
			}
			if (pass == "") {
				document.getElementById('password').innerHTML="*Please type password";
				return false;
			}
			if ((pass.length <= 5) || (pass.length >=12)){
				document.getElementById('password').innerHTML="*password will contain minimum 5 charecter and maxium 12 charecter.";
			}
			if (conpass == "") {
				document.getElementById('confirm password').innerHTML="*Please type confirm password";
				return false;
			}
			if (conpass != pass ) {
				document.getElementById('confirm password').innerHTML="*password is not matching.";
				return false;
			}
			if (mobno == "") {
				document.getElementById('mobile').innerHTML="*Please type mobile number";
				return false;
			}
			if (isNaN(mobno)) {
				document.getElementById('mobile').innerHTML="*mobile number should be digits only";
				return false;
			}
			if (mobno.length != 10) {
				document.getElementById('mobile').innerHTML="*mobile number must be 10 digits only";
			}
			if (email == "") {
				document.getElementById('Email-Id').innerHTML="*Please type Email-Id";
				return false;
			}
			if (email.indexOf('@') == 0) {
				document.getElementById('Email-Id').innerHTML="*invalid Email-Id";
				return false;
			}
			if (email.indexOf('.') == 0) {
				document.getElementById('Email-Id').innerHTML="*invalid Email-Id";
				return false;
			}
			if (email.charAt(email.length-4)!='.') {
			document.getElementById('Email-Id').innerHTML="*invalid Email-Id";
			return false;
			}
	}

	</script>
</body>
</html>