<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			RDL - Duo's
		</title>
		<link href="cloak.ico" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="CSS/rdl-report-duo.css"/>
		<link rel="stylesheet" href="CSS/styles.css"/>
	</head>

	<body>
	    
	    <div class="ribbon-1 left">RDL - Beta Release</div>
	    
		<nav>
			<ul>
				<li>
					<a href="../index.html">Nexus</a>
				</li>
				<li>
					<a href="./rdl.html">Ladder</a>
				</li>
				<li>
					<a href="./rdl-report-solo.php">Report</a>
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
		</script>
		<br>
		<br>
		<br>
		
		<div class="outer-container">
            <br>
            <br>
            <br>
            <br>
            <div class="hrcontainer">
              <button class="hrbutton" style="left: 300px;" onclick="window.location.href='rdl-report-solo.php'">SOLO</button> 
              <button class="hrbutton" style="left: 433px; box-shadow: inset 0 0 5px 2px rgba(0, 0, 0, 0.5); height: 30px;" onclick="window.location.href='rdl-report-duo.php'">DUO's</button>
              <button class="hrbutton" style="left: 559px;" onclick="window.location.href='ctf.html'">CTF</button>
              <hr style="height: 3px; background-color: white; width: 100%; margin: 0 auto; border-radius: 0px;">
            </div>
			<br>
			<br>
			<br>
			<br>
			<div class="hrcontainer2">
				<div class="label">
					<h3>
						Winning Team:
					</h3>
				</div>
				<div class="select-container">
    					<select>
    						<option selected>
    							Their Team
    						</option>
    					</select>
    				</div>
				<div class="label score-label">
					<span>Score:&nbsp;&nbsp;</span> <input onblur="if(this.value === '') { this.value = 'XX'; this.classList.add('grey-placeholder'); }" onfocus=
					"if(this.value === 'XX') { this.value = ''; this.classList.remove('grey-placeholder'); }" oninput="validateInput(this)" style=
					"width: 30px; text-align: center; font-size: 16px; color: gray; border-radius: 5px;" type="text" value="XX">
				</div>
				<div class="label suicides-label">
					<span>Suicides:&nbsp;&nbsp;</span> <input onblur="if(this.value === '') { this.value = 'XX'; this.classList.add('grey-placeholder'); }" onfocus=
					"if(this.value === 'XX') { this.value = ''; this.classList.remove('grey-placeholder'); }" oninput="validateInput(this)" style=
					"width: 30px; text-align: center; font-size: 16px; color: gray; border-radius: 5px;" type="text" value="XX">
				</div>
			</div>
			
			<br>
			<br>
			<br>
			<br>
			<div class="hrcontainer2">
				<div class="label">
					<h3>
					&nbsp;Losing Team:&nbsp;
					</h3>
				</div>
    				<div class="select-container">
    					<select>
    						<option selected>
    						Your Team
    						</option>
    					</select>
    				</div>
				<div class="label score-label">
					<span>Score:&nbsp;&nbsp;</span> <input onblur="if(this.value === '') { this.value = 'XX'; this.classList.add('grey-placeholder'); }" onfocus=
					"if(this.value === 'XX') { this.value = ''; this.classList.remove('grey-placeholder'); }" oninput="validateInput(this)" style=
					"width: 30px; text-align: center; font-size: 16px; color: gray; border-radius: 5px;" type="text" value="XX">
				</div>
				<div class="label suicides-label">
					<span>Suicides:&nbsp;&nbsp;</span> <input onblur="if(this.value === '') { this.value = 'XX'; this.classList.add('grey-placeholder'); }" onfocus=
					"if(this.value === 'XX') { this.value = ''; this.classList.remove('grey-placeholder'); }" oninput="validateInput(this)" style=
					"width: 30px; text-align: center; font-size: 16px; color: gray; border-radius: 5px;" type="text" value="XX">
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
          <div style="text-align: center; color: white; font-family: Tahoma, Arial, sans-serif; background-color: transparent; padding: 15px; border-radius: 10px; width: 400px; margin-right: 20px;">
            <div style="display: flex; align-items: center">
              <label for="comment">Comment:</label>
              <div class="commentbox" id="level"; placeholder="keep within the rules."; style="type=&quot;text&quot;; border-radius: 5px; padding: 50px; margin-left: -7px; width: 300px; resize: none">
                <textarea class="cols=&quot;100&quot;" rows="10" style="resize: none; width: 300px"></textarea>
              </div>
             </div>
            </div>

    	<div style="display: flex; justify-content: center; align-items: center;">
				<div style="text-align: center; color: white; font-family: Tahoma, Arial, sans-serif; font-size: 13px; background-color: transparent none; padding: 10px; border-radius: 10px; width: 250px;">
					<label for="level">Level:</label> <input id="level" placeholder="Enter level" style="border-radius: 5px; padding: 5px;" type="text">
				</div>
			</div>
			
		<div style="display: flex; justify-content: center; align-items: center; color: white; font-size: 13px;  margin-right:10px;">
                <label for="level" style="display: flex; align-items: center;">Recording Link:&nbsp;&nbsp;</label>
                <input id="level" placeholder="(This is optional)" style="border-radius: 5px; padding: 5px;" type="text ">
			</div>

		
	   <div style="display: flex; justify-content: center; align-items: center; color: white; font-size: 13px; margin-right: 10px;">
                <label for="level" style="display: flex; align-items: center;">Tracker Link:&nbsp;&nbsp;</label>
                <input id="level" placeholder="(This is not optional)" class="red-text" type="text">
		</div>
	   </div>
	  </div>
	  
	  	<div style="display: flex; justify-content: center; align-items: center;">
			<button style="padding: 15px 30px; border-radius: 5px; background-color: #333; color: white; font-family: Tahoma, Arial, sans-serif; font-size: 18px;" type="submit">Submit</button>
			
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
		<!--=============website body===================================================================================================-->
		<!--
		<footer class="footer">
			See you in the mines!
		</footer>
		-->
	</body>
</html>