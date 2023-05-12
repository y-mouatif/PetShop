<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <link rel="stylesheet" href="CatDogCare.css">
    <script src="PetShop.js"></script>
    <title>Dog Care</title>
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
    <h2>TOPIC: Dog Care<hr></h2>
    <div class="content">
        <img id="dogimage" src="https://cdn-prod.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg"alt="dogimage"width="270px"><!--Reference: MedicalNewsTOday.com-->
        <div  >
            <p class="instructions">Yay! You’re adopting a kitten, adult cat, or senior cat, and your life is about to be full of purrs and playtime. Here’s a checklist of cat supplies that are essential must-haves or things you need when you’re bringing home a new kitten or cat.
            </p>
            <ul class="instructions">
                  <li>Exercise</li>
                  <li>Grooming</li>
                  <li>Handling</li>
                  <li>Feeding
                    <ul>
                        <li>Quality Dog Food and treats</li>
                        <li>Food dish</li>
                        <li>Water Bowl</li>
                    </ul>
                  </li>
                  <li>Housing</li>
                  <li>Licensing And Identification</li>
                  <li>Vaccinations</li>
                  <li>Most Important: Your love, attention and patience</li>
              </ul>              
          </div>        
          <p class="references"><a href="https://www.aspca.org/pet-care/dog-care/general-dog-care">Reference: Aspca</a></p>    
    </div>
    <?php
     include "footer.php"; 
     ?>
</body>
</html>