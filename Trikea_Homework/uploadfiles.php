<?php 
define('TITLE', 'Upload File');
include('templates/header.html');

 // This script takes a file upload and stores it on the server
if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.
	// Try to move the uploaded file:
	if (move_uploaded_file ($_FILES['the_file']['tmp_name'], "storeupload/{$_FILES['the_file']['name']}")) {
		echo '<p style=" color: #99b3ff;">Your file has successfull uploaded.</p>'; 	} 
	// if (move_uploaded_file ($_FILES['the_file1']['tmp_name'], "uploadme/{$_FILES['the_file1']['name']}")) {
	// 		print '<p>Your file has been uploaded.</p>';	}
	else { echo '<p style="color: red;">Your file could not be uploaded because: ';// Problem!
		switch ($_FILES['the_file']['error']) {// Print a message based upon the error:
			case 1:	echo 'The file exceeds the upload_max_filesize setting in php.ini';break;
			case 2:	echo 'The file exceeds the MAX_FILE_SIZE setting in the HTML form';break;
			case 3:	echo 'The file was only partially uploaded';break;
			case 4:	echo 'No file was uploaded';break;
			case 6: echo 'The temporary folder does not exist.';break;
			default:echo 'Something unforeseen happened.';break;
		}
		echo '.</p>'; // Complete the paragraph.
	} // End of move_uploaded_file() IF.
} // End of submission IF.
echo '

<a href="homepage.php"><button class = "btn btn-success btn-sm">Previous Page</button></a>
<form enctype="multipart/form-data" action="uploadfiles.php" method="post">
 <input type="hidden" name="MAX_FILE_SIZE" value="3600000" />
 <fieldset><legend>Select a files to be uploading:</legend>
	 <p><b>File:</b> <input type="file" name="the_file" /></p>
 </fieldset>
 	 <p><input type="submit" name="submit" value="Click to Upload"></p>
</form>';
echo '<button onclick="create_file_input(this)" class ="btn btn-success btn-sm"> More File Input </button>';
include('templates/footer.html'); // Need the footer.
?>

