<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_badge']) ){
		$date = $_POST['date'];
		
		
	

		$conn->query("UPDATE `badge` SET `date` = '$date' WHERE `badge_id` = '$_REQUEST[badge_id]'") or die(mysqli_error());
		echo
		"<script>
		alert('Data Updated Successfully');
		document.location.href = 'badge.php';
		</script>"
		;
	}	