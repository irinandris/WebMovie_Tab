<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irin Andris 6314110016</title>
</head>

<body>
    <?php
    extract($_POST);

    // check if user has left USERNAME or PASSWORD field blank
    if (!$USERNAME || !$PASSWORD) {
        fieldsBlank();
        die();
    }

    // check if the New User button was clicked
    if (isset($NewUser)) {

        // open password.txt for writing using append mode
        if (!($file = fopen("password.txt", "a"))) {
            print("<title>Error</title></head><body> Could not open password file </body></html>");
            die();
        }
        fputs($file, "$USERNAME,$PASSWORD\n");
        userAdded($USERNAME);
    } else {

        // if a new user is not being added, open file
        // for reading
        if (!($file = fopen("password.txt", "r"))) {
            print("<title>Error</title></head> <body>Could not open password file</body></html>");
            die();
        }
        $userVerified = 0;
        while (!feof($file) && !$userVerified) {
            $line = fgets($file, 255);
            $line = chop($line);
            $field = explode(",", $line, 2);

            if ($USERNAME == $field[0]) {
                $userVerified = 1;

                if (checkPassword($PASSWORD, $field) == true)
                    accessGranted($USERNAME);
                else
                    wrongPassword();
            }
        }
        fclose($file);
        if (!$userVerified)
            accessDenied();
    }
    function checkPassword($userpassword, $filedata)
    {
        if ($userpassword == $filedata[1])
            return true;
        else
            return false;
    }
    function userAdded($name)
    {
        print("<title>Thank You</title></head>
 <body style = \"font-family: arial;
 font-size: 1em; color: blue\">
 <strong>You have been added
 to the user list, $name.
 <br />Enjoy the site.<p></strong>");
    }
    function accessGranted($name)
    {
        print("<title>Thank You</title></head>
 <body style = \"font-family: arial;
 font-size: 1em; color: blue\">
 <strong>Permission has been
 granted, $name. <br />
 Enjoy the ite.<p><a href=assignmentFrom>Register</a></p></strong>");
        print("<br/>Press <a href=AssignmentForm.html>Register</a>  to fill out the form");
    }
    function wrongPassword()
    {
        print("<title>Access Denied</title></head>
<body style = \"font-family: arial;
 font-size: 1em; color: red\">
 <strong>You entered an invalid
 password.<br />Access has
 been denied.</strong>");
    }
    function accessDenied()
    {
        print("<title>Access Denied</title></head>
  <body style = \"font-family: arial;
  font-size: 1em; color: red\">
  <strong>
  You were denied access to this server.
  <br /></strong>");
    }
    function fieldsBlank()
    {
        print("<title>Access Denied</title></head>
   <body style = \"font-family: arial; font-size: 1em; color: red\">
   <strong>
   Please fill in all form fields.
   <br /></strong>");
    }
    ?>
   <p><a href="index9.html">Back</a></p>
</body>

</html>