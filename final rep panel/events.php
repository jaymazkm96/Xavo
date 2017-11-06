
<?php   
 //load_data_select.php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 function fill_brand($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM genre";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["genre_id"].'">'.$row["genre_name"].'</option>';  
      }  
      return $output;  
 }  
 function fill_product($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM event";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="col-md-3">';  
           $output .= '<a href="s1.php"><div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["event_name"].'';  
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
    <link rel="stylesheet" href="css/flipclock.css" media='all'>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"  media='all'></script>
     <link rel="stylesheet/less" href="css/flipclock.less" media='all'>
     <script src="js/flipclock.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js" media='all'></script>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" media='all'/>
    <link rel="stylesheet" type="text/css" href="css/local.css"  media='all'/>

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
   h3{
            color:#BDBDBD;
            font-family: Jura;
            font-style: normal;
	font-variant: normal;
	font-weight: 500;
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
  
    </style>
         <div >
    	<div class="stars  responsive-image" style="background-attachment:fixed"></div>
			<div class="twinkling " style="background-attachment:fixed" ></div>
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
                     <li id="ab">
                    <br />
                  
                    <div class="message" style="color: #"><h3 align="center">Registration Countdown</h3></div>   
                      <br />
                    <div class="clock"></div>
<!--                      -->
                    </li> 
                    
                  
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
            
    
    
        </div>
  
 <script>  
 $(document).ready(function(){  
      $('#brand').change(function(){  
           var genre_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{genre_id:genre_id},  
                success:function(data){  
                     $('#show_product').html(data);  
                }  
           });  
      });  
 });  
 </script>  
<!-- TIMER -->
		<script type="text/javascript">
            
		var clock;
		
		$(document).ready(function() {
			// Grab the current date 
            var currentDate = new Date(); 
            // Set some date in the future. ***change to desired date***
            //var futureDate = new Date(2014, 11, 23, 6, 0, 0); 
            var futureDate = new Date(2017, 12, 31, 24, 0, 0); //fixed as per comments
            // Calculate the difference in seconds between the future and current date 
            var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000; 
            // Instantiate a coutdown FlipClock 
            clock = $('.clock').FlipClock(diff, { 
                clockFace: 'DailyCounter',
                countdown: true,
                autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('Registrations are closed')
		        	}
		        }
		    });
//				    
//		    clock.setTime(220880);
		    clock.setCountdown(true);
		    clock.start();

		});
	</script>
    
    <script type="text/javascript">
        $('head style[type="text/css"]').attr('type','text/less');
less.env = 'development';
less.refreshStyles();

// init clock
var clock = $('.clock').FlipClock();
    </script>
          </body>
</html>