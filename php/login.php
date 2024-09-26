
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="container">
		<form action="" method="POST" >
		<fieldset >
			
			<legend align="center"><b>Login</b></legend>
			<table>
				<tr>
					<td><label>Username:</label></td>
					<td><input type="text" name="lname" minlength="3" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="lpass"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="login"/></td>
					<td><a href="register.php"><input type="button" value="Register"/></a></td>
				</tr>
			</table>
			
		</fieldset>


	</form>
</div>
</body>
</html>

<?php 
	
	include "connect.php";
	if (isset($_POST['submit'])) {
		if (empty($_POST['lname'])||empty($_POST['lpass'])) {
			echo "  ";
		}else{
			$logname=$_POST['lname'];
			$logpass=$_POST['lpass'];

			$_SESSION['user']=$logname;
			$_SESSION['pass']=$logpass;

			$logQuery="select * from admin where Username='$logname' AND Password='$logpass'";
			$logExe=mysqli_query($conn,$logQuery);
			if (mysqli_num_rows($logExe)==1) {
				echo "Data inserted";
				header('location:dashboard.php');
			}else{
				echo "username or password not valid";
			}
		}
	}else{
		
	}
?>
