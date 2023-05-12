
function formVerif(){
    let cat= document.getElementById("cat");
    let dog= document.getElementById("dog");
    let breed= document.getElementById("breeddogcat").value;
    let extra= document.getElementById("extra").value;
    if(!(cat.checked || dog.checked) || breed=="" || extra==""){
        alert("Please fill out all the fields!");
    }
}