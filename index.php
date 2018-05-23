<?php 
	include_once 'inc/header.php';
 ?>

	<section class="main-container">
		<div class="main-wrapper">
			<h2>Home</h2>
			<?php 
				var_dump($_SESSION);
				if (isset($_SESSION['u_id'])) {
					echo "You are logged in!";
				} 

			 ?>
		</div>
	</section>

<?php 
	include_once 'inc/footer.php';
 ?>