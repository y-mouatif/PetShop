<?php

session_start();
if (isset($_SESSION['username'])) {
    // Redirect to give away page if already logged in
    header("Location: GiveAway.php");
    exit;
}
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <script src="PetShop.js"></script>
    <link rel="stylesheet" href="GiveAway.css">
    <title>Have a Pet to Give Away - Log In</title>
</head>
<body>
    <nav class="sidemenu">
    <ul class="sidemenu">
            <li><a href="Index.php">Home<hr/></a></li>
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
    <h1>Log In</h1>
    
    <fieldset>
    <form method="post" action="LogIn.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" name="submit"value="Log In">
    </form>
    </fieldset>    
    
    <p>Don't Have an Account?<br><a href="CreateAccount.php">Sign Up</a></p>
    </div>
    <?php
     include "footer.php"; 
     ?>
</body>
</html>