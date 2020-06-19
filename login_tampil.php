<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/style.css">
	</head>

	<body>

	
		<div id="card">
			<div class="isi">
					<div id="card-content">
			<div id="card-title">
				<h2>LOGIN</h2>
				<div class="h2"></div>
			</div>
		</div>
			<form action="login_proses.php" method="POST">
			<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr>
			<td>Password</td>
			<td><input type="text" name="password"></td>
			</tr>

			<tr>
			<td></td>
			<td><input type="submit" name="btn-login" value="login"></td>
			</tr>
			</table>
		</form>	
		</div>
		</div>
	</body>
