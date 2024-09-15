<?php


?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>
		RDL - Solo's
	</title>
	<link href="cloak.ico" rel="shortcut icon" type="image/x-icon">
	<style>
		html,
		body {
			height: 100%;
			width: 100%;
			margin: auto;
			padding: 0;
			font-family: Helvetica, sans-serif;
		}

		/*---------------Nav + Footer + Backround-----------------------------------------------------------------------------------------------------*/

		body {
			background-image: url('./backgroundrdl.png');
			background-position: cover;
			background-repeat: none;

		}

		.outer-container {
			background-color: rgba(0, 0, 0, 0.5);
			/* Set the desired tinted black color and opacity */
			border: 5px solid white;
			/* Set the desired border style */
			margin: 0 auto;
			/* Center horizontally */
			border-radius: 15px;
			/* Adjust the border radius value as needed */
			width: 85%;

		}


		.table-container {
			width: 85%;
			border-radius: 30px;
			/* Adjust the border radius value as needed */
			background-color: #efefef;
			/* Set the desired background color */
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th,
		td {
			border: 2px solid black;
			border-radius: 15px;
			/* Adjust the border radius value as needed */
			padding: 8px;
			text-align: center;
			font-family: Tahoma, sans-serif;
		}

		th {
			background-color: #f2f2f2;
		}


		/* Navigation bar styling */
		nav {
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
			background-color: #333;
			background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 2.0)), url("image.png");
			height: 80px;
			padding: 0 20px;
			font-family: Arial, sans-serif;
			font-size: 18px;
		}

		nav::before {
			content: "";
			position: absolute;
			top: 90%;
			left: 0;
			right: 0;
			height: 10px;
			/* Adjust the height of the gray bar as needed */
			background-color: gray;
			/* Set the desired background color */
		}


		/* Menu styling */
		ul {
			display: flex;
			margin: 0;
			padding: 0;
			list-style: none;
		}

		li {
			margin-left: 40px;
		}

		a {
			color: #fff;
			text-decoration: none;
			text-transform: uppercase;
			font-weight: bold;
			letter-spacing: 1px;
			text-shadow: 0 0 0 transparent;
		}

		a:hover {
			text-shadow: 0 0 10px rgba(255, 255, 255, 1);
		}

		accountbutton:hover {
			text-shadow: 0 0 10px rgba(255, 255, 255, 1);
		}

		.hero-title {
			text-align: center;
		}

		.hero-title h1 {
			text-align: center;
		}

		.hero-title h3 {
			font-size: 36px;
			position: relative;
			display: inline-block;
			color: #eee;
		}


		.footer {
			position: relative;
			right: 0;
			bottom: 0;
			left: 0;
			background-color: #333;
			background-image: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 2.0)), url("image.png");
			color: white;
			text-align: center;
			height: 80px;
			justify-content: center;
			font-family: tahoma;
			font-size: 15px;
			display: flex;
			align-items: center;
		}

		.footer::before {
			content: "";
			position: absolute;
			top: -10px;
			/* Adjust the distance from the footer as needed */
			left: 0;
			right: 0;
			height: 10px;
			/* Adjust the height of the gray bar as needed */
			background-color: gray;
			/* Set the desired background color */
		}

		.button:hover {
			text-shadow: 0 0 10px #000000;
		}


		/*---------------Nav + Footer-----------------------------------------------------------------------------------------------------*/

		.hrcontainer {
			position: relative;
		}

		.hrbutton {
			position: absolute;
			top: -30px;
			/* Adjust the value as needed */
			left: 50%;
			transform: translateX(-50%);
			border: 5px solid transparent;
			/* Increased border width to 2px */
			border-top-color: white;
			border-left-color: white;
			border-right-color: white;
			border-bottom: none;
			/* Remove the bottom border */
			background-color: white;
			color: black;
			/* Added white font color */
			padding: 3px 30px;
			/* Adjust the padding values as needed */
			cursor: pointer;
			font-family: Tahoma, Arial, sans-serif;
			font-size: 18px;
			border-radius: 8px 8px 0 0;
			/* Set the border radius for each corner */
		}

		/*---------------Report Section-----------------------------------------------------------------------------------------------------*/

		.profile-picture1 {
			background-image: none;
			/* Replace 'your-image-url.jpg' with the URL of your own image */
			width: 60px;
			height: 60px;
			border-radius: 50%;
			background-color: gray;
			color: white;
		}

		.profile-picture2 {
			width: 60px;
			height: 60px;
			border-radius: 50%;
			background-color: gray;
			color: white;
		}

		.label {
			display: flex;
			align-items: center;
			color: white;
		}

		.name {
			color: white;
			font-size: 21px;
			/* Increase the font size */
		}

		.score-label {
			color: white;
			font-size: 21px;
			/* Increase the font size */

		}

		.suicides-label {
			color: white;
			font-size: 21px;
			/* Increase the font size */
		}

		.hrcontainer2 {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 200px;
			font-size: 21px;
			/* Increase the font size */

		}


		.editablebox[contenteditable="true"] {
			width: 35px;
			/* Adjust the width as desired */
			background-color: white;
			color: purple;
			font-family: Helvetica, Arial, sans-serif;
			font-size: 21px;
			border-radius: 5px;
			text-align: center;
		}

		.select-container {
			flex: 0;
		}

		.red-text {
			color: red;
		}

		.red-text,
		.red-text::placeholder {
			color: red;
		}

		.ribbon-1 {
			position: fixed;
			background: white;
			box-shadow: 0 0 0 999px white;
			clip-path: inset(0 -100%);
			color: black;
			z-index: 2;
		}

		.left {
			inset: 0 auto auto 0;
			transform-origin: 100% 0;
			transform: translate(-29.3%) rotate(-45deg);
		}

		.right {
			inset: 0 0 auto auto;
			transform-origin: 0 0;
			transform: translate(29.3%) rotate(45deg);
		}
	</style>
</head>

<body>

	<div class="ribbon-1 left">RDL - Beta Release</div>

	<nav>
		<ul>
			<li>
				<a href="./index.html">Nexus</a>
			</li>
			<li>
				<a href="./rdl.html">Ladder</a>
			</li>
			<li>
				<a href="./rdl-report-solo.html">Report</a>
			</li>
			<li>
				<a href="./rules.html">Rules</a>
			</li>
			<li>
				<a href="./recent-matches.html">Recent Matches</a>
			</li>
			<li>
				<a href="#">Records</a>
			</li>
		</ul>
	</nav>
	<!--=============website body===================================================================================================-->
	<script>
		function validateInput(input) {
			input.value = input.value.replace(/[^0-9]/g, '').substring(0, 2);
		}
	</script><br>
	<form action="ReportHandler.php" method="POST">
		<br>
		<br>

		<div class="outer-container">
			<br>
			<br>
			<br>
			<br>
			<div class="hrcontainer">
				<button class="hrbutton"
					style="left: 300px; box-shadow: inset 0 0 5px 2px rgba(0, 0, 0, 0.5); height: 30px;">SOLO</button>
				<button class="hrbutton" style="left: 433px;"
					onclick="window.location.href='rdl-report-duo.html'">DUO's</button>
				<button class="hrbutton" style="left: 559px;"
					onclick="window.location.href='coming-soon.html'">CTF</button>
				<hr style="height: 3px; background-color: white; width: 100%; margin: 0 auto; border-radius: 0px;">
			</div>
			<br>
			<br>
			<br>
			<br>
			<div class="hrcontainer2">

				<div class="label">


				<?php
					include "ReportHandler.php";
					$obj = new ReportHandler();
					$pilots= $obj ->https://prod.liveshare.vsengsaas.visualstudio.com/join?366777A228E5BCF1DFEEC89A1D8D6EC6D20BgetPilot()
					?>
					<h3>
					

						Winner:
					</h3>
				</div>


			
				<select>


				


						
				


					
							
					<option value="test"><?php
						 $pilots
					?>
					</option>


					

					

				</select>	
				

				
					
					
				</div>
				<div class="label Kills-label">
					<span>Kills:&nbsp;&nbsp;</span> <input
						onblur="if(this.value === '') { this.value = 'XX'; this.classList.add('grey-placeholder'); }"
						onfocus="if(this.value === 'XX') { this.value = ''; this.classList.remove('grey-placeholder'); }"
						oninput="validateInput(this)"
						style="width: 30px; text-align: center; font-size: 16px; color: gray; border-radius: 5px;"
						type="text" value="XX">
				</div>
				<div class="label Deaths-label">
					<span>Deaths:&nbsp;&nbsp;</span> <input
						onblur="if(this.value === '') { this.value = 'XX'; this.classList.add('grey-placeholder'); }"
						onfocus="if(this.value === 'XX') { this.value = ''; this.classList.remove('grey-placeholder'); }"
						oninput="validateInput(this)"
						style="width: 30px; text-align: center; font-size: 16px; color: gray; border-radius: 5px;"
						type="text" value="XX">
				</div>
			</div>

			<br>
			<br>
			<br>
			<br>
			<div class="hrcontainer2">
				<div class="label">
					<h3>
						Loser:
					</h3>
				</div>
				<div class="label">
					&nbsp;&nbsp;&nbsp;&nbsp;You&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				<div class="label Kills-label">
					<span>Kills:&nbsp;&nbsp;</span> <input
						onblur="if(this.value === '') { this.value = 'XX'; this.classList.add('grey-placeholder'); }"
						onfocus="if(this.value === 'XX') { this.value = ''; this.classList.remove('grey-placeholder'); }"
						oninput="validateInput(this)"
						style="width: 30px; text-align: center; font-size: 16px; color: gray; border-radius: 5px;"
						type="text" value="XX">
				</div>
				<div class="label Deaths-label">
					<span>Deaths:&nbsp;&nbsp;</span> <input
						onblur="if(this.value === '') { this.value = 'XX'; this.classList.add('grey-placeholder'); }"
						onfocus="if(this.value === 'XX') { this.value = ''; this.classList.remove('grey-placeholder'); }"
						oninput="validateInput(this)"
						style="width: 30px; text-align: center; font-size: 16px; color: gray; border-radius: 5px;"
						type="text" value="XX">
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<hr style="height: 3px; background-color: white; width: 100%; margin: 0 auto; border-radius: 0px;">
			<br>
			<br>
			<div style="display: flex; justify-content: center; align-items: center;">
				<div
					style="text-align: center; color: white; font-family: Tahoma, Arial, sans-serif; background-color: transparent; padding: 15px; border-radius: 10px; width: 400px; margin-right: 20px;">
					<div style="display: flex; align-items: center">
						<label for="comment">Comment:</label>
						<div class="commentbox" id="level"
							style="type=&quot;text&quot;; border-radius: 5px; padding: 50px; margin-left: -7px; width: 300px; resize: none">
							<textarea class="cols=&quot;100&quot;" rows="10"
								style="resize: none; width: 300px"></textarea>
						</div>
					</div>
				</div>

				<div style="display: flex; justify-content: center; align-items: center;">
					<div
						style="text-align: center; color: white; font-family: Tahoma, Arial, sans-serif; font-size: 13px; background-color: transparent none; padding: 10px; border-radius: 10px; width: 250px;">
						<label for="level">Level:</label> <input id="level" placeholder="Enter level"
							style="border-radius: 5px; padding: 5px;" type="text">
					</div>
				</div>

				<div
					style="display: flex; justify-content: center; align-items: center; color: white; font-size: 13px;  margin-right:10px;">
					<label for="level" style="display: flex; align-items: center;">Recording Link:&nbsp;&nbsp;</label>
					<input id="level" placeholder="(This is optional)" style="border-radius: 5px; padding: 5px;"
						type="text ">
				</div>


				<div
					style="display: flex; justify-content: center; align-items: center; color: white; font-size: 13px; margin-right: 10px;">
					<label for="level" style="display: flex; align-items: center;">Tracker Link:&nbsp;&nbsp;</label>
					<input id="level" placeholder="(This is not optional)" class="red-text" type="text">
				</div>
			</div>
		</div>

		<div style="display: flex; justify-content: center; align-items: center;">
			<button
				style="padding: 15px 30px; border-radius: 5px; background-color: #333; color: white; font-family: Tahoma, Arial, sans-serif; font-size: 18px;"
				type="submit">Submit</button>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
		</div>

		<br>
		</div>
	</form>
	<!--=============website body===================================================================================================-->
	<footer class="footer">
		See you in the mines!
	</footer>
</body>

</html>