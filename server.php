<?php
	session_start();
	$db=mysqli_connect("localhost","root","","gamesys");
					
					
					
	if(isset($_POST['completeBtn'])){//if register button is clicked
		$firstName=$_POST['fName'];
		$lastName=$_POST['lName'];
		$user_name=$_POST['userName'];
		$user_email=$_POST['userEmail'];
		$user_pass=$_POST['userPass'];

			$sql="INSERT INTO `user`(`ID`, `first_name`, `last_name`, `user_name`, `user_email`, `user_pass`)
											VALUES(NULL,'$firstName','$lastName','$user_name','$user_email','$user_pass')";
						
			mysqli_query($db, $sql);
			$_SESSION['userName']=$user_name;
			$_SESSION['success']="You are logged in";
			
	}
	
	
	else if(isset($_POST['loginBtn'])){
		//if login button is clicked
		
		
		$user_name=$_POST['userName'];
		$user_pass=$_POST['userPass'];
		
		$query = "SELECT * from user WHERE user_name='$user_name' AND user_pass='$user_pass'";
		$result = mysqli_query($db,$query);
		$rowNum = mysqli_num_rows($result);

		
		if($rowNum==1){
			while($row=mysqli_fetch_array($result)){
				
				$fName=$row['first_name'];
				$lName=$row['last_name'];
				$userN=$row['user_name'];
				$mail=$row['user_email'];
				$pass=$row['user_pass'];
			}
			if($user_name==$userN && $user_pass==$pass){
				
				$fName=$_SESSION['ses_fName'];
				$lName=$_SESSION['ses_lnam'];
				$userN=$_SESSION['ses_user'];
				$mail=$_SESSION['ses_mail'];
				$pass=$_SESSION['ses_pass'];
				
				header("Location: home.php");
			}
		}else{
			echo "Invalid Login";
		}
		
	}
	
	else if(isset($_POST['logoutBtn'])){//if logout is clicked
		session_destroy();
		unset($_SESSION['user_name']);
		header("Location: login.php");
	}
?>