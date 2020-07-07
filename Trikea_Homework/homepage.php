<?php 
define('TITLE', 'Login');
include('templates/header.html');

// <!-- Main jumbotron for a primary marketing message or call to action --
    echo 
    '
    <h2> Here is the page for UploadFiles and UploadImages </h2> 
    <hr>
          <p style="text-align: center; padding: 50px 50px; font-size: 30px;">
             <span style="padding:150px;"><a class="test" href="../HomeworkUploadFile/uploadfiles.php">Upload File</a></span>
             <span><a href="../HomeworkUploadFile/uploadimages.php">Upload Images</a></span>
          </p>
    ';
include('templates/footer.html'); // Need the footer.
?>