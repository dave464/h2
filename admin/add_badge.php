

<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Add Data</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../admin/navstyle.css">
    <link rel="stylesheet" href="../admin/ad_style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Link -->
     <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
   </head>


<body>
 <!-- Navbar -->
 <?php include'navbar.php';?>
  <!-- /.navbar -->




<!-- Blue background -->
  <div style="height: 340px; background-color: #2234ae;
    background-image: linear-gradient(340deg, #2234ae 0%,  #191714 89%);">
      <br> 
      <span style="color:white;
    margin-left:280px; margin-top:30px;  font-size: 40px; font-family:Monotype Corsiva;
  font-weight: 400;" class="links_name">Add Data</span>
  


</div>


<!-- Main Content -->
   <div class="home_content">
    

   <div class="action">
        <div class="profile" style="margin-top:-340px;
        margin-right:17px;float:right" onclick="menuToggle()">
             <img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
        </div>
        <div class="menu">
            <h3><?php echo $name;?> <br> <span>Administrator</span></h3>
            <ul>
               
            <li><img src="../img/edit.png" alt=""><a href="edit_account.php">Edit Account</a></li>         
                <li><img src="../img/user.png" alt=""><a href="account.php">User Profile</a></li>
                <li><img src="../img/log-out.png" alt=""><a href="logout.php">Log-Out</a></li>
            </ul>
        </div>
    </div>
     
   

   <div id="tbl-contain" style=" margin-top:-240px;
    width: 97%; height:510px;
     background-color: white;  border-radius: .4rem;
     border-color:dodgerBlue;
    border:2px solid dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue; margin-left:20px;
      ">




<div class = "col-md-4" style="margin-top:-150px; margin-left:40px; ">	
					<form action ="add_query_badge.php" method = "POST"> 
						<div class = "form-group">
							<label>Name </label>
							<select  class = "form-control" required = required name = "merchant_id">
              
              <?php
 $query = "SELECT * FROM merchant";
 $result = $conn->query($query);
 if ($result->num_rows > 0) {
  echo '<option value="">Select Waterstation</option>';
 while ($row = $result->fetch_assoc()) {
 echo '<option value="'.$row['merchant_id'].'">'.$row['name'].'</option>';
 }
 }else{
 echo '<option value="">Waterstation not available</option>';
 }
 ?>




              </select>



						</div>
						<div class = "form-group">
							<label>Date </label>
							<input type = "date" class = "form-control"  required = required name = "date" />
						</div>
						
						<br />
						<div class = "form-group">
							<button name = "add_badge" class = "btn btn-info form-control" style="background:dodgerBlue;"><i class = ""></i> Saved</button>
						</div>
            <?php require_once 'add_query_badge.php'?>
					</form>
				
				</div>   




    </div>
    
   </div>

<style>
  textarea{
    border-color:dodgerBlue;
    border:2px solid dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue;
  }
</style>


</body>
</html>

<script>
        function menuToggle() {
            const toggleMenu = document.querySelector(".menu");
            toggleMenu.classList.toggle('active')
        }
    </script>