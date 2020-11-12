<<<<<<< HEAD
  
=======
<?php
	include "../php/config.php";

	// Check user login or not
	if(isset($_SESSION['uname'])){
		header('Location: ../php/UserPortal.php');
	}
?>

>>>>>>> f9139fa37826586fe74466ea4aa545b00fc34957
<!DOCTYPE html>
<html lang="">
			<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
		<link rel="stylesheet" href="../css/Login.css">
		<script src=p5.js></script>
        <div class= "style1">
			<a href="../html/About.html">About</a>
			<a href="../html/Contact.html">Contact</a>
			<br>
	</div>
        <br>
	</head>
	<body>
        <!-- Header End -->
        <br>
=======
		<link rel="stylesheet" href="../css/Login.css"> 
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>
		<?php include ('../html/Header.html'); ?>	
>>>>>>> f9139fa37826586fe74466ea4aa545b00fc34957
        <!-- Login Form Begin -->
        
        <div class="container">
            <h1>Login</h1>
			<div id="div_login">
				<div id="message"></div>
				<div class="uname">
					<input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
				</div>
				<div class="pass">
					<input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
				</div>
				<div class="sub">
					<input type="button" value="Submit" name="but_submit" id="but_submit" />
				</div>
				<a href=" ../php/SignUp.php">Don't have an account?</a>
			</div>
		<br>
		</div>
		<br>
        <!-- Login Form End -->
<br>
        <!-- Database Login Check Script -->
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
   
        <script type="text/javascript"> 
            $(document).ready(function(){
   			$("#but_submit").click(function(){
   			    var username = $("#txt_uname").val().trim();
   			    var password = $("#txt_pwd").val().trim();
			
   			    if( username != "" && password != "" ){
   			        $.ajax({
   			            url:'../php/checkUser.php',
   			            type:'post',
   			            data:{username:username,password:password},
   			            success:function(response){
   			                var msg = "";
   			                if(response == 1){
                       			window.location.assign("../php/UserPortal.php");
                    		}else{
                        	msg = "Invalid username and password!";
                    		}
                    		$("#message").html(msg);
   			            }
   			        });
   			    }
   			});
		});			
        </script> 
        <!-- Database Login Check Script End -->

<<<<<<< HEAD
		<br>
        <!-- Footer Begin -->
		<center>
			
			
			<div class="rowBurn">
				<br>
					<h4>
                        <hr class="hr">
						Live Workout Events was developed by CPSC-362 Group F. All Rights Reserved.
					</h4>
			</div>
		</center>
		<!-- Footer End -->
=======

		<?php include ('../html/Footer.html'); ?>
>>>>>>> f9139fa37826586fe74466ea4aa545b00fc34957
	</body>
</html>
