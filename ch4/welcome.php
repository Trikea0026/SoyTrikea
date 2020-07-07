<?php 
if( $_COOKIE['mysession'] )//check whether we set the session or not
    {
        session_id( $_COOKIE['mysession'] );
        session_start();
    }
    //var_dump( $_SESSION );//print_r ($_SESSION);
    define('TITLE', 'Welcome to Retrieve Sessions and Output Cookies');
    include('templates/header.html'); 
    print '<h2>Welcome Sessions and Cookies</h2>';// Print a greeting:
    print '<p>Hello, ' . $_SESSION['email'] .  '!</p>';
    date_default_timezone_set('America/New_York');   // Print how long they've been logged in:
    print '<p>You have been logged in since: '.date('g:i a', $_SESSION['loggedin']) .'.</p>';
    print '<p><label for="email">Email Address:</label>
            <input type="email" name="email" size="20" value="' 
            . htmlentities($_SESSION['email']) . '"></p>';
    print '<p><a href="logout.php">Logout</a></p>';// Make a logout link:
    include('templates/footer.html'); 
?>