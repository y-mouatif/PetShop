<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <link rel="stylesheet" href="CreateAccountStyle.css">
    <script src="PetShop.js"></script>
    <title>Create an Account</title>
</head>
<body>
<nav class="sidemenu">
    <ul class="sidemenu">
            <li><a href="Home.php">Home<hr/></a></li>
            <li><a href="Find.php">Find a dog/cat<hr/></a></li>
            <li><a href="DogCare.php">Dog care<hr/></a></li>
            <li><a href="CatCare.php">Cat Care<hr/></a></li>
            <li><a href="CreateAccount.php">Create an account<hr/></a></li>
            <li><a href="GiveAwayLogIn.php">Have a Pet to Give Away<hr/></a></li>
            <li><a href="LogOut.php">LogOut<hr/></a> </li>
            <li><a href="Contact.php">Contact<hr/></a> </li>
        </ul>
</nav>
    <?php
        include 'header.php';
    ?>
    <div class=content>
    <h1>Create a new account</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <p id="guidelines"><strong>Username & Password Guidelines</strong><br>
        Username: Can only contain letters and digits.<br>
        Password: Can only contain letters and digits. <br>At least 4 characters long<br>At least one letter and one digit</p>.
        <input type="submit" name="submit"value="Create Account">
    </form>

    <?php
    // Get the entered username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validation of the format
    if(isset($_POST['submit'])){

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
                die("Error: Username already taken. Please choose a different one.");
            }
        }
    }

    // Write the new username and password to the login file
    function writeToFile($username, $password){
        global $loginFile;
        $newAccount = $username.":".$password."\n";
        file_put_contents($loginFile,$newAccount,FILE_APPEND); //making sure to not overwrite existing data by appending
    }

    writeToFile($username,$password);
    // Display success message
    echo "Account successfully created. Please proceed to log in";
}
    ?>

</div>
     <?php
     include "footer.php"; 
     ?>
</body>
</html>