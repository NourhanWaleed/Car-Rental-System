function validate() {
    var confirmpass = document.forms["myForm"]["confirm-password"].value;
    var pass = document.forms["myForm"]["password"].value;
    var email = document.forms["myForm"]["email"].value;
    var firstname = document.forms["myForm"]["first_name"].value;
    var lastname = document.forms["myForm"]["last_name"].value;
    var dob = document.forms["myForm"]["date_of_birth"].value;
    var balance = document.forms["myForm"]["balance"].value;


    if (email == "") {
        alert("Email must be filled out");
        return false;
    } else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
        alert("Invalid email");
        return false;
    }
    if (confirmpass == "") 
        {
            alert("Confirm password must be filled out");
            return false;
        }
    if (pass == "") 
    {
        alert("Password must be filled out");
        return false;
    }
    if(confirmpass!=pass) {
        { alert("confirm password and pasword not identical") ; 
        return false;}
    } 
    if (firstname == "") 
    {
        alert("First name must be filled out");
        return false;
    }
    if (lastname == "") 
    {
        alert("Last name must be filled out");
        return false;
    }
    if (dob == "") 
    {
        alert("Date of birth must be filled out");
        return false;
    }
    if (balance == "") 
    {
        alert("Balance must be filled out");
        return false;
    }
}