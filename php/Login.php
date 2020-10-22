<?php
	include "../php/config.php";

	// Check user login or not
	if(isset($_SESSION['uname'])){
		header('Location: UserPortal.php');
	}
?>

<!DOCTYPE html>
<html lang="">
			<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/Login.css"> 
		<script src=p5.js></script>
        <div class= "style1">
			<a href="../html/About1.html">About</a>
			<a href="../html/Contact1.html">Contact</a>
			<a href=" ../php/SignUp.php"> Signup Please</a>
			<br>
	</div>
        <br>
	</head>

        <!-- Header End -->

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
			</div>
		<br>
		</div>
		<br>
        <!-- Login Form End -->

        <!-- Database Login Check Script -->
		<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/x64-core.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/sha3.min.js"></script>
   
        <script type="text/javascript"> 
            $(document).ready(function(){
   			$("#but_submit").click(function(){
   			    var username = $("#txt_uname").val().trim();
				var password = $("#txt_pwd").val().trim();
				   
				var ciphertext = CryptoJS.SHA3(password, { outputLength: 224 });

   			    if( username != "" && (ciphertext.toString()) != "" ){
   			        $.ajax({
   			            url:'checkUser.php',
   			            type:'post',
   			            data:{username:username,password:(ciphertext.toString())},
   			            success:function(response){
   			                var msg = "";
   			                if(response == 1){
                       			window.location.assign("UserPortal.php");
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


		<!-- Footer Begin -->
		<br>
		<center>
		<div class="rowBurn">
				<br>
					<h4>
						<br>
						<hr>
						<br>
						Live Workout Events was developed by CPSC-362 Group F. All Rights Reserved.
					</h4>
			</div>
		</center>
		<!-- Footer End -->
	</body>
</html>
