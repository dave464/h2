
<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Calendar</title>
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
    margin-left:280px; margin-top:30px; font-size: 25px;
  font-weight: 400;" class="links_name">Calendar</span>






 </div>


 <!-- Main Content -->
   <div class="home_content">
    

   <div class="action">
        <div class="profile" style="margin-top:-150px;
        margin-right:20px;" onclick="menuToggle()">
            <img src="../img/admin.JFIF" alt="">
        </div>
        <div class="menu">
            <h3><?php echo $name;?> <br> <span>Website Designer</span></h3>
            <ul>
               
                
                <li><img src="../img/user.png" alt=""><a href="#">User Profile</a></li>
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

<!-- Calendar -->     
	<div class="calendar">
 
 <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FManila&showNav=1&showTitle=0&showPrint=1&showCalendars=1&src=cnYwNTE5M2pyOWo0aWljdGU1ZXZsajUxbzhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=cHRuaGc2aTdqdjVkbXFrczBnaDQ1Z3JjZjhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23C0CA33&color=%23F4511E&color=%230B8043" 
    style="border:solid 3px white" width="600" height="600" frameborder="0" scrolling="no"></iframe>
</div>




   </div>



 <style type="text/css">
    
    .calendar{
      margin-top: -240px;
      height: 650px;
      width: 650px;
      background-color: white;
      float: left;
      margin-bottom: 30px;
      box-shadow: 1px 2px 5px black;
        transition: all .4s;
      background: #1E90FF ;
      border:5px solid #fff ;
      margin-left:20px;
    
      
    }
    
    
    
    iframe {
    
      margin-top: 20px;
      margin-left: 20px;
      border-left-color: aqua
         
    }
      </style>





</body>
</html>

