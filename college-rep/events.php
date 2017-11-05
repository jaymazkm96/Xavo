
<?php   
 //load_data_select.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 function fill_brand($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM brand";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["brand_id"].'">'.$row["brand_name"].'</option>';  
      }  
      return $output;  
 }  
 function fill_product($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM product";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3">';  
           $output .= '<a href="s1.php"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["product_name"].'';  
           $output .=     '</div></a>';  
           $output .=     '</div>';  
      }  
      return $output;  
 }  
 ?>  
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media='all'/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" media='all'/>
    <link rel="stylesheet" type="text/css" href="css/local.css"  media='all'/>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"  media='all'></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"  media='all'></script>
    
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css"  media='all'/>
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css"  media='all'/>

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"  media='all'></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"  media='all'></script>
    <link href="https://fonts.googleapis.com/css?family=Jura:300,400" rel="stylesheet" type="text/css">
    
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    </head>
    <body >
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
                <ul id="active" class="nav navbar-nav side-nav">
                    <li><a href="index.html"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    
                    
                    
                    <li><a href="p1.php"><i class="fa fa-font"></i> P1</a></li>
                 
                    
                    <li class="selected"><a href="events.html"><i class="fa fa-newspaper-o"></i> Events</a></li>
                    
                  
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
                <div class="row" >
                    
                <h1 align="center">Select an event to enter participants.</h1>
                <br/>    
           <div class="col-lg-12">  
                  
                     <select name="brand" id="brand">  
                          <option value="">Show All Genres</option>  
                          <?php echo fill_brand($connect); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="show_product">  
                        <?php echo fill_product($connect);?> 
                     </div>  
                 
           </div>  
            </div>
            </div>
        </div>
            
    
    
    
    </body>
</html>
 <script>  
 $(document).ready(function(){  
      $('#brand').change(function(){  
           var brand_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{brand_id:brand_id},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 });  
 </script>  
