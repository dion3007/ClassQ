<!DOCTYPE HTML>
<html>
	<head>
		<title>ClassQ</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div id="container">
			<form action="system/register.php" method="post">
				<input type="text" placeholder="first name" name="firstname" />
				<input type="text" name="lastname" />
				<input type="date" name="birth" />
				<input type="email" name="email" />
				<select name="gender">
					<option value="1">Male</option>
					<option value="2">Female</option>
				</select>
				<input type="password" name="password" />
				<input type="password" name="cpassword" />
				<input type="tel" name="phone" />
				<input type="submit" value="submit" />
			</form>
		</div>
	</body>
</html>