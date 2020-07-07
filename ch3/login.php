<?php 
define('TITLE', 'Login');
include('templates/header.html');
print '<h2>Login Form</h2>
	<p>Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {// Check if the form has been submitted:
	if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ) {// Handle the form:
		if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) { // Correct!
		    ob_end_clean();
			if (!headers_sent($filename)) {//checks whether the page has already received HTTP.
				header('Location:welcome.php');
				exit; //exit this login.php page
			} else {
				echo "Headers already sent in $filename \n" .
				"Cannot redirect, for now please click this <a " .
				"href=\"http://localhost/welcome.php\">link</a> instead\n";
				exit; //exit this login.php page
			}
		} else { // Incorrect!
			print '<p class="text--error">The submitted email address and 
			password do not match those on file!<br>Go back and try again.</p>';
		}
	} else { // Forgot a field.
		print '<p class="text--error">Please make sure you enter both an email address and a password!<br>
		Go back and try again.</p>';
	}
} else { // Display the form when refreshing the page or in case there is no POST method from submitting.
	print '<form action="login.php" method="post" class="form--inline">
	<p><label for="email">Email Address:</label><input type="email" name="email" size="20"></p>
	<p><label for="password">Password:</label><input type="password" name="password" size="20"></p>
	<p><input type="submit" name="submit" value="Log In!" class="button--pill"></p>
	</form>';
}
include('templates/footer.html'); // Need the footer.?>