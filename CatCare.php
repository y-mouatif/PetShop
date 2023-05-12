<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <link rel="stylesheet" href="CatDogCare.css">
    <script src="PetShop.js"></script>
    <title>Cat Care</title>
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
    <h2>TOPIC: Cat Care<hr></h2>
    <div class="content">
        <img id="catimage" src="IMG_9345.jpeg"alt="catimage"width="200px"><!--image of my own cat-->
        <div >
            <p class="instructions">Yay! You’re adopting a kitten, adult cat, or senior cat, and your life is about to be full of purrs and playtime. Here’s a checklist of cat supplies that are essential must-haves or things you need when you’re bringing home a new kitten or cat.

            </p>
            <ol class="instructions">
                  <li>Cat Carrier</li>
                  <li> Litter Box</li>
                  <li>Cat Litter</li>
                  <li>Litter Clean Up Supplies</li>
                  <li>Food and Treats</li>
                  <li>Water & Food Dishes</li>
                  <li>Cat Grooming Tools</li>
                  <li>Cat Toys</li>
                  <li>Bed or Blankets for napping</li>
                  <li>Scratching Posts</li>
                  <li>Cat tree or Perches</li>
                  <li>Calming Spray or Catnip</li>
                  <li>Most Important: Your love, attention and patience</li>
              </ol>              
          </div>        
          <p class="references"><a href="https://www.armandhammer.com/en/articles/supplies-for-cats-or-new-kitten-checklist?utm_medium=cpc&utm_id=go_cmp-18137895542_adg-139977472066_ad-617855630041_kwd-57238621_dev-c_ext-_prd-&maas=maas_adg_api_577760706540491739_macro_1_1&ref_=aa_maas&aa_campaignid=18137895542&aa_adgroupid=139977472066&aa_creativeid=ad-617855630041_kwd-57238621_dev-c_ext-&gclid=CjwKCAiAuaKfBhBtEiwAht6H7wYuL3f3FISxeNjCcCZZem_FPr3YcK92Ww4WDrCdagOjbvU0EMWS8RoCtKoQAvD_BwE#section">Reference: Arm & Hammer</a></p>    
    </div>
    <?php
     include "footer.php"; 
     ?>
</body>
</html>