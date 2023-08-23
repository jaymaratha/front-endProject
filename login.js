function func(){
    var email = document.getElementById("username").value;
    var pass = document.getElementById("password").value;
    if(email == 'jay1234@gmail.com' && pass == '1234'){
        alert("success full !")
        window.location.assign("index.html")
    }
    else{
        alert("wrong entry invalid")
    }

}
