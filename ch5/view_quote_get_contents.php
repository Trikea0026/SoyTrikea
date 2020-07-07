<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View A Quotation</title>
</head>
<body>
    <h1>Random Quotation</h1>
    <?php //This script reads in a file and prints a random line from it.
    $data = file_get_contents('quotes.txt'); // Read the whole file's contents 
    print $data;
    ?>
</body>
</html>