
<?php 

include("connect.php");
	include("functions.php");


$q1=isset($_SESSION['q1']) ? $_SESSION['q1'] : '';
$q2=isset($_SESSION['q2']) ? $_SESSION['q2'] : '';
$q3=isset($_SESSION['q3']) ? $_SESSION['q3'] : '';
$q4=isset($_SESSION['q4']) ? $_SESSION['q4'] : '';
$q5=isset($_SESSION['q5']) ? $_SESSION['q5'] : '';


	$error = "";
	if(isset($_POST['submit']))
	{
        $name =isset($_SESSION['name']) ? $_SESSION['name'] : '';
		//$name = mysqli_real_escape_string($con, $_POST['name']);
		$Uname = mysqli_real_escape_string($con, isset($_POST['Uname']) ? $_POST['Uname'] : '');
	    $email = mysqli_real_escape_string($con, $_POST['email']);
	    $password = $_POST['password'];
	    $passwordConfirm = $_POST['passwordConfirm'];
	    $contact_no= isset($_POST['contact_no']) ? $_POST['contact_no'] : '';   
		$image = $_FILES['image']['name'];
	    $tmp_image = $_FILES['image']['tmp_name'];
	    $imageSize = $_FILES['image']['size'];
        
//         $q1=$_POST['question1'];
//        $q2=isset($_POST['question2'])? $_POST['question2'] : '';
//        $q3=isset($_POST['question3'])? implode(',',$_POST['question3']) : '';
//        $q4=isset($_POST['question4'])? implode(',',$_POST['question4']) : '';
//        $q5=isset($_POST['question5'])? implode(',',$_POST['question5']) : '';
        
//         if(isset($_POST['question1'])){
//            $q1=implode(',', $_POST['question1']);}
//        if(isset($_POST['question2'])){
//            $q2=implode(',', $_POST['question2']);}
//        if(isset($_POST['question3'])){
//            $q3=implode(',', $_POST['question3']);}
//        if(isset($_POST['question4'])){
//            $q4=implode(',', $_POST['question4']);}
//        if(isset($_POST['question5'])){
//            $q5=implode(',', $_POST['question5']);}
		
		$conditions = isset($_POST['conditions']);
		
		
		
		
		if(strlen($name) < 3)
		{
			$error = "Name is too short";
		}
		

		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error = "Please enter valid email address";
		}
		else if(email_exists($email, $con))
		{
			$error = "Someone is already registered with this email";
		}
		else if(strlen($password) < 8)
		{
			$error = "Password must be greater than 8 characters";
		}
		else if($password !== $passwordConfirm)
		{
			$error = "Password does not match";
		}
		else if($image == "")
		{
			$error = "Please upload your image";
		}
		else if($imageSize > 524288)
		{
			$error = "Image size must be less than 500 kb";
		}			
		else if(!$conditions)
		{
			$error = "You must be agree with the terms and conditions";
		}
		else
		{	
            // echo $q1."<br />".$q2."<br />".$q3."<br />".$q4."<br />".$q5;
                $password = password_hash($password, PASSWORD_DEFAULT);
				
				$imageExt = explode(".", $image);
				$imageExtension = $imageExt[1];
				
				if($imageExtension == "PNG" || $imageExtension == "png" || $imageExtension == "JPG" || $imageExtension == "jpg")
				{
					$image = rand(0, 100000).rand(0, 100000).rand(0, 100000).time().".".$imageExtension;
				
					$insertQuery = "INSERT INTO users(name, username, password, email, contact_no, image, q1, q2, q3, q4, q5) VALUES ('$name','$Uname','$password','$email','$contact_no','$image','$q1','$q2','$q3','$q4','$q5')";
					if(mysqli_query($con, $insertQuery))
					{
                        if(move_uploaded_file($tmp_image,"images/$image"))
						{
							$error = "You are successfully registered";
						}
						else
						{
							$error = "Image is not uploaded";
						}
					}
                    else{
                       echo "Error occured while connecting with database ".mysqli_error($con);
                    }
				 }
				else
				{
					$error = "File must be an image";
				}
		}
							
	}


?>

<!DOCTYPE html>
 
       
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
		<meta name="description" content="Xavotsav 2018 Official Site : Sounds of the Multiverse">
		<meta name="author" content="Kalyan Majumdar">

		<title>Xavotsav 2018</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		
		<link href="css/contactTiles.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Jura:300,400" rel="stylesheet" type="text/css">
        
		
        
        
    <script type="text/javascript" src="assets/fb.js"></script>
        
        <script src="js/jquery.js"></script>
                <script type="text/javascript">
            $(document).ready(function(){
answers = new Object();
$('.option').change(function(){
    var answer = ($(this).attr('value'))
    var question = ($(this).attr('name'))
    answers[question] = answer
})
var item1 = document.getElementById('questions');

var totalQuestions = $('.questions').size();
var currentQuestion = 0;
$questions = $('.questions');
$questions.hide();
$($questions.get(currentQuestion)).fadeIn();
$('#next').click(function(){
    $($questions.get(currentQuestion)).fadeOut(function(){
        currentQuestion = currentQuestion + 1;
        if(currentQuestion == totalQuestions){
               var result = sum_values()
               //do stuff with the result
              // alert(result);
        }else{
        $($questions.get(currentQuestion)).fadeIn();
        }
    });

});
           
        
});


function sum_values(){
var the_sum = 0;
for (questions in answers){
    the_sum = the_sum+parseInt(answers[questions]);
}

     $.ajax({
         url:'script.php',
            type:"POST",
            data:{
                result:JSON.stringify(answers)
            },
         
                     success: function(data)         
  {
    $('#quizModal').modal('hide');
  } 
        });
    return the_sum
}
             
        </script>
        <style>
            #submit_form{
                background-color:rgba(0, 0, 0, 0.2);
               
            }
            .theButtons
{
	width:222px;
	height:40px;
	background-color:#335495;
	border:2px solid #335495;
	font-weight:bold;
	font-family:tahoma;
	color:#FFF;
	border-radius:2px;
}
            #next{
                width:222px;
	height:40px;
	background-color:#289e16;
	border:2px solid #289e16;
	font-weight:bold;
	font-family:tahoma;
	color:#FFF;
	border-radius:2px;
            }
            
            @media screen and (min-width: 1024px){
                .questions{
                    display:block;
                    text-align: justify;
                    width:600px;
                    margin-left:auto;
                    margin-right: auto;
                }
            }
            @media screen and (min-width: 768px) and (max-width: 1024px){
                .questions{
                    display:block;
                    text-align: justify;
                    width:100%;
                    margin-left:auto;
                    margin-right: auto;
                }
            }
            @media screen and (min-width: 760px) and (max-width: 980px){
                .questions{
                    display:block;
                    text-align: justify;
                    width:100%;
                    margin-left:auto;
                    margin-right: auto;
                }
            }
            @media screen and (min-width: 350px) and (max-width: 760px){
                .questions{
                    display:block;
                    text-align: justify;
                    width:100%;
                    margin-left:auto;
                    margin-right: auto;
                }
            }
            @media screen and (max-width: 350px){
                .questions{
                    display:block;
                    text-align: justify;
                    width:100%;
                    margin-left:auto;
                    margin-right: auto;
                }
            }
        </style>
	</head>
<?php
     if($error !=""){ 
                echo '<script type="text/javascript">alert("'.$error.'");</script>'; 
            } 
    ?>
	<body id="page-top" class="events" onload="myFunction();" style="overflow-x:hidden;">
		<div id="loader"></div>
		<!-- Navigation -->
		<div id="totality" class="animate-bottom" style="overflow-x:hidden;">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="index.html#page-top"><img src="img/others/xavotextsmall.png" style="width:100px;margin-top:-4px;@media (max-width:768px){margin-top:0px;}"/></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="#page-top">Event Details</a>
						</li>
						<li>
							<a class="page-scroll" href="team.html#page-top">Team</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		
		<header>
			<div id='stars'></div>
			<div id='stars2'></div>
			<div id='stars3'></div>
			<div id='title'>
				<span>
					Registration Form
				</span>
			</div>
		</header>
		
		<center>
		<div class="rule"></div>
            <section class="team">
		<div class="container" id="formDiv">
            
            
            <form class="well form-horizontal" action="form.php" method="post"  id="submit_form" enctype="multipart/form-data">
                <fieldset>
                    <br />
                    <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>  
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="name" placeholder="<?php if(isset($_SESSION['name'])){echo $_SESSION['name'];?><?php }?>" class="form-control inputFields"  type="text" >
                            </div>
                            </div>
                    </div>
                    <div class="form-group"> 
  <label class="col-md-4 control-label">Department</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="department" class="form-control selectpicker" id="department">
      <option value="">Select your Department</option>
      <option>CMSA</option>
      <option>MTMA</option>
      <option >BCOM MORn</option>
      <option >PEB</option>
        <option >BASO</option>
    </select>
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="Uname" placeholder="Username" class="form-control" id="Uname" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password" placeholder="Password" class="form-control inputFields" id="password" type="password">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="passwordConfirm" placeholder="Confirm Password" class="form-control" id="passwordConfirm" type="password">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control" id="email" type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="(639)" class="form-control" id="contact_no" type="text">
    </div>
  </div>
</div>

                    <div class="form-group">
  <label class="col-md-4 control-label">Take a Quiz</label>  
    <div class="col-md-4 inputGroupContainer">
    
        <p style="display: block;margin-left: auto;
  margin-right: auto;">Help us know you <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Click Here</button> to start.</p>
        
    
  </div>
</div>
                    <!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Your Image</label>  
  <div class="col-md-4 inputGroupContainer">
  <div>
 
  <input  type="file" name="image" id="image" />  
      </div>  
      <br />  
<!--  <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" style="float:left;" />-->
    
  </div>
</div>
                    
  <input type="checkbox" name="conditions" />
				<label>I agree with terms and conditions</label><br/><br/>       
                                     
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
<!--    <button type="submit"  id="submit" class="btn btn-warning" style="float:left;">Submit  <span class="glyphicon glyphicon-send"></span></button>-->
      <input type="submit"  class="theButtons"  name="submit" />
  </div>
</div>

 <!-- Modal -->
<div id="quizModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Quiz Title</h4>
        
         
        
      </div>
      <div class="modal-body" >
        <div>
    <h1>What Type of Date Are You? (Dude Edition)</h1>
</div>
<div class="questions" id="questions">
    <p>1. You see a girl waiting at the bus stop. She is exactly your type. How do you get her number?</p>
    <form style="text-align: justified" class="options" action="form.php" method="post">
        <input style="text-align: justified" class="option" type="radio" name="question1" value=4>You walk right up to her, strike up a conversation, and ask for her number<br>
        <input style="text-align: left" class="option" type="radio" name="question1" value=3>You wait a few days until you get the courage to go and talk to her<br>
        <input style="text-align: left" class="option" type="radio" name="question1" value=2>You tell one of your mutual friends that you like her<br>
        <input style="text-align: left" class="option" type="radio" name="question1" value=1>You wait for her to come to you<br>
        
        </form>
</div>
<div class="container questions" id="questions">
    <p>2. You guys decide to go out on a date. Where do you decide to take her?</p>
    <form class="options" action="form.php" method="post">
        <input class="option" type="radio" name="question2" value=4>You take her out for a short coffee and talk about life and relationships<br>
        <input class="option" type="radio" name="question2" value=3>You take her out on a creative date and ask her questions about her life and you respond in kind, tried-and-true interview-style<br>
        <input class="option" type="radio" name="question2" value=2>You take her out to a nice restaurant and dress in your best clothes. You ask the same questions as above<br>
        <input class="option" type="radio" name="question2" value=1>You take her to the best restaurant and hope that your clothes does most of the talking. If not, you've got great stories to tell up your sleeves<br>
    </form>
</div>
<div class="questions" id="questions">
    <p>3. You think you had a great first date. What do you do between now and your second date?</p>
    <form class="options" action="form.php" method="post">
        <input class="option" type="radio" name="question3" value=4>You send her a text telling her you'll have out again soon. No big deal. Another date with another girl, coming up!<br>
        <input class="option" type="radio" name="question3" value=3>You send her a text telling her how much fun you had and can't wait for the next date.<br>
        <input class="option" type="radio" name="question3" value=2>In addition to doing above, you call her and ask her how she thinks the date went and when/where the next date is<br>
        <input class="option" type="radio" name="question3" value=1>In addition to doing above, you think about how lucky you are for finally finding an amazing girl. You hope to start a relationship ASAP<br>
    </form>
</div>
<div class="questions" id="questions">
    <p>4. Crap! You just remembered you have a huge project due this Friday. This might be a problem. How many dates do you have this week?</p>
    <form class="options" action="form.php" method="post">
        <input class="option" type="radio" name="question4" value=4>More than 5. You're going to have to cancel one of them.<br>
        <input class="option" type="radio" name="question4" value=3>You have a few dates in the pipeline, just testing the waters. You can still make the dates<br>
        <input class="option" type="radio" name="question4" value=2>You have one date because you're a one woman kind of guy<br>
        <input class="option" type="radio" name="question4" value=1>You have one date. You don't date much, in general.<br>
    </form>
</div>
<div class="questions" id="questions">
    <p>5. Finally, how spontaneous are you?</p>
    <form class="options" action="form.php" method="post">
        <input class="option" type="radio" name="question5" value=4>YOLO is your middle name. Your amusement > all else<br>
        <input class="option" type="radio" name="question5" value=3>You may not be the most wild or crazy person, but you are definitely down for good times<br>
        <input class="option" type="radio" name="question5" value=2>You like to have fun as much as the next guy, as long as things don't get too out of hand<br>
        <input class="option" type="radio" name="question5" value=1>I like to plan ahead, no matter what the situation, work or play<br>
       
    </form>
</div>
        </div>
    <br>
    <input type="button" id='next' value="Next" onlick="sum_values()">
        <br />
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    
  </div>
</div>
        </div>
   

                </fieldset>
            </form>
            </div>
            </section>
		</center>
	
		<!-- Contact Section -->
		<section id="contact" style="background-attachment:fixed;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center" style="text-decoration:none;text-transform:uppercase;letter-spacing:1px;font-weight:400;font-family:'Jura',sans-serif;color:#CCC;">
						<h5>Contact</h5>
						<p>e-mail : <a href="mailto:gsec@sxccal.edu">gsec@sxccal.edu</a></p>
						<p>phone : <a href="tel:+919038634869">+91 90386 34869</a></p>
						<h6>For events :</h6>
						<p>e-mail : <a href="mailto:eventsxavo18@gmail.com?subject=Ref&mdashXavotsav%20Website">eventsxavo18@gmail.com</a></p>
						<h6>For PR :</h6>
						<p>e-mail : <a href="mailto:pr.xavo18@gmail.com?subject=Ref&mdashXavotsav%20Website">pr.xavo18@gmail.com</a></p>
					</div>
					
					<div class="col-md-4" id="googleMap">
					</div>
					
					<div class="col-md-4 text-center" style="text-decoration:none;text-transform:uppercase;letter-spacing:1px;font-weight:400;font-family:'Jura',sans-serif;color:#CCC;">
						<h5>Useful Links:</h5>
						<p><a href="#events">Event Details</a></p>
						<p><a href="#college">College Details</a></p>
						<p><a href="#login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Log-in</a></p>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<span class="copyright">Copyright &copy; SXCSC 2017-18</span>
					</div>
					<div class="col-md-4">
						<ul class="list-inline social-buttons">
							<li><a href="https://www.facebook.com/Xavotsav/" alt="Connect with us on Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCUIc-Qc9Jnsh1oE8ZEITsHA" alt="SXCSC on YouTube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
							<li><a href="https://www.instagram.com/sxcsc/" alt="SXCSC on Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://twitter.com/gensec2016" alt="SXCXC Twitter Handle" target="_blank"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="list-inline quicklinks">
							<li>Designed and Developed by Team SXCSC
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		
		</div>
		<!-- jQuery -->
		

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Plugin JavaScript -->
		
		<script src="js/classie.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="js/spacex.js"></script>
		
		<!-- LOADER -->
		<script>
			var myVar;

			function myFunction() {
				myVar = setTimeout(showPage, 200);
			}

			function showPage() {
				document.getElementById("loader").style.display = "none";
				document.getElementById("totality").style.display = "block";
			}
		</script>
				
		
		<!-- Google Maps API -->
		<script type="text/javascript">
			function myMap() {
				var location = new google.maps.LatLng(22.548844,88.355837);

				var mapCanvas = document.getElementById('googleMap');
				
				var mapOptions = {
					center:new google.maps.LatLng(22.557821,88.345999),
					zoom:14,
					panControl: false,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
					
				var map = new google.maps.Map(mapCanvas,mapOptions);
				
								
				var marker = new google.maps.Marker({
					position: location,
					map: map,
					title: "St. Xavier's College (Autonomous), Kolkata"
				});
				
				$('section#contact').on('load', function(){
					google.maps.event.trigger(map, 'resize');

					// Recenter the map now that it's been redrawn               
					var reCenter = new google.maps.LatLng(22.548844,88.355837);
					map.setCenter(reCenter);
				});
			}
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK_nsGp6o6i0sYC73mB6BHzlGXVynPNxU&callback=myMap" type="text/javascript"></script>

	</body>
</html>
