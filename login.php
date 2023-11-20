<!DOCTYPE html>
<html>
<head>
	<title>LOGIN USER</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="proses_login.php">
					<label for="chk" aria-hidden="true">LOGIN USER</label>
					<input type="Username" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>LOG IN</button>
				</form>
			</div>

			<div class="login">
				<form method="post" action="proses_registrasi.php">
        			<label for="chk" aria-hidden="true">SIGN UP</label>
					<input type="Nama" name="nama" placeholder="Nama" required="">
          			<input type="Saldo" name="saldo" placeholder="Saldo" required="">
					<input type="Username" name="username" placeholder="Username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>SIGN UP</button>
				</form>
			</div>
	</div>
</body>
</html>