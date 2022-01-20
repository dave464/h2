<?php
include "connect.php";
	if(ISSET($_POST['add_badge'])){
		$merchant_id = $_POST['merchant_id'];
		$date = $_POST['date'];
		
		
			$conn->query("INSERT INTO `badge` (merchant_id, date) VALUES('$merchant_id', '$date')") or die(mysqli_error());
			echo
			"<script>
			alert('Data Added Successfully');
			document.location.href = 'badge.php';
			</script>"
			;
		
	}


	if (isset($_POST['merchant_id']) && !empty($_POST['merchant_id'])) {
 
		// Fetch state name base on country id
		$query = "SELECT * FROM merchant WHERE merchant_id = ".$_POST['merchant_id'];
		$result = $conn->query($query);


		if ($result->num_rows > 0) {
			echo '<option value="">Select State</option>';
			while ($row = $result->fetch_assoc()) {
			echo '<option value="'.$row['merchant_id'].'">'.$row['name'].'</option>';
			}
			} 

	}
?>