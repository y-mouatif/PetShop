<?php

session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d).{4,}$/', $password)) {
        die("Error: Password must be at least 4 characters, containing at least one letter and one digit.");
    }
    if (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
        die("Error: Username can only contain letters and digits.");
    }

    // Checking if the entered username already exists in the login file
    $loginFile = "login.txt";
    if (file_exists($loginFile)) {
        $login = file($loginFile, FILE_IGNORE_NEW_LINES);
        foreach ($login as $line) {
            list($existingUsername, $existingPassword) = explode(":", $line);
            if ($username == $existingUsername) {
                if($password==$existingPassword){
                    // Start a new session and set session variables
                    $_SESSION['username'] = $username;
                    $_SESSION['logged_in'] = true;

                    // Redirect to the form page
                    header('Location: GiveAway.php');
                    exit();
                } else {
                    // If the login pair does not exist, display an error message
                    echo "Login failed. Please try again.";
                }
            }
        }
    }
}
?>
