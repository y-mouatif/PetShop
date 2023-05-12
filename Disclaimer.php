<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <link rel="stylesheet" href="Disclaimer.css">
    <script src="PetShop.js"></script>
    <title>Pet Shop - Home Page</title>
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
     <div class="footer">
        <a id="disclaimer" href="Disclaimer.html">Disclaimer Statement</a>
       
    </div>
    <div class="popup">
        <h2>Disclaimer Statement</h2><hr>
        <p>Our Website is built to protext your information. We promise that your information will not be misused or sold</p>
        <p>You will be protected throughout your experience with us</p>
        <p>Thank Your for your trust</p>
        <p>Pet Shop</p>
    </div>
</body>
</html>