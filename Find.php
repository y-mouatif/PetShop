<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <link rel="stylesheet" href="Find.css">
    <script src="PetShop.js"></script>
    <script src="Find.js"></script>
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
    
    <div class="adoption-form">
        <table class="adoption-form">
            <tr>
                <th>Find a Dog/cat</th>
                <td><a href="Home.html"><img src="2-removebg-preview.png" alt="logo pet shop" height="60"></a></td>
            </tr>
        </table>
        <fieldset>
        <form method="POST" action="DisplayFind.php">
        <label><input type="radio" class="catdog" name="catdog" id="dog" value="dog">Dog</label>
        <label><input type="radio"  class="catdog" name="catdog" id="cat" value="cat">Cat</label><br><br>
        <label for="breeddogcat">Breed of Dog or Cat</label>
        <input type="text" name="breed" id="breeddogcat" ><br>
        <label><input type="radio" name="breedmatter" >Check this box if it doesn't matter</label><br>
        <label>Preferred age of animal
            <select name = "age">
            <option> 0 to 1 </option>
            <option> 1 to 3 </option>
            <option> 3 to 6 </option>
            <option> +6 </option>
            <option> Doesn't matter </option>
            </select></label>
            <label>Preferred gender of animal
                <select name = "gender">
                 <option> Doesn't matter </option>
                <option> Female </option>
                <option> Male </option>
                </select></label>
        <label for="extra">Does it need to get along with other dogs, other cats, small children? Explain</label>
        <textarea id="extra" row="80" col="4"></textarea><br><br>
        <input type = "submit" value = "Submit Form" onclick="formVerif()" id="submit" >
        <input type="reset" value="Clear Form" id="clear">
        </form>
    </fieldset>    
    </div>
    <?php
     include "footer.php"; 
     ?>
</body>
</html>