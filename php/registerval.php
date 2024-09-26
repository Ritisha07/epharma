<?php
	include "connect.php";
	if (isset($_POST['submit'])) {
		if (empty($_POST['uname'])||empty($_POST['pass'])||empty($_POST['repass'])||
		empty($_POST['address'])||empty($_POST['email'])||empty($_POST['contact'])) {
			echo "Please enter all data";
		}elseif($_POST['pass']!=$_POST['repass']) {
				echo "Password and repassword must be same";
		}else{
			$name=$_POST['uname'];
			$pass=$_POST['pass'];
			$repass=$_POST['repass'];
			$address=$_POST['address'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];

			$ins_query="insert into admin values('$name','$pass','$repass',
			'$address','$email','$contact')";
			$ins_exe=mysqli_query($conn,$ins_query);
			if ($ins_exe) {
				echo "Data inserted";
				header('location:login.php');
			}else{
				echo "Insertion failed";
			}
		}
	}
?>