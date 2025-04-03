<?php
session_start(); /* Start the session */

// Include the session class file
require_once '../src/session.php';

// Create a new instance of the session class
$session = new session();

// Call the forgetSession method to destroy the session and redirect
$session->forgetSession();
?>
