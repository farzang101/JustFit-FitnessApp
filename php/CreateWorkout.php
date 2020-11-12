<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/CreateWorkout.css">
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>
		<?php include ('../html/Header.html'); ?>
            <!-- <form method="post" action="/Tests/Post/">
                <fieldset>
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "Intensity"
                            value = "Low"
                            onclick="return check_intensity();">
                        Low
                        
                    </label>
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "Intensity"
                            value = "Medium"
                            onclick="return check_intensity();">
                        Medium   
                    </label>
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "Intensity"
                            value = "High"
                            onclick="return check_intensity();">
                        Highe
                        
                    </label>
                </fieldset>
            </form> -->

            <!-- <form action="/action_page.php">
                <p>Please select your gender:</p>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
              
                <br>  
              
                <p>Please select your age:</p>
                <input type="radio" id="age1" name="age" value="30">
                <label for="age1">0 - 30</label><br>
                <input type="radio" id="age2" name="age" value="60">
                <label for="age2">31 - 60</label><br>  
                <input type="radio" id="age3" name="age" value="100">
                <label for="age3">61 - 100</label><br><br>
                <input type="submit" value="Submit">
              </form> -->
            <form action="./Home.html">
                <fieldset>
                    Intensity: 
                    <input  type="radio" 
                            id="Low" 
                            name="intensity" 
                            value="Low">
                    <label for="Low">
                        Low
                    </label>
                    <input  type="radio" 
                            id="Medium" 
                            name="intensity" 
                            value="Medium">
                    <label for="Medium">
                        Medium
                    </label>
                    <input  type="radio" 
                            id="High" 
                            name="intensity" 
                            value="High">
                    <label for="High">
                        High
                    </label>
                
                    <br>  
                    <br>

                    Equipment:
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "equipment"
                            value = "Dumbells">
                            Dumbells
                        
                    </label>
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "equipment"
                            value = "Kettlebell">
                            Kettlebell   
                    </label>
                    <label class = "CB">
                        <input type = "checkbox"
                            name = "equipment"
                            value = "Barbell">
                            Barbell
                        
                    </label>

                    <br><br>

                    Type:
                    <input  type="radio" 
                            id="Core" 
                            name="Type" 
                            value="Core">
                    <label for="Core">
                        Core
                    </label>
                    <input  type="radio" 
                            id="Legs" 
                            name="Type" 
                            value="Legs">
                    <label for="Legs">
                        Legs
                    </label>
                    <input  type="radio" 
                            id="Arms" 
                            name="Type" 
                            value="Arms">
                    <label for="Arms">
                        Arms
                    </label>
        
                    <br><br>
                    Total Time (min):
                    <input  type = "text"
                            id = "time"
                            name = "time">


                    <br><br>
                    <input type="submit" value="Create Randomized Workout">
                
                </fieldset>
            </form>

   <!--      <script type="text/javascript">
        function check_intensity()
        {
            var checkboxes = document.getElementsByName("Intensity");
            var numberOfCheckedItems = 0;

            for(var i = 0; i < checkboxes.length; i++)  
            {  
                if(checkboxes[i].checked)  
                    numberOfCheckedItems++;  
            }  
            if(numberOfCheckedItems > 1)  
            {  
                alert("You can't select more than one Intensity");  
                return false;  
            }  
        }
        </script> -->


    </body>