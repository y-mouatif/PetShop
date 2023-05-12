<?php
session_start(); // Start session

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page 
    header("Location: GiveAwayLogIn.php");
    exit;
}

if (isset($_POST['logout'])) {//checking if the user logged out
    // Destroy session and redirect to login page
    session_unset();
    session_destroy();
    echo ("you have been succesfully logged out");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <link rel="stylesheet" href="GiveAway.css">

    <script src="PetShop.js"></script>
    <title>Contact Us</title>
</head>
<body>
   
    <div class="sidemenu">
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
    </div>
    <?php
        include 'header.php';
    ?>
    <h1>Logout</h1>
    <p>You are logged in as <?php echo $_SESSION['username']; ?></p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="submit" id="logout" name="logout" value="Logout">
    </form>
    <?php
     include "footer.php"; 
     ?>
</body>
</html>