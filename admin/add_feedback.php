
<!DOCTYPE html> 
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Feedback</title>

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

   <!-- Navigation Bar --> 
   <div class="sidebar">
   
   <div class="logo_name" style=" margin-top:70px;">
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
            <h3><?php echo $name;?> <br> <span>Website Designer</span></h3>
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











       <br><br><br><br><br>
   
<form action ="add_query_feedback.php" method = "POST">





<div class="card" style="margin-left:20px; margin-right:20px;">
          <div class="card-header">
            <div class="container-fluid">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col-sm-12"><br>
                    <center>
                      <h2>EVALUATION REPORT</h2>
                    </center><br><br>
                    <hr>
                  </div><br><br><br>
                  


                  <div class = "col-md-4" >
        <div class = "form-group">

     <strong>   <label>Name: </label></strong>

							<select class = "form-control" required = required name = "merchant_id">
              
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

</div>


<div class = "col-md-4" style="margin-left:310px;" >
        <div class = "form-group">
			<strong><label>Date:</label></strong>
		<input type = "date" class = "form-control"  name = "date" />
						
</div>

</div>


       

       <table id="example"   class="table table-bordered border-primary table-hover "   style="margin-left:15px; width:97%; margin-top:60px;border:1px solid blue;" >
    <thead>
        <tr>
            <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;">Critea</th>
            <th scope="col" class=" border-primary" style="border:1px solid blue;background:#1E90FF;color:white;"> Rating</th>
           
        </tr>
    </thead>
    
    <tbody >

 
    


        <tr>
            <td class=" border-primary" style="border:1px solid blue;"></td>
            <td class=" border-primary" style="border:1px solid blue;" ><fieldset  class="rating">
    <input  type="radio" id="star5" name="critea_1" value="5" />
    <label for="star5">5 stars</label>
    <input type="radio" id="star4" name="critea_1" value="4" />
    <label for="star4">4 stars</label>
    <input type="radio" id="star3" name="critea_1" value="3" />
    <label for="star3">3 stars</label>
    <input type="radio" id="star2" name="critea_1" value="2" />
    <label for="star2">2 stars</label>
    <input type="radio" id="star1" name="critea_1" value="1" />
    <label for="star1">1 star</label>
</fieldset>


</td>
           
        </tr>
           

    </tbody>
</table>



                </div>
              </div>
            </div>
          </div>
        </div>

<br>
     
<div>
     <button name = "add_feedback"  class = "btn btn-primary" style="background:dodgerBlue; 
       margin-left:710px; margin-top:13px;">
             <i class = ""></i> Submit</button> 
     </div>
</form>  
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



        .rating {
        margin-right:25%;
    border:none;
}
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0, 0, 0, 0);
}
.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:250%;
    line-height:1.2;
    color:#ddd;
}
.rating:not(:checked) > label:before {
    content:'★ ';
}
.rating > input:checked ~ label {
    color: gold;
}
.rating:not(:checked) > label:hover, .rating:not(:checked) > label:hover ~ label {
    color: #f70;
}
.rating > input:checked + label:hover, .rating > input:checked + label:hover ~ label, .rating > input:checked ~ label:hover, .rating > input:checked ~ label:hover ~ label, .rating > label:hover ~ input:checked ~ label {
    color: #ea0;
}
.rating > label:active {
    position:relative;


        

</style>

</body>
</html>

