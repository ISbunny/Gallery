function toggle() {
    const passfield = document.getElementById("passfield");
    if(passfield.type === "password"){
       passfield.type = "text";
       }else{
        passfield.type = "password";
       }
}