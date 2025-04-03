<?php
// Include the config.php file to access stored username and password
require_once('config.php');

// Start the session to store session data
session_start();

// Redirect to index.php if already logged in
if (isset($_SESSION['Active']) && $_SESSION['Active'] == true) {
    header("location:index.php"); // Redirect to index.php if already logged in
    exit;
}

// Check if the login form has been submitted
if (isset($_POST['Submit'])) {

    // Check if the form's username and password match the values from config.php
    if ($_POST['Username'] == $Username && $_POST['Password'] == $Password) {
        // Success: Set session variables and redirect to protected page
        $_SESSION['Username'] = $Username;
        $_SESSION['Active'] = true;

        // Redirect to index.php
        header("location:index.php");
        exit;
    } else {
        echo 'Incorrect Username or Password';
    }
}
?>

<!-- HTML Form to input the username and password -->
<form method="POST">
    <label for="Username">Username:</label>
    <input type="text" id="Username" name="Username" required>
    <br>
    <label for="Password">Password:</label>
    <input type="password" id="Password" name="Password" required>
    <br>
    <input type="submit" name="Submit" value="Sign in">
</form>
