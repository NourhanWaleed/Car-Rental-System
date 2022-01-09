<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style2.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type = "text/javascript" src="validatelogin.js"></script>

</head>


<body>
<h2>Car Rental</h2>

    <div class="col-sm-6 col-sm-offset-3 form-box">
        <ul class="nav nav-pills">
            <li><a href="register.php">Sign Up</a></li>
            <li class="active"><a href="login.php">Login</a></li>
        </ul>

        <form name="myForm" action="../Models/LoginModel.php" method="POST" onsubmit="return validate()">

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

            <button type="submit" class="btn btn-success form-button" name = "submit">
                Login
            </button>
        </form>
    </div>
</body>

</html>