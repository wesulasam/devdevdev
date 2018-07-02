
<head>
	
	<link rel="stylesheet" type="text/css" href="mainStyle.css">
	
</head>
<body>
	<section>
		<div class="miniPanel">
			<h1>Login</h1>
			<form method="post">
				<input type="text" name="userName" placeholder="Username" required>
				<br>
				<input type="password" name="userPass" placeholder="password" pattern=".{6,}" title="Please input six or more characters" required>
				<br><br>
				<input type="checkbox" name="checkB">Remember Me<br><br>
				<input type="submit" name="loginBtn" value="login"><br><br>
				<?php
					include('server.php');
				?>
			</form>
		</div>	
	</section>
</body>

