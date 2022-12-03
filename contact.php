<?php
include('database.php');




if(!empty($_POST['contact'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];

	$query = "INSERT INTO users (username, email, password) VALUES ('$username','$email', '$password')";

	if ($con->query($query) === TRUE) {
  		echo "New record created successfully";
	} else {
	  echo "Error: " . $query . "<br>" . $con->error;
	}





}



?>

<?php include("head.php"); ?>


<div class="content full-width">



	<form method="post" action="">


				<div class="form-row">
					<label for="username">Username</label>
				<input type="text" name="username" placeholder="Username" >
				</div>



				<div class="form-row">
					<label for="pwd">Password</label>
					<input type="password" name="pwd" placeholder="Password" >
				</div>

				<div class="form-row">
					<label for="password_confirm">Confirm Password</label>
					<input type="password" name="password_confirm" placeholder="Confirm Password" >
				</div>

				<div class="form-row">
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="Email" >
				</div>

				<div class="form-row">
					<div class="label">Gender</div>
					<input type="radio" name="gender" value="0" id="male" checked> <label for="male">Male</label>
				<input type="radio" name="gender" value="1" id="female"> <label for="female">Female</label>
				</div>

				<div class="form-row">
					<label for="email">Skills</label>:
				<input type="checkbox" name="skills[]" value = "HTML" checked> <label for="female">HTML</label>
				<input type="checkbox" name="skills[]" value="Javascript"> <label for="female">JAVASCRIPT</label>

				</div>


				<div class="form-row">


				<select name="countries">
					<option value="-1">Select Counrtry</option>

					<optgroup label="Central Asia">
						<option value="uz" selected>Uzbekistan</option>

						<option value="taj">Tajikistan</option>
						<option value="turk">Turkmanistan</option>
						<option value="kaz">Kazakistan</option>
					</optgroup>
					<optgroup label="South Asia">
						<option value="pk">Pakistan</option>
						<option value="ban">Bangladesh</option>
						<option value="in">India</option>
						<option value="nep">Nepal</option>
					</optgroup>

				</select>
				</div>

				<div class="form-row">
					<textarea name="intro" placeholder="Introduce yourself">

				</textarea>
				</div>

				<div class="form-row">
					<input type="file" name="resume" id="resume">
					<label for="resume">Upload your resume</label>
				</div>




				<input type="submit" name="contact" value="Contact Us">
			</form>
	</div>
	<div class="sidebar">
		<div class="recentnews">
			<h2>Recent News</h2>
			<div class="news">
				<ul>
					<li>news 1</li>
				</ul>
			</div>
		</div>
		<div id="googleads">
			<iframe src=""></iframe>
		</div>
	</div>
</div>



<div class="footer full-width">
	All right reserved &copy;
</div>


</body>
</html>