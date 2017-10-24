<?php  
//p1.php
$connect = mysqli_connect("localhost", "root", "", "testing");
$query = "SELECT * FROM tbl_employee ORDER BY id DESC";
$result = mysqli_query($connect, $query);
 ?>  
<!DOCTYPE html>  
<html>  
 <head>  
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>P1-Dark Theme</title> 
     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media='all'/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" media='all'/>
    <link rel="stylesheet" type="text/css" href="css/local.css"  media='all'/>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"  media='all'></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"  media='all'></script>
<!--     <script type="text/javascript" src="bootstrap/js/bootstrap.js"  media='all'></script>-->
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"  media='all'></script>  -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media='all'/> -->
<!--
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"  media='all'></script>  
     
-->
     
     
     
     <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css"  media='all'/>
     
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css"  media='all'/>

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"  media='all'></script>
     
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"  media='all'></script>
     
     
     
     
     
 </head>  
 <body>  
       <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Back to Admin</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>

                   
                   
                    <li class="selected"><a href="p1.php"><i class="fa fa-font"></i> P1</a></li>
                    <li><a href="upload.php"><i class="fa fa-font"></i> Upload</a></li>
                   <li ><a href="edit.php"><i class="fa fa-pencil-square-o"></i> Edit</a></li>
                   <li><a href="events.html"><i class="fa fa-newspaper-o"></i> Events</a></li>
                    <li><a href="#"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li><a href="#"><i class="fa fa-table"></i > Bootstrap Grid</a></li>            
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#" ><i class="fa fa-user"></i> College Rep Name</a>
                        
                    </li>
                     <li>
                        <a href="#" ><i class="fa fa-sign-out"></i> Log Out</a>
                        
                    </li>
                </ul>
            </div>
        </nav>
<div id="page-wrapper" >
  <br /><br />  
    <div class="row">
  <div  >  
   <h3 align="center">Insert Data Through Bootstrap Modal by using Ajax PHP</h3>  
   <br />  
   <div >
       <div class="col-lg-12">
    <div align="right">
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning" id="ab">Add</button>
    </div>
       
       
       
    <br />
       
     
                
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> P1 </h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-grid1" style="overflow-x:auto;"></div>
                             <div id="employee_table">
     <table class="table table-bordered table-responsive" >
         <thead>
      <tr>
       <th width="70%">Employee Name</th>  
       <th width="30%">View</th>
             </tr>
             </thead>
      <?php
      while($row = mysqli_fetch_array($result))
      {
      ?>
      <tr>
       <td><?php echo $row["name"]; ?></td>
       <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
      </tr>
      <?php
      }
      ?>
     </table>
             </div>
                            
                        </div>
                    </div>
                </div>
            </div> 
       
       
       
   
        
        
        
        
    </div>
   </div>  
  </div>
 

<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">PHP Ajax Insert Data in MySQL By Using Bootstrap Modal</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>Enter Employee Name</label>
     <input type="text" name="name" id="name" class="form-control" />
     <br />
     <label>Enter Employee Address</label>
     <textarea name="address" id="address" class="form-control"></textarea>
     <br />
     <label>Select Gender</label>
     <select name="gender" id="gender" class="form-control">
      <option value="Male">Male</option>  
      <option value="Female">Female</option>
     </select>
     <br />  
     <label>Enter Designation</label>
     <input type="text" name="designation" id="designation" class="form-control" />
     <br />  
     <label>Enter Age</label>
     <input type="text" name="age" id="age" class="form-control" />
     <br />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
           
 
<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Employee Details</h4>
   </div>
   <div class="modal-body" id="employee_detail">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
     
     </div>
<script>  
$(document).ready(function(){
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#name').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#address').val() == '')  
  {  
   alert("Address is required");  
  }  
  else if($('#designation').val() == '')
  {  
   alert("Designation is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"insert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });




 $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var employee_id = $(this).attr("id");
  $.ajax({
   url:"select.php",
   method:"POST",
   data:{employee_id:employee_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
   }
  });
 });
});  
 </script>
  </body>  
</html>    