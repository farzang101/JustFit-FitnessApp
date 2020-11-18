<?php
	include "../php/config.php";

	// Check user login or not
	if(!isset($_SESSION['uname'])){
		header('Location: ../php/Login.php');
	}

	// logout
	if(isset($_POST['but_logout'])){
		session_destroy();
		header('Location: ../html/Home.html');
    }
    
    $session_value=(isset($_SESSION['uname']))?$_SESSION['uname']:'';
?>

<!DOCTYPE html >
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/UserSettings.css">
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>
		<?php include ('../html/Header.html'); ?>

        <div class="container">

            <h1 style="text-align: center"> Change Your User Settings  </h1>

            <h2> Change Your Password  </h2>
            <div id="message"></div>
            <div class = "displayBoxes">
                <input type="password" class="textbox" id="txt_oldpassword" name="txt_oldpassword" placeholder="Old Password" />
                <br><br>
                <input type="password" class="textbox" id="txt_newpwd" name="txt_newpwd" placeholder="New Password"/>
                <br><br>
                <input type="password" class="textbox" id="txt_renewpwd" name="txt_renewpwd" placeholder="Re-Type New Password"/>
            </div>

            <h2> Set your preferred exercise difficulty level  </h2>
            <div id="message1"></div>

            <select name="diffLevel" id="diffLevel">
                <option value=""></option>
                <option value="1">Low Intensity</option>
                <option value="2">Medium Intensity</option>
                <option value="3">High Intensity</option>
            </select>

            <h2> Set your preferred diet type  </h2>
            <div id="message2"></div>
            <select name="dietType" id="dietType">
                <option value=""></option>
                <option value="Omniverous">Omniverous</option>
                <option value="Vegan">Vegan</option>
                <option value="Vegetarian">Vegetarian</option>
                <option value="Carnivore">Carnivore</option>
                <option value="Paleo">Paleo</option>
                <option value="Pescatarian">Pescatarian</option>
            </select>

            <h2></h2>
            <div class = "displayBoxes">
                <input type="button" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </div>
        <br>
        <!-- Database Login Check Script -->
		<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/core.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/x64-core.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/sha3.min.js"></script>

        <!-- Database Login Check Script -->
        <script type="text/javascript"> 
            $(document).ready(function(){
   			$("#but_submit").click(function(){
                var username ='<?php echo $session_value;?>';
				var password = $("#txt_oldpassword").val().trim();

                var msg = "";
                
                if (username != "" && password != ""){
				var ciphertext = CryptoJS.SHA3(password, { outputLength: 224 });

   			        $.ajax({
   			            url:'../php/checkUser.php',
   			            type:'post',
   			            data:{username:username,password:(ciphertext.toString())},
   			            success:function(response){
   			                if(response == 1){
                    		}else{
                        	    msg = "Please resubmit";
                    		}
                            $("#message").html(msg);
   			            }
   			        });
                }

				var password = $("#txt_newpwd").val().trim();
                var passCheck = $("#txt_renewpwd").val().trim();
				   
                if( username != "" && password != "" && passCheck != ""){
				    var ciphertext = CryptoJS.SHA3(password, { outputLength: 224 });
                    var ciphertextCheck = CryptoJS.SHA3(passCheck, { outputLength: 224 });

   			        if( (ciphertext.toString()) != "" && (ciphertext.toString() == ciphertextCheck.toString())){
   			            $.ajax({
   			                url:'../php/changePwd.php',
   			                type:'post',
   			                data:{username:username,password:(ciphertext.toString())},
   			                success:function(response){
   			                    if(response == 1){
                                    msg = "Password changed successfully!";
                                } else if (response == 0) {
                            	    msg = "Invalid password1!";
                        		}
                                $("#message").html(msg);
   			                }
   			            });
   			        }
                }
                
                var difficulty = $("#diffLevel").val().trim();

                if( username != "" && difficulty != ""){
   			        $.ajax({
   			            url:'../php/changeDif.php',
   			            type:'post',
		                data:{username:username,difficulty:difficulty},
      		            success:function(response){
   		                if(response == 1){
                            msg = "Difficulty changed successfully!";
                        } else if (response == 0) {
                    	    msg = "Invalid difficulty!";
                		}
                            $("#message1").html(msg);
   			            }
   			        });
   			    }

                var dietType = $("#dietType").val().trim();

                if( username != "" && dietType != ""){
   			        $.ajax({
   			            url:'../php/changeDif.php',
   			            type:'post',
		                data:{username:username,dietType:dietType},
      		            success:function(response){
   		                if(response == 1){
                            msg = "Diet type changed successfully!";
                        } else if (response == 0) {
                    	    msg = "Invalid diet Type!";
                		}
                            $("#message2").html(msg);
   			            }
   			        });
   			    }
   			});
		});			
        </script> 
        <!-- Database Login Check Script End -->

        </div>

        <?php include ('../html/Footer.html'); ?>
    </body>
</html>