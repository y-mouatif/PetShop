<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <script src="PetShop.js"></script>
    <title>Pet Shop - Home Page</title>
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
    <div class="welcome">
        <h1>Welcome to Your Pet Shop!</h1>
        <p>Discover our Website and All our little creatures ready for adoption.</p>
    </div>
    <div class="openinghours">
        <h2 id="opening">Opening Hours</h2><hr>
        <table class="openinghours">
            <tr>
                <td>Monday</td>
                <td>10h -18h</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>10h -18h</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>10h -18h</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>10h -18h</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>10h -18h</td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td>10h -17h</td>
            </tr>
            <tr>
                <td>Sunday</td>
                <td>Closed</td>
            </tr>
        </table>
        
    </div>
     <?php
     include "footer.php"; 
     ?>
</body>
</html>