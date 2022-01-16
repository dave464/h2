<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `inspection` WHERE `inspection_id` = '$_REQUEST[inspection_id]'") or die(mysqli_error());
	 header("location: inspection.php");