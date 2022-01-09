function validate() {
    var pass = document.forms["myForm"]["password"].value;
    var email = document.forms["myForm"]["email"].value;


    if (email == "") {
        alert("Email must be filled out");
        return false;
    } else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
        alert("Invalid email");
        return false;
    }
    if (pass == "") 
    {
        alert("Password must be filled out");
        return false;
    }
  
}