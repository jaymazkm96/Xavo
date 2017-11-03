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

     <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css"  media='all'/>
     
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css"  media='all'/>

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"  media='all'></script>
     
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"  media='all'></script>
     
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Jura:300,400" rel="stylesheet" type="text/css">
     
     
     
 </head>  
 <body>  
     
      <style>
    
        h1 {
	font-family: Jura;
/*	font-size: 24px;*/
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
/*	line-height: 26.4px;*/
}
    </style>
     
       <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Registration Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>

                    
                   
                    <li ><a href="p1.php"><i class="fa fa-font"></i> Participants</a></li>
                   
                   <li class="selected"><a href="events.php"><i class="fa fa-newspaper-o"></i> Events</a></li>
                   
                               
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                   
                     <li>
                        <a href="#" ><i class="fa fa-user"></i> College Rep Name</a>
                        
                    </li>
                     <li>
                        <a href="#" ><i class="fa fa-sign-out"></i> Log Out</a>
                        
                    </li>
                </ul>
            </div>
        </nav>
<div id="page-wrapper">
  <br />  
    <div class="row">
  <div  >  
   <h1 align="center">Add Participant Name(s) To This Event</h1>  
   <br />  
   <div >
       <div class="col-lg-12">
    <div align="right">
     <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>
    </div>
       
       
       
    <br />
       
     
                
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Participants </h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-grid1"></div>
                             <div id="employee_table"  style="overflow-x:auto;">
     <table class="table table-bordered table-responsive">
         <thead>
      <tr>
       <th width="70%">Name</th>  
       <th width="30%">View</th>
             </tr>
             </thead>
      <?php
      while($row = mysqli_fetch_array($result))
      {
      ?>
      <tr>
       <td><?php echo $row["name"]; ?></td>
       <td><input type="button" name="view" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
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
    <h4 class="modal-title">Participant List</h4>
   </div>
   <div class="modal-body">
    <!-- 
Modal Body 
-->
       <div style="overflow-x:auto;">
        <table id="employee_table" class="table table-bordered" class="table-responsive">  
                               <tr>  
                                    <th width="80%"> Name</th>  
                                   <th width="20%">Select</th>
                               </tr>  
                              
                               <tr>  
                                    <td>name</td>  
                                   <td><input type="checkbox" id="ch1">
                                   </td>
            </tr>
            <tr>
                                   <td>name</td>  
                                   <td><input type="checkbox" id="ch1"></td>
                </tr>     
              <tr>
                  <td>name</td>  
                                   <td><input type="checkbox" id="ch1"></td>
                </tr>    
                          </table>  
       </div>
       <br />
              <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" /> 

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
    <h4 class="modal-title">Participant Details</h4>
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
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      }); 
        $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.name);  
                     $('#gender').val(data.gender);  
                     $('#age').val(data.age);  
                     $('#employee_id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
         $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });
    });
  
 </script>
  </body>  
</html>