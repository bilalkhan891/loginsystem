<?php 
	include_once 'inc/header.php';
 ?>

	<section class="main-container">
		<div class="main-wrapper">
			<h2>Sign-up</h2>
			<form class="signup-form" action="inc/signup.inc.php" method="POST">
				<input type="text" name="first" placeholder="First Name">
				<input type="text" name="last" placeholder="Last Name">
				<input type="email" name="email" placeholder="e-mail">
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Sign up</button>
			</form>
		</div>
	</section>

<?php 
	include_once 'inc/footer.php';
 ?>