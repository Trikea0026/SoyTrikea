<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>View A Quotation</title>
</head>
<body>
	<h1>Random Quotation</h1>
	<?php //This script reads in a file and prints a random line from it.
	$data = file('quotes.txt'); // Read the file's contents into an array
	$n = count($data); // Count the number of items in the array:
	$rand = rand(0, ($n - 1)); // Pick a random item:
	print '<p>' . trim($data[$rand]) . '</p>';// Print the quotation:
	?>
</body>
</html>

