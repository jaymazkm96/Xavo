<?php
 $connect = mysqli_connect("localhost", "root", "", "testing");
 $query = "SELECT * FROM tbl_employee ORDER BY id DESC";
 $result = mysqli_query($connect, $query);
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <title>Dashboard</title>
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
/* ---- ANIMATED BACKDROP ---- */
@keyframes move-twink-back {
    from {background-position:0 0;}
    to {background-position:-10000px 5000px;}
}
@-webkit-keyframes move-twink-back {
    from {background-position:0 0;}
    to {background-position:-10000px 5000px;}
}
@-moz-keyframes move-twink-back {
    from {background-position:0 0;}
    to {background-position:-10000px 5000px;}
}
@-ms-keyframes move-twink-back {
    from {background-position:0 0;}
    to {background-position:-10000px 5000px;}
}

@keyframes move-clouds-back {
    from {background-position:0 0;}
    to {background-position:10000px 0;}
}
@-webkit-keyframes move-clouds-back {
    from {background-position:0 0;}
    to {background-position:10000px 0;}
}
@-moz-keyframes move-clouds-back {
    from {background-position:0 0;}
    to {background-position:10000px 0;}
}
@-ms-keyframes move-clouds-back {
    from {background-position: 0;}
    to {background-position:10000px 0;}
}



/* Retina display */
@media screen and (min-width: 1024px){
    .stars, .twinkling, .clouds {
	position:absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	width:100%;
	height:1150px;
	display:block;
}

.stars {
	background:#000 url(img/stars.png) repeat fixed center center;
	z-index:-3;
	position:absolute;
    background-size: 2000px ;
}

.twinkling{
	background:transparent url(img/twinkling.png) repeat fixed center center;
	z-index:-2;

	-moz-animation:move-twink-back 200s linear infinite;
	-ms-animation:move-twink-back 200s linear infinite;
	-o-animation:move-twink-back 200s linear infinite;
	-webkit-animation:move-twink-back 200s linear infinite;
	animation:move-twink-back 200s linear infinite;
	position:absolute;

}

}

/* Desktop */
@media screen and (min-width: 980px) and (max-width: 1024px){
   .stars, .twinkling, .clouds {
	position:absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	width:100%;
	height:1150px;
	display:block;
}

.stars {
	background:#000 url(img/stars.png) repeat fixed center center;
	z-index:-3;
	position:absolute;
    background-size: 2000px ;
}

.twinkling{
	background:transparent url(img/twinkling.png) repeat fixed center center;
	z-index:-2;

	-moz-animation:move-twink-back 200s linear infinite;
	-ms-animation:move-twink-back 200s linear infinite;
	-o-animation:move-twink-back 200s linear infinite;
	-webkit-animation:move-twink-back 200s linear infinite;
	animation:move-twink-back 200s linear infinite;
	position:absolute;

}

}

/* Tablet */
@media screen and (min-width: 760px) and (max-width: 980px){
    .stars, .twinkling, .clouds {
	position:absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	width:100%;
	height:1600px;
	display:block;
}

.stars {
	background:#000 url(img/stars.png) repeat fixed center center;
	z-index:-3;
	position:absolute;
    background-size: 2000px ;
}

.twinkling{
	background:transparent url(img/twinkling.png) repeat fixed center center;
	z-index:-2;

	-moz-animation:move-twink-back 200s linear infinite;
	-ms-animation:move-twink-back 200s linear infinite;
	-o-animation:move-twink-back 200s linear infinite;
	-webkit-animation:move-twink-back 200s linear infinite;
	animation:move-twink-back 200s linear infinite;
	position:absolute;

}

}

/* Mobile HD */
@media screen and (min-width: 350px) and (max-width: 760px){
    .stars, .twinkling, .clouds {
	position:absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	width:100%;
	height:1600px;
	display:block;
}

.stars {
	background:#000 url(img/stars.png) repeat fixed center center;
	z-index:-3;
	position:absolute;
    background-size: 2000px ;
}

.twinkling{
	background:transparent url(img/twinkling.png) repeat fixed center center;
	z-index:-2;

	-moz-animation:move-twink-back 200s linear infinite;
	-ms-animation:move-twink-back 200s linear infinite;
	-o-animation:move-twink-back 200s linear infinite;
	-webkit-animation:move-twink-back 200s linear infinite;
	animation:move-twink-back 200s linear infinite;
	position:absolute;

}

}

/* Mobile LD */
@media screen and (max-width: 350px){
   .stars, .twinkling, .clouds {
	position:absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	width:100%;
	height:1600px;
	display:block;
}

.stars {
	background:#000 url(img/stars.png) repeat fixed center center;
	z-index:-3;
	position:absolute;
    background-size: 2000px ;
}

.twinkling{
	background:transparent url(img/twinkling.png) repeat fixed center center;
	z-index:-2;

	-moz-animation:move-twink-back 200s linear infinite;
	-ms-animation:move-twink-back 200s linear infinite;
	-o-animation:move-twink-back 200s linear infinite;
	-webkit-animation:move-twink-back 200s linear infinite;
	animation:move-twink-back 200s linear infinite;
	position:absolute;

}

}


/* ---- COUNTER ---- */
.counter{
	font-size:30px;
	color:white;
	vertical-align:middle;
	display:block;
	font-family:Jura,sans-serif;
	text-transform:uppercase;
}

.circle {
    background: rgba(255,255,255,.2);

	height:200px;
	width:200px;
    color: white;
    font-weight: bold;
    display: table;
    margin: 260px auto;
	border:2px solid rgba(100,100,255,.7);
	-webkit-box-shadow: 0px 0px 10px 10px rgba(150, 50, 150, 0.7);
	-moz-box-shadow:    0px 0px 10px 10px rgba(150, 50, 150, 0.7);
	box-shadow:         0px 0px 10px 10px rgba(150, 50, 150, 0.7);
}
.circle p {
    vertical-align: middle;
    display: table-cell;
}

@media (max-width:1024px){
	.counter{
		display:none;
	}
	.circle{
		display:none;
	}
	.circle p{
		display:none;
	}
}

/*@keyframes glow{
	0%{
		-webkit-box-shadow: 0px 0px 10px 10px rgba(150, 50, 150, 0.7);
		-moz-box-shadow:    0px 0px 10px 10px rgba(150, 50, 150, 0.7);
		box-shadow:         0px 0px 10px 10px rgba(150, 50, 150, 0.7);
		background: rgba(255,255,255,.2);
	}
	50%{
		-webkit-box-shadow: 0px 0px 10px 12px rgba(150, 50, 150, 0.7);
		-moz-box-shadow:    0px 0px 10px 12px rgba(150, 50, 150, 0.7);
		box-shadow:         0px 0px 10px 12px rgba(150, 50, 150, 0.7);
		background: rgba(255,255,255,.25);
	}
	100%{
		-webkit-box-shadow: 0px 0px 10px 10px rgba(150, 50, 150, 0.7);
		-moz-box-shadow:    0px 0px 10px 10px rgba(150, 50, 150, 0.7);
		box-shadow:         0px 0px 10px 10px rgba(150, 50, 150, 0.7);
		background: rgba(255,255,255,.2);
	}
}
/* ---- END COUNTER ---- */




    </style>


        <div class='container'>
        	<div class="stars  responsive-image" style="background-attachment:fixed"></div>
    			<div class="twinkling " style="background-attachment:fixed" ></div>
        <div class="clouds responsiv-image" style="background-attachment:fixed"></div>


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


                    <li class="selected"><a href="p1.php"><i class="fa fa-font"></i> Participants</a></li>

                    <li><a href="events.php"><i class="fa fa-newspaper-o"></i> Events</a></li>

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

           <div >
                <h1 align="center">Enter Participant Details</h1>
                <br />
                <div class="col-lg-12" >
                     <div align="right">
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>
                     </div>
                     <br />

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Participants </h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-grid1" ></div>
                     <div id="employee_table" style="overflow-x:auto;">
                          <table class="table table-bordered" class="table-responsive" class="container">
                               <tr>
                                    <th width="55%"> Name</th>
                                    <th width="15%">Edit</th>
                                    <th width="15%">View</th>
                                   <th width="15%">Delete</th>
                               </tr>
                               <?php
                               while($row = mysqli_fetch_array($result))
                               {
                               ?>
                               <tr>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>
                                    <td><input type="button" name="view" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                                   <td><input type="button" name="delete" value="Delete" id="<?php echo $row["id"]; ?>"class="btn btn-danger btn-xs delete"/></td>
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
 <div id="add_data_Modal" class="modal fade">
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Enter The Details</h4>
                </div>
                <div class="modal-body">
                     <form method="post" id="insert_form">
                          <label>Enter Name</label>
                          <input type="text" name="name" id="name" class="form-control" />
                          <br />
                          <label>Select Gender</label>
                          <select name="gender" id="gender" class="form-control">
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>
                          </select>
                          <br />

                          <label>Enter Phone-Num</label>
                          <input type="text" name="age" id="age" class="form-control" />
                          <br />
                          <input type="hidden" name="employee_id" id="employee_id" />
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                     </form>
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
      </div>
 </div>



 </div>

            </body>
 </html>
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



      $('#insert_form').on("submit", function(event){
           event.preventDefault();
           if($('#name').val() == "")
           {
                alert("Name is required");
           }


           else if($('#age').val() == '')
           {
                alert("phone number is required");
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

     $(document).on('click', '.delete', function(){
   var employee_id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{employee_id:employee_id},
     success:function(data){
      $('#insert_form')[0].reset();
       $('#employee_table').html(data);

     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });

 });
 </script>


     <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
     <script type="text/javascript">
 			$(document).ready(function () {
 				function TileAnimate() {
 					$(".tile-content").hover(function (event) {
 						event.stopPropagation();
 						if (!$(this).hasClass('.tile-content .content.one')) {
 							$(this).dequeue().stop().animate({ top: "-125px" });
 						}
 					}, function () {
 						$(this).addClass('animated').animate({ top: "0" }, "normal", "linear", function () {
 							$(this).removeClass('animated').dequeue();
 						});
 					});
 				}
 				TileAnimate();
 			});
 		</script>
