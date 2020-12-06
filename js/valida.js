
function validateLengthMin(){
    let user  = document.getElementById("user").value; 
    let pwd   = document.getElementById("password").value; 
    let valid = true;
    if (pwd.length<5 || user.length<5){
        alert("La longitud de los campos no puede ser menor de 5");
        valid = false;
    }
    return (valid);
}
