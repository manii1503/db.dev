<?php

class session
{
    // Function to kill the session and remove the session cookie
    public function killSession()
    {
        // Overwrite the current session array with an empty array.
        $_SESSION = [];

        // Overwrite the session cookie with empty data too.
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(),
                '', time() - 42000, // Expire the cookie
                $params['path'], $params['domain'],
                $params['secure'], $params['httponly']
            );
        }

        // Destroy the session
        session_destroy();
    }

    // Function to forget the session and redirect the user
    public function forgetSession()
    {
        $this->killSession();
        header("location:login.php");  /* Redirect to login page */
        exit;  
    }
}
?>
