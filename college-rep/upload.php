<?php
//upload.php
$connect = mysqli_connect("localhost", "root", "", "testing");
$message = '';

if(isset($_POST["upload"]))
{
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $product_id = mysqli_real_escape_string($connect, $data[0]);
    $product_category = mysqli_real_escape_string($connect, $data[1]);  
    $product_name = mysqli_real_escape_string($connect, $data[2]);
    $product_price = mysqli_real_escape_string($connect, $data[3]);
    $query = "
     UPDATE daily_product 
     SET product_category = '$product_category', 
     product_name = '$product_name', 
     product_price = '$product_price' 
     WHERE product_id = '$product_id'
    ";
    mysqli_query($connect, $query);
   }
   fclose($handle);
   header("location: upload.php?updation=1");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">Product Updation Done</label>';
}

$query = "SELECT * FROM daily_product";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline - Dark Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" meadia='all'/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" meadia='all'/>
    <link rel="stylesheet" type="text/css" href="css/local.css" meadia='all'/>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js" meadia='all'></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js" meadia='all'></script>   

<!--
      <style>

        div {
            padding-bottom:20px;
        }

    </style>
-->
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" meadia='all'></script>
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" meadia='all'></script>-->
 
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
                    
                    
                    
                    <li><a href="p1.php"><i class="fa fa-font"></i> P1</a></li>
                    <li class="selected"><a href="upload.php"><i class="fa fa-font"></i> Upload</a></li>
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
<div id="page-wrapper">
         <hr />
        <div class="container">
            <div class="page-header">
                <h1 id="timeline">Upload Participant List</h1>
            </div>
            
        </div>
         <div >
   <h2 align="center">Please uplaod the participant list Created in CSV(Excel) format</h2>
   <br />
   <form method="post" enctype='multipart/form-data'>
    <p><label>Select File(Only CSV Formate)</label>
    <input type="file" name="product_file" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />
   <?php echo $message; ?>
   <h3 align="center">Participant List</h3>
   <br />
             
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Uploads </h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-grid1" style="overflow-x:auto;"></div>
                            <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
         <th>Id</th>
      <th>Name</th>
      <th>Event</th>
      <th>Phone Number</th>
     </tr>
        
        
        
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["product_id"].'</td>
       <td>'.$row["product_category"].'</td>
       <td>'.$row["product_name"].'</td>
       <td>'.$row["product_price"].'</td>
      </tr>
      ';
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
</body>
</html>
