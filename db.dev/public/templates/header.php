<?php 
session_start(); // Start the session to access session data

// Check if the user is logged in, and if not, redirect them to the login page
if (isset($_SESSION['Active']) && $_SESSION['Active'] == false) {
    header("location:login.php");
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Adoption Center</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
    <h1>Pet Adoption Center</h1>
    <hr>
