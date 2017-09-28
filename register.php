<?php
	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once 'inc/config.php';

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

		<!-- UIkit CSS -->
		<!-- https://getuikit.com/docs/installation -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />

	
</head>
<body>
	
	<div class="uk-section uk-container ">
		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
			<form class="uk-form-stacked js-register">

					<h2>Register</h2>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@email.com" required="required">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="password" placeholder="Your password" required="required">
			        </div>
			    </div>

						<div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;">
							test
						</div>
				
			    <div class="uk-margin">  
			            <button class="uk-button uk-button-default" type="submit">Register</button>  
			    </div>

					


			    

			</form>
		</div>
	</div>

		

<?php require_once 'inc/footer.php'; ?>

</body>
</html>