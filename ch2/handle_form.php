<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<?php
ini_set('display_errors', 1); // Let me learn from my mistakes!
error_reporting(E_ALL); // Show all possible problems!
// This page receives the data from feedback.html.
// receive: title, name, email, response, comments, and submit in $_POST.
$title = $_POST['title'];
$name = $_POST['name'];
$email = $_POST['email'];
$response = $_POST['response'];
$comments = $_POST['comments'];
// Print the received data:
print "<p>Thank you, $title $name, $email for your comments with
$response and added:<br>$comments</p>";
?>
</body>
</html>