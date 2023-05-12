
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .pet{
    margin-left: 200px;
}
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <script src="PetShop.js"></script>
    <title>Display Available Pets</title>
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
    $findcatdog=$_POST['catdog'];
    $findbreed=$_POST['breed'];
    $breedmatter =$_POST['breedmatter'];
    $findage=$_POST['age'];
    $findgender=$_POST['gender'];

    //getting info from available pet file
    $informationFile = ("availablePetInfo.txt");
    if (file_exists($informationFile)) {
        $information = file($informationFile, FILE_IGNORE_NEW_LINES);
        foreach ($information as $line) {
            list($username, $catdog, $breed,$age,$gender,$name,$otherdogs,$othercats,$children) = explode(":", $line);
            if ($findcatdog==$catdog && ($findbreed==$breed || $breedmatter=="on")&& ($findage==$age || $findage=="Doesn't matter") && ($findgender==$gender ||$findgender=="Doesn't matter")) {
                if($findcatdog=="dog"){
                    echo '<div class="pet">
                    <table>
                        <tr>
                            <td><img src="dog1.jpg" alt="dogimage" width="200"></td>
                            <td><b>Name: </b>'.$name.'<br>
                                <b>Breed: </b>'.$breed.'<br>
                                <b>Gender: </b>'.$gender.'<br>
                                <b>Age: </b>'.$age.'<br>
                                <b>Gets along with other dogs?</b>'.$otherdogs.'<br>
                                <b>Gets along with other cats?</b>'.$othercats.'<br>
                            </td>
                            <td>
                                <button onclick="">Interested</button>
                            </td>
                        </tr>
                    </table>
                </div>';
                }
                if($findcatdog=="cat"){
                    echo '<div class="pet">
                    <table>
                        <tr>
                            <td><img src="cat1.jpg" alt="catimage" width="200"></td>
                            <td><b>Name: </b>'.$name.'<br>
                                <b>Breed: </b>'.$breed.'<br>
                                <b>Gender: </b>'.$gender.'<br>
                                <b>Age: </b>'.$age.'<br>
                                <b>Gets along with other dogs?</b>'.$otherdogs.'<br>
                                <b>Gets along with other cats?</b>'.$othercats.'<br>
                            </td>
                            <td>
                                <button onclick="">Interested</button>
                            </td>
                        </tr>
                    </table>
                </div>';
                }
            }
        }
    }


     include "footer.php"; 
     ?>
</body>
</html>