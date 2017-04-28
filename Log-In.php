<?php
	require_once("dbconf.php");
	$user = $pass = "";
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Sign-In </title>
		<link href='css/bootstrap.css' rel='stylesheet'>
	</head>

	<body>
	<div class ="container" style="margin-top:10%" align="center">
		<div class="row">
		<div id ="Log-In">
		<fieldset style="width:50%"><legend><h2>LOG-IN</h2></legend>
			<form name="login" method="post" action="login_form.php">
				<b> Username </b><br>
					<input type="text" class="form-control" name="user" style="width:250px"><br>
				<b> Password </b><br>
					<input type="password" class="form-control" name="pass" style="width:250px"><br>
				<input id="button" class="btn btn-primary btn-sm" type="submit" name="submit" value="Log-In" onclick="validateLogIn();">
			</form>
		</fieldset>
		</div>
		<br>
<!--
		<form method="POST" action="Sign-In.php">
		Tidak Punya Akun?
		<input class="btn btn-link btn-sml" style="width:80px" type="submit" value="Sign-Up">
		</form>
-->
	</div>
		<script>
            function validateLogIn(){
                var user = document.forms["login"]["user"].value;
                var pass = document.forms["login"]["pass"].value;
                if (user == null || user == "") {
                    document.getElementById("valid").innerHTML = "Input your username or email!"; 
                    return false;
                } else if (pass == null || pass == "") {
                    document.getElementById("valid").innerHTML = "Input your password!"; 
                    return false;
                } else {
                    document.forms[0].submit();
                }
            }
        </script>
	</body>
</html>