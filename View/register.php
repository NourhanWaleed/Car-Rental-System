<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style2.css" />
    <script type = "text/javascript" src="validateregister.js"></script>
</head>


<body>
<h2>Car Rental</h2>

    <div class="col-sm-6 col-sm-offset-3 form-box">
        <ul class="nav nav-pills">
            <li class="active"><a href="registration.html">Sign Up</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>


        <form name="myForm" method="POST" onsubmit="return validate();" action="../Models/RegisterUser.php">
            <div id="firstname-group" class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" />
                <p class="err-msg-hide" id="firstname-err"></p>
            </div>

            <div id="lastname-group" class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" />
                <p class="err-msg-hide" id="lastname-err"></p>
            </div>


            <div id="gender-group" class="form-check">
                <p>Gender</p>
                <input type="radio" class="form-check-input" id="male" name="gender" value="M" checked/>
                <label class="form-check-label" for="male">Male</label><br>
                <input type="radio" class="form-check-input" id="female" name="gender" value="F" />
                <label class="form-check-label" for="female">Female</label><br>
                <p class="err-msg-hide" id="gender-err"></p>
            </div>

            <div id="dateofbirth-group" class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" />
                <p class="err-msg-hide" id="lastname-err"></p>
            </div>


              <div id="email-group" class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com" />
                <p class="err-msg-hide" id="email-err"></p>
            </div>


            <div id="password-group" class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                <p class="err-msg-hide" id="password-err"></p>
            </div>

            <div id="confirm-password-group" class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm Password" />
                <p class="err-msg-hide" id="confirm-pass-err"></p>
            </div>

            <div id="balance-group" class="form-group">
                <label for="balance">Balance</label>
                <input type="text" class="form-control" id="balance" name="balance" placeholder="Balance" />
                <p class="err-msg-hide" id="balance-err"></p>
            </div>

            <button type="submit" class="btn btn-success form-button" name="submit">
                Sign Up
            </button>

        </form>
    </div>
</body>

</html>