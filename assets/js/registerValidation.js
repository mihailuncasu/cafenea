

function validateForm(){

    var name=document.registerForm.uname.value;
    var password=document.registerForm.pwd.value;
    var rpassword=document.registerForm.rpwd.value;

    if (name==null || name==""){
    alert("Name can't be blank");
    return;
}
    if(password.length<6){
    alert("Password must be at least 6 characters long.");
    return;
}
    if( password != rpassword ){
    alert("Password must match");
    return;

}
}



