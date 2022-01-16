
<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../admin/navstyle.css">
    <link rel="stylesheet" href="../admin/ad_style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css" />

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Font Link -->
     <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    
      <!-- Google chart Link -->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      
   </head>

<body>

   <!-- Navigation Bar -->   
   <div class="sidebar">  
   <div class="logo_name" style=" margin-bottom:8px;"> 
   <h3> H2Order </h3><h3>H2Order</h3></div>
      
      <ul class="nav_list" style="margin-top:120px;">
       
        <li>
         <a href="../admin/adminhome.php">
          <i class='bx bx-grid-alt'></i>
          <span style=" font-size: 16px;" class="links_name">Dashboard</span>
         </a> 
       </li>

        <li>
          <a href="../admin/calendar.php">
           <i class='bx bxs-calendar'></i>
           <span style=" font-size: 16px;" class="links_name">Calendar</span>
          </a>   
        </li>

        <li>
         <a href="../admin/inspection.php">
          <i class='bx bxs-search-alt-2'></i>
          <span style=" font-size: 16px;" class="links_name">Inspection & Monitoring</span>
        </a>   
       </li>

       <li>
         <a href="../admin/announcement.php">
          <i class='bx bxs-megaphone'></i>
          <span style=" font-size: 16px;" class="links_name">Announcements</span>
         </a>
       </li>
          
      </ul>
   </div>

  </div>


<!-- Blue Background -->
  <div style="height: 340px; background-color: #2234ae;
    background-image: linear-gradient(340deg, #2234ae 0%,  #191714 89%);">
      <br> 
      <span style="color:white;
    margin-left:280px; margin-top:30px; font-size: 40px; font-family:Monotype Corsiva;
  font-weight: 400;" class="links_name">Dashboard</span>




 </div>

    
<!-- Main Content -->
   <div class="home_content">
    
  
   <div class="action">
        <div class="profile" style="margin-top:-340px;
        margin-right:17px;float:right" onclick="menuToggle()">
            <img src="../img/admin.JFIF" alt="">
        </div>
        <div class="menu">
            <h3><?php echo $name;?> <br> <span>Website Designer</span></h3>
            <ul>
               
                
                <li><img src="../img/user.png" alt=""><a href="account.php">User Profile</a></li>
                <li><img src="../img/log-out.png" alt=""><a href="logout.php">Log-Out</a></li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector(".menu");
            toggleMenu.classList.toggle('active')
        }
    </script> 


    <?php	
			$q_wstation = $conn->query("SELECT COUNT(merchant_id) as total FROM `merchant` ") or die(mysqli_error());
				$f_wstation = $q_wstation->fetch_array();	
			?>

   <div class="card card-common">
                         <div class="card-body">
                             <div class="cbox">
                                 <i class="bx bxs-store fa-3x text-info"  style="font-size:90px; margin-top:400;"></i>
                
                                 <span style="float: left; margin-top:-90px; margin-bottom: 55px; 
                                 margin-left: 10px;font-weight: 600;font-size: 55px; 
                                 font-family:  RoxboroughCF Bold; color:#fff; "  ><?php echo $f_wstation['total']?><br></span>
                                  <strong><h1 style="color:#fff;font-weight: 600; 
                                   margin-top:-140px; font-family:georgia;
                                   margin-left: 10px; font-size: 19px;">Total Water Stations</h1></strong>
                             </div>
                         </div>
        
           
                     </div>

                     <div class="card card-common2">
                         <div class="card-body">
                             <div class="cbox">
                                 <i class="fa fa-flask fa-3x text-info"></i>
                
                                 <span style="float: left; margin-top:-70px; margin-bottom: 55px; margin-left: 12px;
                                 font-weight: 600;font-size: 55px; font-family:RoxboroughCF Bold; color:#fff ; " >110 </span>
                                <h1 style="font-weight: 600; color:#fff ;font-family: georgia; 
                                margin-top:-130px;  margin-left: 10px; font-size: 19px;">Total Passed Result</h1>
                             </div>
                         </div>
        
           
                     </div>
               
<!-- Charts-->
  <div id="top_x_div" style="margin-left:20px; margin-top:-40px;width: 980px; height: 500px;
             border: 25px solid white; box-shadow: 1px 2px 5px black;"></div>    
                             

   </div>



</body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
        
          ['Barangay', 'No. of Waterstation'],
          ["Brgy.1", 1], ["Brgy.2",2], ["Brgy.3", 1], ["Brgy.4", 4],  ['Brgy.5', 3],
          ["Brgy.6", 4], ["Brgy.7", 1], ["Brgy.8", 2], ["Brgy.9", 1], ["Brgy.10", 3]
         
        ]);

        var options = {
          title: 'Number of Waterstation Per Barangay',
          width: 930,
          legend: { position: 'none' },
          chart: { title: 'Number of Waterstation Per Barangay',
                   subtitle: '' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'No. of Waterstation'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>