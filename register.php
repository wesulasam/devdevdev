<head>
	
		<link rel="stylesheet" type="text/css" href="mainStyle.css">
	
</head>
<body>
	<section>
		<div class="miniPanel">
			<h1>Sign Up</h1>
			<form action="register.php" method="post">
				<input type="text" name="fName" placeholder="First Name" required>
				<br>
				<input type="text" name="lName" placeholder="Last Name" required>
				<br>
				<input type="text" name="userName" placeholder="Username" required>
				<br>
				<input type="email" name="userEmail" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
				<br>
				<input type="password" name="userPass" placeholder="password" pattern=".{6,}" title="Please input six or more characters" required>
				<br>
				<input type="submit" name="completeBtn" value="Complete"><br><br>
				<?php
					include('server.php');
				?>
			</form>
		</div>	
	</section>
</body>
