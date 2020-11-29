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

<!DOCTYPE html>
<html lang="">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/Exercise.css">
		<link rel="stylesheet" href="../css/HeaderFooter.css">
	</head>
	<body>
        <?php 
        if(!isset($_SESSION['uname'])){
            include ('../html/Header.html');
        } else {
            include ('../html/HeaderLoggedIn.html');
        } ?>
		<br>		
		<div class="Exercise1">
			<h2>
				<br>
					<p style="color: blueviolet; margin-left: 3%; font-weight: 600; font-size: 16px">Name: Plank</p>
					<p style="color: white; font-weight: 600; font-size: 16px">Description:</p> <p style="color: blanchedalmond; font-weight: 600; font-size: 16px; text-align: center;">Rest your forearms on the floor, with your elbows directly underneath your shoulders and hands facing forward so that your arms are parallel. Extend your legs out behind you and rest your toes on the floor. Your body should form one straight line from your shoulders to your heels. Squeeze your entire core, your glutes, and your quads, and tuck your butt under a little to keep your lower back straight. Make sure you are not dropping your hips or hiking your butt up high toward the ceiling. Position your head so that your neck is in a neutral position and your gaze is on your hands. Hold this position.
                </p>
					<p style="color: red;font-weight: 1000;">Intensity: Moderate</p>

					<p style="color: burlywood;font-weight: 1000">Equipment: None</p>
    
					<p style="color: greenyellow;font-weight: 1000">Type: Core </p>
					<p style="color: mediumvioletred;font-weight: 1000"> Popularity: </p>
			</h2>
		</div>
		<hr>
		<div class="Exercise2">
			<h2>
                <br>
					<p style="color: rgb(124,252,0); margin-left: 3%; font-weight: 600; font-size: 16px;">Name: Butterfly sit-up</p>
				    <p style="color: white; font-weight: 600; font-size: 16px">Description:</p><p style="color: #1E90FF; font-weight: 600; font-size: 16px; text-align: center;">
                        Lie face up with the soles of your feet together, knees bent out to sides. Reach your arms overhead. This is starting position. Using your core, roll your body up until you are sitting upright. Reach forward to touch your toes. That's 1 rep. Slowly lower back down to starting position and continue immediately into the next rep.</p>	
                <p style="color: #1E90FF;font-weight: 1000;">Intensity: Moderate</p>
                <p style="color: #00BFFF;font-weight: 1000;">Equipment: None</p>
                <p style="color: #7FFFD4;font-weight: 1000;">Type: Core</p>

                <p style="color: #32CD32;font-weight: 1000;">Popularity:</p>
                <br>
			</h2>
		</div>
		<hr>

		<div class="Exercise3">
			<h2>
				<br>
					<p style="color: rgb(124,252,0); margin-left: 3%; font-weight: 600; font-size: 16px;">Name: Dead Bug
                </p>
					<p style="color: white; font-weight: 600; font-size: 16px">Description:</p><p style="color: #00FFFF; font-weight: 600; font-size: 16px; text-align: center;">
                Lie face up with your arms extended toward the ceiling and your legs in a tabletop position (knees bent 90 degrees and stacked over your hips). This is starting position. Slowly extend your right leg out straight, while simultaneously dropping your left arm overhead. Keep both a few inches from the ground. Squeeze your butt and keep your core engaged the entire time, lower back pressed into the floor. Bring your arm and leg back to the starting position. Repeat on the other side, extending your left leg and your right arm.</p>
				<br>
					<p style="color: #FF8C00;font-weight: 1000;">Intensity: Moderate
				<br>
					<p style="color: #FFD700;font-weight: 1000;">Equipment: None
				<br>
					<p style="color: #FFFFE0;font-weight: 1000;">Type: Core
				<br>
					<p style="color: #FFE4B5;font-weight: 1000;">Popularity:
			</h2>
		</div>
		<hr>

		<div class="Exercise4">
			<h2>
				<br>
                <p style="color: rgb(124,252,0); margin-left: 3%; font-weight: 600; font-size: 16px;">Name: High Boat to Low Boat</p>
                <p style="color: white; font-weight: 600; font-size: 16px">Description:</p> <p style="color: #0000FF; font-weight: 600; font-size: 16px; text-align: center;">Sit up straight with your legs bent, feet flat on the floor. Keeping your legs together, slowly lift them off the floor until they form a 45-degree angle to your torso. Engage your entire core, keep your back flat, and balance on your tailbone. You can keep your knees bent (as pictured) or straighten them out for more of a challenge. Reach your arms straight out in front of you, parallel to the floor. If you feel that you need some extra support, place your hands on the floor, underneath your hips. This is High Boat. Hold here for three deep breaths. Then, lower your legs, straightening them out, while also lowering your upper body. Both your shoulder blades and legs should hover a few inches off the floor. If that is too challenging, keep them slightly higher off the floor and work toward bringing them lower and lower. This is Low Boat. Hold for one breath, and then lift your legs and torso back to High Boat.	</p>
                <p style="color: #FF00FF;font-weight: 1000";>Intensity: </p>
                <p style="color: #BA55D3; font-weight: 1000;">Equipment: None
                <p style="color: 	#9370DB; font-weight: 1000";>Type: Core</p>
                <p style="color: 	#4B0082;font-weight: 2000; ">Popularity:</p>
			</h2>
		</div>
		<hr>

		<div class="Exercise5">
			<h2>
                <p style="color:#FF1493 ; margin-left: 3%; font-weight: 600; font-size: 16px;">Name: Jackknife</p>
				<p style="color: white; font-weight: 600; font-size: 16px">Description:</p> <p style="color: #1E90FF; font-weight: 600; font-size: 16px; text-align: center;">Lie face up with your legs extended and arms extended overhead on the floor, keeping them close to your ears. Contract your abs to press your low back into ground. This is starting position. Point your toes, squeeze your thighs together, squeeze your glutes, and simultaneously lift your legs and upper back off the ground, reaching your hands forward to meet your feet so that your body forms a V. Keep your core engaged as you slowly lower to return to starting position.
            </p>
                <p style="color: #FF00FF;font-weight: 1000";>Intensity: </p>
				 <p style="color: #FFFAFA;font-weight: 1000";>Equipment: None</p>
                <p style="color: #F5FFFA;font-weight: 1000";>Type: Core</p>
                <p style="color: #FFE4E1;font-weight: 1000";>Popularity:</p>
			</h2>
		</div>
		<hr>

		<div class="Exercise6">
			<h2>
                <br>
                <p style="color:#FF1493 ; margin-left: 3%; font-weight: 600; font-size: 16px;">	Name: C-Curve </p>
				<p style="color: white; font-weight: 600; font-size: 16px">Description:</p><p style="color: #F4A460; font-weight: 600; font-size: 16px; text-align: center;"> Sit on your tailbone with your knees bent and feet flat on the floor. Hold onto each leg just above the knee. Round your spine, tuck your tailbone, and begin to lower your torso back, as if you were lowering back after a sit-up. About halfway (like in the photo above), stop and hold. Keep your entire core and your quads engaged. For an extra challenge, let go of your legs and just hold your arms out in front of you.
            </p>
            <p style="color: #A52A2A;font-weight: 1000";>Intensity: </p>
            <p style="color: #FF00FF;font-weight: 1000";>Equipment: None</p>
            <p style="color: #D2691E;font-weight: 1000";>Type: Core</p>
            <p style="color: #F4A460;font-weight: 1000";>Popularity:</p>
			</h2>
		</div>
		<hr>

		<div class="Exercise7">
			<h2>
				<br>
                <p style="color:#FF1493 ; margin-left: 3%; font-weight: 600; font-size: 16px;">Name: Leg Raise </p>
					<p style="color: white; font-weight: 600; font-size: 16px">Description:</p> <p style="color: #FFFAF0; font-weight: 600; font-size: 16px; text-align: center;"> Lie face up with your legs extended and hands at your sides or tucked underneath your hips for extra support. Slowly raise your legs, keeping them together and as straight as possible, until the soles of your shoes are facing the ceiling. Then, slowly lower your legs back down. Don’t let your feet touch the floor; instead, keep them hovering a few inches off. That's 1 rep. As you do this move, make sure to keep your lower back flat on the floor. If you're having a tough time doing that, don't lower your legs as far.
            </p>
				<br>
					 <p style="color: #A52A2A;font-weight: 1000";>Intensity: 
				<br>
            <p style="color: #A52A2A;font-weight: 1000";>	Equipment: None</p>
				 <p style="color: #A52A2A;font-weight: 1000";>	Type: Core
            </p>
				 <p style="color: #A52A2A;font-weight: 1000";>	Popularity:
            </p>
			</h2>
		</div>
		<hr>

		<div class="Exercise8">
			<h2>
				<br>
                <p style="color:#FF1493 ; margin-left: 3%; font-weight: 600; font-size: 16px;">	Name: Row Your Boat</p>
				</br>
				<br>
					<p style="color: white; font-weight: 600; font-size: 16px">Description:</p> <p style="color: #1E90FF; font-weight: 600; font-size: 16px; text-align: center;">Sit up straight with your legs bent, feet flat on the floor. Keeping your legs together, slowly lift them off the floor until they form a 45-degree angle to your torso. Engage your entire core, keep your back flat, and balance on your tailbone. You can keep your knees bent (as pictured) or straighten them out for more of a challenge. Reach your arms straight out in front of you, parallel to the floor. If you feel that you need some extra support, place your hands on the floor, underneath your hips. This is High Boat. From here, clasp your hands in front of you and twist at the waist toward one side, swinging your arms to the same side as if you had an oar in your hands and you were rowing. Immediately twist to the opposite side and repeat the same arm movement. Continue alternating sides.
            </p>
				<br>
				 <p style="color: #A52A2A;font-weight: 1000";>	Intensity: 
            </p>
				 <p style="color: #A52A2A;font-weight: 1000";>	Equipment: None
            </p>
				 <p style="color: #A52A2A;font-weight: 1000";>	Type: Core
            </p>
				 <p style="color: #A52A2A;font-weight: 1000";>	Popularity:
            </p>
			</h2>
		</div>
		<hr>

		<div class="Exercise9">
			<h2>
				<br>
					Name: Hip Dip
				</br>
				<br>
					Description: Start in a forearm plank with your forearms on the floor, elbows directly underneath your shoulders, hands facing forward so that your arms are parallel, and legs extended behind you. Tuck your tailbone and engage your core, butt, and quads. Rotate your hips to the left side and tap the floor. Repeat on the right side. Continue alternating sides.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise10">
			<h2>
				<br>
					Name: V-Sit
				</br>
				<br>
					Description: The V-sit ab exercise builds core strength by working multiple areas of the core at the same time, while also challenging your balance. In this exercise, you sit with legs extended and torso off the ground, your body forming a V shape. If you are a beginner you can modify it to use a bit of assistance from your hands, or do it with bent legs. Intermediate exercisers can add this exercise to abdominal and core workouts.
				</br>
				<br>
					Intensity: Moderate
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise11">
			<h2>
				<br>
					Name: Oblique Twists
				</br>
				<br>
				Description: The seated oblique twist exercise, sometimes called the Russian twist, is a very effective exercise for strengthening the abdominal muscles. Using a medicine ball in the exercise adds a challenge to the workout. You can do this exercise as part of a core strengthening workout along with exercises such as the plank, crunch, and bridge. It can be also part of a total body strengthening workout and is especially good if you are in a sport where you throw a ball or swing a club.	
				</br>
				<br>
					Intensity: Moderate
				</br>
				<br>
					Equipment: Medicine ball
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise12">
			<h2>
				<br>
					Name: Supermans
				</br>
				<br>
				Description: The alternating superman exercise is a back extension that is also one of the most popular ab exercises. It has been known to increase ab strength and can be an important part of a regular core strength regimen.1 The flexibility and ease of the exercise can also help you work smaller ab muscles that the usual core exercises do not. It is a good addition to a core strengthening workout.
				</br>
				<br>
					Intensity: Low
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise13">
			<h2>
				<br>
					Name: Elbows-to-Knees Crunch
				</br>
				<br>
					Description: Start lying on your back with knees bent, feet on the ground, hands behind your head in a diamond shape. Simultaneously lift your knees up toward your chest and crunch up toward your waist, tapping your knees to elbows. Hold for three counts, lower down to start for one rep.
				</br>
				<br>
					Intensity: Moderate
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise14">
			<h2>
				<br>
					Name: Hollow Body Full Extension
				</br>
				<br>
					Description: Start lying on your back with your legs straight, and your arms extended overhead. Draw your belly button in toward your spine, pressing your lower back down to the floor, and keeping your knees together—lift your legs and arms a few inches off of the floor. Hold
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise15">
			<h2>
				<br>
					Name: Mountain Climber
				</br>
				<br>
					Description: Start in a high plank position with shoulders over wrists. Keep your elbows locked and your body in a straight line, while you lift your foot off the floor and drive your knee into your chest for one rep. Repeat quickly with the opposite leg.
				</br>
				<br>
					Intensity: Low
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise16">
			<h2>
				<br>
					Name: Box Pistol Squat
				</br>
				<br>
					Description: With a bench or chair behind you, balance on your right leg with your left foot lifted out in front of you, knee straight and your hip angle as close to 90° as possible. Keeping your balance, slowly lower yourself down until your butt hits the back of the item below. Press back up to stand for one rep. Do 20 reps on one leg before switching to repeat on opposite side. The lower the item you choose, the harder this will be—make it difficult, but not
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise17">
			<h2>
				<br>
					Name: Elevator lift
				</br>
				<br>
					Description: Start in a high plank. Drive your right knee to your right wrist, then glide it up the arm as high as you can. Return to start. Continue for 30 seconds; repeat on the opposite side.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise18">
			<h2>
				<br>
					Name: Alternating Single-Arm Hold Leg Raises
				</br>
				<br>
					Description: Start lying on your back with arms and legs straight up, holding the dumbbell by the handle with your right hand, palm facing in. Keeping your arms steady, drop your legs to just above the ground, then lift back to start. When your legs get back to center, switch the hand you’re holding the weight with. Continue, alternating hands with each rep.	
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: Dumbell
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise19">
			<h2>
				<br>
					Name: Half Get-Up
				</br>
				<br>
					Description: Lying on your back with your legs straight and the weight in your right hand, bend your right leg and place your right foot flat on the floor. Press the weight straight above your right shoulder, keeping your elbow straight. Maintain your gaze at the dumbbell. Place your left arm out to your side so that it forms a 45-degree angle with your body, palm down. In one movement, push off your right foot to bring your weight upward. As your torso comes up, your weight shifts onto your left forearm. Making sure to keep watching the dumbbell, press away from the floor with your left hand while locking your elbow. You should be sitting up with your right arm fully extended. Pause at the top of this movement, then slowly return through the moves back to start. That’s one rep. Do one minute on the right side, rest 15 seconds, then repeat with one minute on the left side.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: Dumbell
				</br>
				<br>
					Type: Core
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise20">
			<h2>
				<br>
					Name: Split Squat
				</br>
				<br>
					Description: Stand lunge-length in front of a bench. Hold a dumbbell in each hand and rest the top of your left foot on the bench behind you. Lower your body until your rear knee nearly touches the floor and your front thigh is parallel to the floor
				</br>
				<br>
					Intensity: Moderate
				</br>
				<br>
					Equipment: Dumbell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise21">
			<h2>
				<br>
					Name: Walking Lunge
				</br>
				<br>
					Description: Stand with your feet hip width, holding a dumbbell in each hand. Step forward with one leg and lower your body until your rear knee nearly touches the floor and your front thigh is parallel to the floor. Step forward with your rear leg to perform the next rep.
				</br>
				<br>
					Intensity: Low
				</br>
				<br>
					Equipment: Dumbbell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise22">
			<h2>
				<br>
					Name: Reverse Lunge
				</br>
				<br>
				Description: Stand with the dumbbells still in your hands and step back with your right foot. Lower your body until your front thigh is parallel to the floor and your rear knee nearly touches the floor. Keep your torso upright. Step forward to return to the starting position. Complete all reps on one leg, then switch legs. That’s one set
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: Dumbbells
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise23">
			<h2>
				<br>
					Name: Jump Squat
				</br>
				<br>
				Description: Stand with feet shoulder-width apart and squat down until your thighs are about parallel to the floor but no deeper. Jump as high as you can. Land with soft knees and begin the next rep.
				</br>
				<br>
					Intensity: Low
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise24">
			<h2>
				<br>
					Name: Skater Squat
				</br>
				<br>
					Description: Stand on your right leg and pick your left one up off the floor. Raise both arms in front of you to act as a counterbalance. If you have light weights or something similar to help you keep your balance, use it. Bend your hips and knee and lower your body as low as you can. Come back up.
				</br>
				<br>
					Intensity: High
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise25">
			<h2>
				<br>
					Name: Single Leg Glute Bridge
				</br>
				<br>
					Description: Lie on your back on the floor and bend both knees so that your feet rest on the floor close to your butt. Brace your abs and raise one leg up and bring the knee toward your chest. Drive the heel of the other foot into the floor. Bridge up until your body is in a straight line.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise26">
			<h2>
				<br>
					Name: Reverse Table-Up
				</br>
				<br>
					Description: Sit on the floor and place your hands on the floor under your shoulders, fingers pointing in front of you. Place your feet shoulder width and squeeze your glutes. Push through your heels as you bridge your hips up. Your body should form a table, with your torso and hips parallel to the floor. Hold for two seconds.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise27">
			<h2>
				<br>
					Name: Barbell Split Squat
				</br>
				<br>
					Description: Stand facing away from the bench, holding a barbell across your upper back. Have one leg resting on the bench behind you, laces down. Squat with your standing leg until the knee of your trailing leg almost touches the floor. Push up through your front foot to return to the start position.
				</br>
				<br>
					Intensity: High
				</br>
				<br>
					Equipment: Barbell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise28">
			<h2>
				<br>
					Name: Deadlift
				</br>
				<br>
				Description: Stand behind a grounded barbell. Bend your knees slightly to grab it, keeping your shins, back and hips straight. Without bending your back, push your hips forwards to lift the bar. From upright, push your hips back to lower the bar, bending your knees only slightly.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: Barbell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise29">
			<h2>
				<br>
					Name: Goblet Squat
				</br>
				<br>
					Description: Stand with your legs wider than your shoulders and hold a dumbbell with both hands in line with your thighs. Stick your backside out, bend your knees and lower yourself into a squat until the dumbbell touches the floor. Drive back up and repeat.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: Dumbell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise30">
			<h2>
				<br>
					Name: Kettlebell Pistol Squat
				</br>
				<br>
					Description: Hold one kettlebell with both hands just under your chin. Lift one leg off the floor and squat down with the other. Drive through the heel and bring yourself back up to standing position, without letting your leg touch the floor. Lower back down and repeat.
				</br>
				<br>
					Intensity: High
				</br>
				<br>
					Equipment: Kettlebell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise31">
			<h2>
				<br>
					Name: Single Leg Deadlift
				</br>
				<br>
					Description: Hold two dumbbells in front of your thighs, palms facing inwards. Slowly lift one leg straight behind you, bending the other slightly, and lean forward so that your arms lower the dumbbells towards the floor. Pause, then return to upright position.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: Dumbbell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise32">
			<h2>
				<br>
					Name: Farmers Carry
				</br>
				<br>
				Description: Hold two dumbbells by your side. Keep your arms strong and walk short, quick steps as fast as possible. Turn around and walk back
				</br>
				<br>
					Intensity: Low
				</br>
				<br>
					Equipment: Dumbbell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise33">
			<h2>
				<br>
					Name: Sumo Squat
				</br>
				<br>
					Description: Stand with your feet wider than shoulder-width apart holding a barbell across your upper back with an overhand grip. Taking care to not arch your back, push your hips back and bend your knees to lower your body until your thighs are parallel to the floor. Drive you heels into the floor to push yourself explosively back up to the start position.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: Barbell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise34">
			<h2>
				<br>
					Name: Thruster
				</br>
				<br>
					Description: Hold two kettlebells by their handles but so the weight is resting on the back of your shoulder. Slightly bend your knees and squat down, keeping your legs in line with your shoulders. Drive through your legs and straighten them, extending your arms as you do so to raise the kettlebells above your head. Squat down and repeat.	
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: Kettlebell
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise35">
			<h2>
				<br>
					Name: Standing Long Jump
				</br>
				<br>
				Description: Lower yourself into a squat position with your feet shoulder-width apart. Swing your arms back and use them to propel yourself forward, then bring your legs forward for additional momentum. Jump as far as you can and land on the soles of your feet.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Leg
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise36">
			<h2>
				<br>
					Name: Plank Tap
				</br>
				<br>
					Description: Start in a high plank with your palms flat, hands shoulder-width apart, shoulders stacked directly above your wrists, legs extended behind you, and your core and glutes engaged. Tap your right hand to your left shoulder while engaging your core and glutes to keep your hips as still as possible. Do the same thing with your left hand to right shoulder. That's 1 rep. Continue, alternating sides. To make this easier, try separating your legs a little more.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise37">
			<h2>
				<br>
					Name: Side Plank
				</br>
				<br>
					Description: Lie on your right side with your right hand directly underneath your right shoulder. Extend your legs and stack your left foot on top of your right, and then squeeze your abs and glutes to lift your hips off the floor. Extend your left hand straight up toward the ceiling. Hold here for a set amount of time.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise38">
			<h2>
				<br>
					Name: Forearm Plank Reach Out
				</br>
				<br>
					Description: Start in a forearm plank position, with your elbows directly under your shoulders, hands facing forward so your forearms are parallel, core engaged, hips level, and legs extended straight behind you. From this position, reach your right hand forward and tap the floor in front of you. Return your right hand to your starting position, and then reach forward with your left hand to tap the floor in front of you. Continue to alternate sides as you focus on keeping your hips steady throughout. Make it easier: If this exercise feels too challenging, take your feet wider then hip-width apart. The wider your feet, the easier the move should be.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise39">
			<h2>
				<br>
					Name: Plank Up-Down
				</br>
				<br>
					Description: Start in a high plank with your palms flat, hands shoulder-width apart, shoulders stacked directly above your wrists, legs extended behind you, and your core and glutes engaged. Place your feet hip-width apart. Lower your left arm so that your forearm is on the floor. Then, do the same with your right so that you're in a forearm plank.Reverse to return to a high plank. That's 1 rep. As you move, keep your hips as still as possible. To make this easier, try widening your legs a little more.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise40">
			<h2>
				<br>
					Name: Push-up
				</br>
				<br>
					Description: Start in a high plank with your palms flat, hands shoulder-width apart, shoulders stacked directly above your wrists, legs extended behind you, and your core and glutes engaged. Bend your elbows and lower your chest to the floor. Drop to your knees if needed. Push through the palms of your hands to straighten your arms. That's 1 rep.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise41">
			<h2>
				<br>
					Name: Decline Push-Up
				</br>
				<br>
					Description: This is a push-up progression, which means it's more challenging than a regular push-up. Place your toes on a box, bench, or step. Then get into a high plank with your palms flat, hands shoulder-width apart, shoulders stacked directly above your wrists, core and glutes engaged. Bend your elbows and lower your chest to the floor. Push through the palms of your hands to straighten your arms. That's 1 rep.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise42">
			<h2>
				<br>
					Name: Diamond Push-Up
				</br>
				<br>
					Description: Start in a high plank with your palms flat, hands shoulder-width apart, shoulders stacked directly above your wrists, legs extended behind you, and your core and glutes engaged. Walk your hands together so that your thumbs and forefingers form a triangle. Bend your elbows to lower your chest toward the floor. Straighten your arms and push your body back up. This is 1 rep. To make this easier, drop your knees to the floor. Just make sure to keep your core tight and your hips tucked.
				</br>
				<br>
					Intensity: High
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>
		
		<div class="Exercise43">
			<h2>
				<br>
					Name: Plank with Spinal Rotation
				</br>
				<br>
					Description: Start in a high plank with your palms flat, hands shoulder-width apart, shoulders stacked directly above your wrists, legs extended behind you, and your core and glutes engaged. Place your feet hip-width apart. Rotate your entire body to the right into a side plank, so that your right shoulder is stacked above your right wrist and your left hand is extended toward the ceiling. Pause here for a second, then return to start. That's 1 rep.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise44">
			<h2>
				<br>
					Name: Plank Jack
				</br>
				<br>
					Description: Start in a high plank with your palms flat, hands shoulder-width apart, shoulders stacked directly above your wrists, legs extended behind you, and your core and glutes engaged. Jump your feet out and in (like jumping jacks). Try not to let your butt and hips bounce as you jump. Continue for a set amount of time.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise45">
			<h2>
				<br>
					Name: Superman With Arm Extension
				</br>
				<br>
					Description: Lie facedown on a mat with your arms at shoulder height and elbows bent to 90 degrees, so you're making a goalpost shape with your arms. This is your starting position. Engage your shoulders, glutes, and hamstrings to lift your chest, arms and feet off the floor to come into a superman. Be mindful that you do not crunch your low back—this is a strength move, it's not about flexibility or how high you can arch your back. Holding in this raised position, extend your arms overhead so both arms are straight and your biceps are inline with your ears. Return your arms to the goalpost position, then lower everything back down to the floor to complete the rep.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>
		<hr>

		<div class="Exercise46">
			<h2>
				<br>
					Name: Burpee with Push-Up
				</br>
				<br>
					Description: Stand with your feet shoulder-width apart and arms by your sides. Squat and reach forward to place your hands on the floor, shoulder-width apart. Kick your legs straight out behind you into a high plank with your hands stacked underneath your shoulders. Bend your elbows to lower your chest to the floor, then straighten them to do a push-up. Jump your feet toward your hands so your lower body is in a squat. Jump straight up into the air, reaching your arms overhead. That's 1 rep.
				</br>
				<br>
					Intensity: 
				</br>
				<br>
					Equipment: None
				</br>
				<br>
					Type: Arm
				</br>
				<br>
					Popularity:
				</br>
			</h2>
		</div>


		


		<center>
			<!--
			<div class="placeTextureBurn">
				<br>
					<h3>
						Search for new Exercises
					</h3>
				</br>
			</div>
		-->
			<div class="row">
				<!--
				<div class="column">
					<img src="image/BiggerInfusion.png" alt "Exercise">
				</div>
			-->
				<div class="column1">
					<br>
						<h2>
							<a href="../php/Exercise.php">Exercise Archive</a>
						</h2>
				</div>
			</div> 
		</center>
        <hr>
		<?php include ('../html/Footer.html'); ?>
	</body>
</html>