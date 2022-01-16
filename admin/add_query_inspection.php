<?php
	if(ISSET($_POST['add_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
			$conn->query("INSERT INTO `admin` (name, username, password) VALUES('$name', '$username', '$password')") or die(mysqli_error());
			header("location:account.php");
		
	}
?>