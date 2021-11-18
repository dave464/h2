
<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Announcement</title>
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



<!-- Blue background -->
  <div style="height: 340px; background-color: #2234ae;
    background-image: linear-gradient(340deg, #2234ae 0%,  #191714 89%);">
      <br> 
      <span style="color:white;
    margin-left:280px; margin-top:30px; font-size: 25px;
  font-weight: 400;" class="links_name">Announcement</span>
  


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
   

   <div id="tbl-contain" style=" margin-top:-240px;
    width: 97%; height:510px;
     background-color: white;  border-radius: .4rem;
     border-color:dodgerBlue;
    border:2px solid dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue; margin-left:20px;
      ">

<img  src="../img/anno.gif" style="height:200px; width:200px;
 float:right;margin-top:-237px;">

<form  method="post" >
                        
 <textarea style="width:750px; margin-left:40px;margin-top:50px;
   height:24em;  " name="announce" id="body"></textarea>
                     
      <div>
     <a class = "btn btn-primary" style="background-color:dodgerBlue;
     margin-left:710px; margin-top:13px;"  > Submit</a>
     </div>                      
  
  </form>
 
    </div>
    
   </div>
>
<style>
  textarea{
    border-color:dodgerBlue;
    border:2px solid dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue;
  }
</style>


</body>
</html>

