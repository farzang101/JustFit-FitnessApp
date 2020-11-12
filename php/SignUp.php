<?php
	include "../php/config.php";

	// Check user login or not
	if(isset($_SESSION['uname'])){
		header('Location: ../php/UserPortal.php');
	}
?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<link rel="stylesheet" href="../css/style.css"> -->
	</head>
	<body>
        <!-- Header Begin -->
        <center>
            <div class="rowBurn">
                <div class="column">
                    <br>
                        <h3>
                            Live Workout Events
                        </h3>
                    </br>
                </div>
                <div class="column">
                    <br>
                        <h3>
                            <a href="../html/Home.html">Home</a>
                            <a href="../html/About.html">About</a>
                            <a href="../html/Contact.html">Contact</a>
                        </h3>
                    </br>
                </div>
            </div>
        </center>
        <!-- Header End -->

        <!-- Login Form Begin -->
        <div class="container">

			<div id="div_signup">
				<h1>Sign-Up</h1>
				<div id="message"></div>
				<div>
					<input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
				</div>
				<div>
					<input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
                </div>
                <div>
					<input type="password" class="textbox" id="txt_pwdre" name="txt_pwd" placeholder="Re-Type Password"/>
				</div>
				<div>
					<input type="button" value="Submit" name="but_submit" id="but_submit" />
				</div>
			</div>
		
		</div>
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
                var passCheck = $("#txt_pwdre").val().trim();
				   
				var ciphertext = CryptoJS.SHA3(password, { outputLength: 224 });
                var ciphertextCheck = CryptoJS.SHA3(passCheck, { outputLength: 224 });

   			    if( username != "" && (ciphertext.toString()) != "" && (ciphertext.toString() == ciphertextCheck.toString())){
   			        $.ajax({
   			            url:'../php/addUser.php',
   			            type:'post',
   			            data:{username:username,password:(ciphertext.toString())},
   			            success:function(response){
   			                var msg = "";
   			                if(response == 1){
                       			window.location.assign("../php/UserPortal.php");
                    		}else if (response == 2) {
                                msg = "Username already in use!";
                            } else {
                        	    msg = "Invalid password!";
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
		<center>
			<div class="rowBurn">
				<br>
					<h4>
						Live Workout Events was developed by CPSC-362 Group F. All Rights Reserved.
					</h4>
				</br>
			</div>
		</center>
		<!-- Footer End -->
	</body>
</html>