<?php
#title
$title = "register";
#include header
include 'includes/header.php';

if(array_key_exists('register', $_POST)) {
	#cache errors
	$errors = [];

	#validate first name
	if(empty($_POST['fname'])) {
	$errors['fname'] = "please enter a first name";
	}

		#validate last name
	if(empty($_POST['lname'])) {
	$errors['lname'] = "please enter a last name";
	}

	#validate first name
	if(empty($_POST['email'])) {
	$errors['email'] = "please enter a email";
	}

	#validate first name
	if(empty($_POST['password'])) {
	$errors['password'] = "please enter a confirm password";
	}

	#validate first name
	if(empty($_POST['password']) && ($_POST['pword'])) {
	$errors['password'] = "please enter a confirm password";
	}


	if(empty($errors)) {
		//
	} else {
		foreach ($errors as $err) {
			echo $err."<br/>";
		}
	}
}

?>
	<div class="wrapper">
		<h1 id="register-label">Admin Register</h1>
		<hr>
		<form id="register"  action ="register.php" method ="POST">
			<div>
				<label>first name:</label>
				<input type="text" name="fname" placeholder="first name">
			</div>
			<div>
				<label>last name:</label>
				<input type="text" name="lname" placeholder="last name">
			</div>

			<div>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>

			<div>
				<label>confirm password:</label>
				<input type="password" name="pword" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
		</form>

		<h4 class="jumpto">Have an account? <a href="login.php">login</a></h4>
	</div>

<?php
#Include footer
include 'includes/footer.php';

?>