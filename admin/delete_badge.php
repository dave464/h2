<?php
	 require_once 'connect.php';
	 $conn->query("DELETE FROM `badge` WHERE `badge_id` = '$_REQUEST[badge_id]'") or die(mysqli_error());
	 header("location: badge.php");