<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <SCRIPT type="text/javascript">

        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function validate_form ( )
        {
            valid = true;

            if ( document.contact_form.login.value == "" )
            {
                alert ( "Login is empty" );
                valid = false;
            }

            if ( document.contact_form.password.value != document.contact_form.confirm_Password.value )
            {
                alert ( "Incorrect confirm password" );
                valid = false;
            }

            if ( document.contact_form.fullName.value == "" )
            {
                alert ( "Full name is empty" );
                valid = false;
            }

            if ( !validateEmail(document.contact_form.email.value))
            {
                alert ( "Incorrect email" );
                valid = false;
            }

            return valid;
        }

    </SCRIPT>

</head>
<body>
<h1>Registration</h1>

<form name="contact_form" method="post" onsubmit="return validate_form ( );">
    <fieldset>
        <input type="text" name="login" placeholder="Login">
        <input id="textPassword" type="password" name="password" placeholder="Password">
        <input id="textConfirmPassword" type="password" name="confirm_Password" placeholder="Confirm password">
        <input type="text" name="fullName" placeholder="Full name">
        <input type="email" name="email" placeholder="Email">
        <input type="submit">
    </fieldset>
    <p id="textMessage"></p>
</form>

</body>
</html>
<?php
require_once("models/UserTable.php");
require_once("models/Model.php");
require_once("models/DatabaseConnection.php");

if ($_POST) {
    $userDb = new UserTable();
    $userDb->login = $_POST['login'];
    $userDb->password = $_POST['password'];
    $userDb->email_address = $_POST['email'];
    $userDb->full_name = $_POST['fullName'];
    try {
        $userDb->insert();
    } catch (Exception $e){
        $notification = "  
        <SCRIPT>
            alert('User already exists')
        </SCRIPT>";
        echo $notification;

    }
}
