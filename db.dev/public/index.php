<?php
// Start the session to access session data
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>Simple Database App</title>
    
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div class="mainarea">
        <!-- Status message showing logged-in username from the session -->
        <h1>Status: You are logged in, <?php echo isset($_SESSION['Username']) ? $_SESSION['Username'] : 'Guest'; ?> </h1>
        <p class="lead">This is where we will put the logout button</p>

        <!-- Logout button -->
        <form action="" method="post" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    </div>

    <ul>
      <li>
        <a href="create.php"><strong>Create</strong></a> – add a user
      </li>
      <li>
        <a href="read.php"><strong>Read</strong></a> – find a user
      </li>
    </ul>

    <!-- Logout logic -->
    <?php
    // Check if the user clicked the "Logout" button
    if (isset($_POST['Submit']) && $_POST['Submit'] == 'Logout') {
        // Destroy the session to log the user out
        session_destroy();
        header('Location: login.php'); 
        exit();
    }
    ?>
  </body>
</html>
