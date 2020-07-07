<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Registration Results</h1>
<?php
$okay = true;// Flag variable to track success:
// Validate the email address:
if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = false;
}
if (empty($_POST['password'])) {// Validate the password:
	print '<p class="error">Please enter your password.</p>';
	$okay = false;
}
// Check the two passwords for equality:
if ($_POST['password'] != $_POST['confirm']) {
	print '<p class="error">Your confirmed password does not match the original password.</p>';
	$okay = false;
}
// Validate the year:
if ( is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
	// Check that they were born before 2020.
	if ($_POST['year'] < 2020) {
		$age = 2020 - $_POST['year']; // Calculate age this year.
	} else {
	print '<p class="error">Either you entered birth year wrong or you come from the future!</p>';
		$okay = false;
	} // End of 2nd conditional.
} else { // Else for 1st conditional.
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = false;
} // End of 1st conditional.
// Validate the terms:
if ( !isset($_POST['terms'])) {
	print '<p class="error">You must accept the terms.</p>';
	$okay = false;	
}
switch ($_POST['color']) {// Validate the color:
	case 'red':
		$color_type = 'primary'; break;
	case 'yellow':
		$color_type = 'primary'; break;
	case 'green':
		$color_type = 'secondary'; break;
	case 'blue':
		$color_type = 'primary'; break;
	default:
		print '<p class="error">Please select your favorite color.</p>';
		$okay = false; break;
} // End of switch.
if ($okay) {// If there were no errors, print a success message:
		print '<p>You have been successfully registered (but not really).</p>';
		print "<p>You will turn $age this year.</p>";
		print "<p>Your favorite color is a $color_type color.</p>";
}
?></body>
</html>