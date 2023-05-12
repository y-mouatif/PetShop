function formVerif(){
        let cat= document.getElementById("cat");
        let dog= document.getElementById("dog");
        let breed= document.getElementById("breeddogcat").value;
        let name= document.getElementById("fullname").value;
        let email = document.getElementById("email").value;
        let yesOtherDogs= document.getElementById("yesdogs");
        let noOtherDogs= document.getElementById("nodogs");
        let yesOtherCats= document.getElementById("yescats");
        let noOtherCats= document.getElementById("nocats");
        let yesChild =document.getElementById("yeschild");
        let noChild = document.getElementById("nochild");
        let extra= document.getElementById("extra").value;

        if(!(cat.checked || dog.checked) || breed=="" || email=="" || name=="" ||extra=="" ||!(noOtherDogs.checked ||yesOtherDogs.checked)||!(noOtherCats.checked ||yesOtherCats.checked)||!(noChild.checked ||yesChild.checked )){
            alert("Please fill out all the fields!");
        }
}
function ValidateEmail() 
{
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!(email.match(mailformat))){
    alert("You have entered an invalid email address!")
}
}