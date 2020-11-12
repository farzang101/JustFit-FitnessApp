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

            <div class = "settings-heading">
                <h1 style="text-align: center"> Change Your User Settings  </h1>
            </div>

            <div class="container">

                <div id="div_signup">
                <h2 style="text-align: center"> Change Your Password  </h2>
                    <div id="message"></div>
                    <div>
                        <input type="password" class="textbox" id="txt_oldpassword" name="txt_oldpassword" placeholder="Old Password" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_newpwd" name="txt_newpwd" placeholder="New Password"/>
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_renewpwd" name="txt_renewpwd" placeholder="Re-Type New Password"/>
                    </div>
                    <div>
                        <input type="button" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
            
            </div>

            <div class="container">

                <div id="div_setDiff">
                <h2 style="text-align: center"> Set your preferred exercise difficulty level  </h2>

                    <div id="message1"></div>
                    <div>
                        <select name="diffLevel" id="diffLevel">
                            <option value="1">Low Intensity</option>
                            <option value="2">Medium Intensity</option>
                            <option value="3">High Intensity</option>
                        </select>
                    </div>

                </div>
            
            </div>

            <div class="container">

                <div id="div_setDiet">
                <h2 style="text-align: center"> Set your preferred diet type  </h2>

                    <div id="message2"></div>
                    <div>
                        <select name="dietType" id="dietType">
                            <option value="1">Omniverous</option>
                            <option value="2">Vegan</option>
                            <option value="3">Vegetarian</option>
                            <option value="4">Carnivore</option>
                            <option value="5">Paleo</option>
                            <option value="6">Pescatarian</option>
                        </select>
                    </div>

                </div>
            
            </div>

        </div>
    </body>
</html>