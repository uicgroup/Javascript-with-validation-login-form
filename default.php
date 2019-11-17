<!DOCTYPE html>
<html>
<head>
	<title>JAVASCRIPT</title>
<script type="text/javascript">
			function validation()
			{

				var username=document.getElementById("uname");
				var password=document.getElementById("pass");

				if (username.value.trim()=="" || password.value.trim()==""){

					alert("No Blank Allowed");
					return false;

				}
				else
				{
					 true;
				}
			}

	</script>
</head>
<body>


	<form  onsubmit="return validation()" action="message.php">
		<div class="container">
			<h1>Login System</h1>
		<label>username</label>
		<input type="text"  id="uname" placeholder="username">
		<br><br>
		<label>password</label>
		<input type="password"   id="pass" placeholder="password"><br><br>
		<button type="submit" name="submit">Submit</button>
	</div>
	</form>
<!-- Required is important -->
</body>
</html>