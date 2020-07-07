<?php 
    session_start();/*  It destroys the session information. */
    $_SESSION = [];// Reset the session array:
    session_destroy();// Destroy the session data on the server:
    define('TITLE', 'Logout');// Define a page title and include the header:
    include('templates/header.html');
?>
    <h2>Welcome to Cookies and Sessions Club!</h2>
    <p>You are now logged out.</p>
    <p>Thank you for using this site. We hope that you liked it.<br>
    Blah, blah, blah...
    Blah, blah, blah...</p>
<?php include('templates/footer.html'); ?>