
<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Badge</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../admin/navstyle.css">
    <link rel="stylesheet" href="../admin/ad_style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Font Link -->
     <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

<!-- Datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
  

   </head>


<body>

  <!-- Navbar -->
  <?php include'navbar.php';?>
  <!-- /.navbar -->

<!-- Blue Background -->
  <div style="height: 340px; background-color: #2234ae;
    background-image: linear-gradient(340deg, #2234ae 0%,  #191714 89%);">
      <br> 
      <span style="color:white;
    margin-left:280px; margin-top:30px;  font-size: 40px; font-family:Monotype Corsiva;
  font-weight: 400;" class="links_name">Inspection and Monitoring</span>



  </div>


  <!-- Main Content -->
   <div class="home_content">
    
   <div id="tbl-contain" style=" margin-top:-240px;
    width: 97%;height:100%; max-height:4000px;
     background-color: white;  border-radius: .4rem;
     border-color:dodgerBlue;
    border:2px solid dodgerBlue;
    box-shadow: 0 0 8px 0 dodgerBlue; margin-left:20px;
      ">



<div class="action">
        <div class="profile" style="margin-top:-100px;
        margin-right:17px;float:right" onclick="menuToggle()">
             <img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
        </div>
        <div class="menu" style=margin-left:820px;>
            <h3><?php echo $name;?> <br> <span>Administrator</span></h3>
            <ul>
               
                
            <li><img src="../img/edit.png" alt=""><a href="edit_account.php">Edit Account</a></li>         
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






<a  class = "btn btn-default focus" href = "../admin/inspection.php"
 style="background-color:#3366ff;margin-left:20px; color:white;margin-top:20px;">
                    Aplha Lab Test <i class = "fa fa-certificate"></i></a>



<a  class = "btn btn-default  " href = "../admin/badge.php"
  style="border:2px solid black ;margin-top:20px;
  background-image: linear-gradient(315deg, #2234ae 0%, #191714 95%);color:white;" >
                   Badge <i class = "fa fa-flask"></i></a> 

<a  class = "btn btn-default focus" href = "../admin/feedback.php"
 style="background-color:#3366ff; color:white;margin-top:20px;">
                    Feedback <i class = "fa fa-commenting"></i></a>





     
<div>
     <a class = "btn btn-primary"  id ="addBtn" href="add_badge.php" > Add Data</a> </div>  <br>
   <table id="table" class="table table-bordered border-primary table-hover "   style="margin-left:15px; width:97%; margin-top:60px;border:1px solid blue;" >
  <thead>
    <tr>
      <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;">ID</th>
      <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;">NAME</th>
      <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;">DATE</th>
      <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;">STATUS</th>
      <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;">ACTION</th>
    </tr>
  </thead>
  <tbody>
  
  <?php  
							$query = $conn->query("SELECT badge.badge_id, merchant.name, badge.date
              FROM merchant RIGHT JOIN badge ON merchant.merchant_id = badge.merchant_id ") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
						?>

    <tr>
      <td scope="row" class=" border-primary" style="border:1px solid blue;" ><?php echo $fetch['badge_id']?></th>
      <td class=" border-primary" style="border:1px solid blue;"><?php echo $fetch['name']?></td>
      <td class=" border-primary" style="border:1px solid blue;"><?php echo date("M d, Y", strtotime($fetch['date']))?></td>
      <td class=" border-primary" style="border:1px solid blue;"><?php

$startdate = $fetch['date'] ;
$expire = strtotime($startdate. ' + 2  days');
$today = strtotime("today midnight");

if($today >= $expire){
    echo "Expired";
} else {
    echo "Active";
}
?> </td>
      <td class=" border-primary" style="border:1px solid blue; color:white;"><a class = "btn btn-warning" href="edit_badge.php?badge_id=<?php echo $fetch['badge_id']?>" style="color:white;" ><i class = "glyphicon glyphicon-remove"></i>Edit</a>
       <a class = "btn btn-danger"  href="delete_badge.php?badge_id=<?php echo $fetch['badge_id']?>" onclick = "confirmationDelete(this); return false;" ><i class = "" ></i> Delete</a></td>
      
    </tr>
    <?php
							}
						?>
     
  </tbody>
</table><br><br>  <br>
<br>
        <br>
     

    
    
    </div>  



    </div>


   
   </div>

   
    
 
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
   <script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script> 
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 


    <script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>


    
   
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable(
		{
		
      pageLength: 10,
        lengthMenu: [[10, 20, 30, 40, 50 - 1], [10, 20, 30, 40, 50, 'all']],
       
        "columnDefs": [ {
            "searchable": false,

            "orderable": false,
           
            type:'title-string', targets: 0,
        } ],

        "dom": 'Blfrtip',
                "buttons": [  
                  
                  {  
                        extend: 'copy',  
                        className: 'btn btn-primary rounded-0',  
                        text: '<i class="far fa-file-excel"></i> Copy',
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }  
                    }, 
                    {  
                        extend: 'excel',  
                        className: 'btn btn-primary rounded-0',  
                        text: '<i class="far fa-file-excel"></i> Excel',
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }  
                    },  
                   
                    {  
                        extend: 'pdf',  
                        className: 'btn btn-primary rounded-0',  
                        text: '<i class="far fa-file-pdf"></i> Pdf',
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }  
                    },  
                    
                    {  
                        extend: 'print',  
                        className: 'btn btn-primary rounded-0',  
                        text: '<i class="fas fa-print"></i> Print' ,
                        title:'Alpha Lab Test',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                            
                        } 
                    },
                   
                ]  ,

                "createdRow": function (row, data, index) {
           

           if (data[3] == 'Active') {

               $('td', row).eq(3).css({
                   'color': 'green',
               });
           }

           else if (data[3] == 'Expired') {
               $('td', row).eq(3).css({

                   'color': 'red',
               });
           }
       }
		}
	);
	});
</script> 



<style>
.dataTables_wrapper .dt-buttons {
  
  text-align:center;
  width:350px;
  margin-left:300px;
  margin-bottom:-40px;
}
#addBtn.btn.btn-primary{
  margin-top: 130px;
  margin-left:20px;
 bottom:20px;
 color:white;
}
#table_length.dataTables_length{
        width:120px;
        height: 10px;
        margin-left:13px;
    }

#table_paginate.dataTables_paginate.paging_simple_numbers{
  margin-right:20px;
}

#table_info.dataTables_info{
  width:200px;
        height: 20px;
        margin-left:13px;
}

#table_filter.dataTables_filter{
   
    margin-right: 20px;

}
tr:hover {
          background-color: #b2f8ff;
        }

</style>

</body>
</html>

