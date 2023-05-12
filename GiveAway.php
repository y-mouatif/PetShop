<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // If not logged in, redirect to the login page
  header('Location: GiveAwayLogIn.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <script src="PetShop.js"></script>
    <script src="GiveAway.js"></script>
    <link rel="stylesheet" href="GiveAway.css">
    <title>Have a Pet to Give Away</title>
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
    
    <div class="giveaway-form">
        <table class="giveaway-form">
            <tr>
                <th>Have a Pet to Give Away</th>
                <td><a href="Index.php"><img src="3-removebg-preview.png" alt="logo pet shop" height="60"></a></td><!--Own logo created with canva-->
            </tr>
        </table>
        <fieldset>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label><input type="radio" class="catdog" name="catdog" value="dog" id="dog" >Dog</label>
        <label><input type="radio"  class="catdog" name="catdog" value="cat" id="cat">Cat</label><br><br>
        <label for="breeddogcat">Breed of Dog or Cat</label>
        <input type="text" name="breed" id="breeddogcat" ><br>
        <label><input type="checkbox" name="mixed">Check this box if your pet is a mix breed</label><br>
        <label>Age of animal
            <select name = "age">
            <option> 0 to 1 </option>
            <option> 1 to 3 </option>
            <option> 3 to 6 </option>
            <option> +6 </option>
            </select></label>
            <label>Gender of animal
                <select name = "gender">
                <option> Female </option>
                <option> Male </option>
                </select></label>
        <label for="fullname">Family and Given Name</label>
        <input type="text" name="fullname" id="fullname">
        <label for="email">Email</label>
        <input type="email" id="email"><br>
        <label>Gets along with other dogs? <input type="radio" name="otherdogs" id="yesdogs">Yes<input type="radio" name="otherdogs" id="nodogs">No</label><br>
        <label>Gets along with other cats? <input type="radio" name="othercats" id="yescats">Yes<input type="radio" name="othercats" id="nocats">No</label><br>
        <label>Suitable for a family with small children? <input type="radio" name="children" id="yeschild">Yes<input type="radio" name="children" id="nochild">No</label><br>

        <label for="extra">Comments about your pet</label>
        <textarea id="extra" row="80" col="4"></textarea><br><br>
        <input type = "submit" name="submit" value = "Submit Form" onclick="formVerif()" onclick="validateEmail()" id="submit" >
        <input type="reset" value="Clear Form" id="clear">
        </form>
    </fieldset>    
    </div>
    <?php
    if(isset($_POST["submit"])){
        $username = $_SESSION['username'];
        $catdog = $_POST["catdog"];
        $breed= $_POST["breed"];
        $mixed = $_POST["mixed"];
        $age= $_POST["age"];
        $gender = $_POST["gender"];
        $name= $_POST["fullname"];
        $otherdogs = $_POST["otherdogs"];
        $othercats = $_POST["othercats"];
        $children = $_POST["children"];
        $informationFile = "availablePetInfo.txt";
    }
    function writeToFile($username, $catdog, $breed,$age,$gender,$name,$otherdogs,$othercats,$children){
        global $informationFile;
        $information = $username.":".$catdog.":".$breed.":".$age.":".$gender.":".$name.":".$otherdogs.":".$othercats.":".$children."\n";
        file_put_contents($informationFile,$information,FILE_APPEND); //making sure to not overwrite existing data by appending
    }
    writeToFile($username, $catdog, $breed,$age,$gender,$name,$otherdogs,$othercats,$children);
    echo "Thank you";
    ?>
    <?php
     include "footer.php"; 
     ?>
</body>
</html>