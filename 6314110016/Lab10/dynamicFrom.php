<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irin Andris 6314110016</title>
</head>

<body>
    <?php
    error_reporting(0);
    extract($_POST);
    $iserror = false;

    // array of book titles
    $booklist = array(
        "Internet and WWW How to Program 3e",
        "C++ How to Program 4e",
        "Java How to Program 5e",
        "XML How to Program 1e"
    );
    // array of possible operating systems
    $systemlist = array(
        "Windows XP",
        "Windows 2000",
        "Windows 98",
        "Linux",
        "Other"
    );

    // array of name and alt values for the text input fields
    $inputlist = array(
        "fname" => "First Name",
        "lname" => "Last Name",
        "email" => "Email",
        "phone" => "Phone"
    );
    $formerrors = array(
        "fnameerror" => true,
        "lnameerror" => true,
        "emailerror" => true,
        "phoneerror" => true
    );
    if (isset($submit)) {
        if ($fname == "") {
            $formerrors["fnameerror"] = true;
            $iserror = true;
        }

        if ($lname == "") {
            $formerrors["lnameerror"] = true;
            $iserror = true;
        }
        if ($email == "") {
            $formerrors["emailerror"] = true;
            $iserror = true;
        }

        if (!mb_ereg("^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$", $phone)) {
            $formerrors["phoneerror"] = true;
            $iserror = true;
        }

        if (!$iserror) {

            // build INSERT query
            $query = "INSERT INTO contacts " .
                "( LastName, FirstName, Email, Phone, Book, OS ) " .
                "VALUES ( '$lname', '$fname', '$email', " .
                "'" . quotemeta($phone) . "', '$book', '$os' )";

            // Connect to MySQL
            if (!($database = mysqli_connect(
                "localhost",
                "root",
                ""
            )))
                die("Could not connect to database");

            // open MailingList database
            if (!mysqli_select_db($database, "MailingList"))
                die("Could not open MailingList database");
            // execute query in MailingList database
            if (!($result = mysqli_query($database, $query))) {
                print("Could not execute query! <br />");
                die(mysqli_error($database));
            }

            print("<p>Hi
     <span style = 'color: blue'>
     <strong>$fname</strong></span>.
     Thank you for completing the survey.<br />
    
     You have been added to the
     <span style = 'color: blue'>
     <strong>$book</strong></span>
     mailing list.
     </p>
     <strong>The following information has been saved
     in our database:</strong><br />
    
     <table border = '0' cellpadding = '0' cellspacing = '10'>
     <tr>
     <td bgcolor = '#ffffaa'>Name</td>
     <td bgcolor = '#ffffbb'>Email</td>
    <td bgcolor = '#ffffcc'>Phone</td>
    <td bgcolor = '#ffffdd'>OS</td>
    </tr>
 <tr>

 <!-- print each form field's value -->
 <td>$fname $lname</td>
 <td>$email</td>
 <td>$phone</td>
 <td>$os</td>
 </tr></table>

 <br /><br /><br />
 <div style = 'font-size: 10pt; text-align: center'>
 <div style = 'font-size : 18pt'>
 <a href = 'formDatabase.php'>
 Click here to view entire database.</a></div>
 This is only a sample form.
 You have not been added to a mailing list.
 </div></body></html>");
            die();
        }
    }

    print("<h1>This is a sample registration form.</h1>
 Please fill in all fields and click Register.");
    if ($iserror) {
        print("<br /><span style = 'color : red'>
     Fields with * need to be filled in properly.</span>");
    }

    print("<!-- post form data to form.php -->
     <form method = 'post' action = 'dynamicFrom.php'>
     <img src = 'images/user.gif' alt = 'User' /><br />
     <span style = 'color: blue'>
     Please fill out the fields below.<br />
     </span>
    
     <!-- create four text boxes for user input -->");
    foreach ($inputlist as $inputname => $inputalt) {
        $inputtext = $inputvalues[$inputname];

        print("<img src = 'images/$inputname.gif'
     alt = '$inputalt' /><input type = 'text'
     name = '$inputname' value = '' . $inputname . '' />");

        if ($formerrors[($inputname) . "error"] == true)
            print("<span style = 'color : red'>*</span>");

        print("<br />");
    }
    print("<span style = 'font-size : 10pt");

    if ($formerrors["phoneerror"])
        print("; color : red");

    print("'>Must be in the form (555)555-5555
 </span><br /><br />

 <img src = 'images/downloads.gif'
 alt = 'Publications' /><br />

 <span style = 'color: blue'>
 Which book would you like information about?
 </span><br />

 <!-- create drop-down list containing book names -->
 <select name = 'book'>");

    foreach ($booklist as $currbook) {
        print("<option");

        if (($currbook == $book))
            print(" selected = 'true'");
        print(">$currbook</option>");
    }

    print("</select><br /><br />
 <img src = 'images/os.gif' alt = 'Operating System' />
 <br /><span style = 'color: blue'>
 Which operating system are you currently using?
 <br /></span>

 <!-- create five radio buttons -->");

    $counter = 0;

    foreach ($systemlist as $currsystem) {
        print("<input type = 'radio' name = 'os'
 value = '$currsystem'");

        if ($currsystem == $os) print("checked = 'checked'");
        if ($iserror && $counter == 0) print("checked = 'checked'");

        print(" />$currsystem");

        if ($counter == 2) print("<br />");
        $counter++;
    }
    print("<!-- create a submit button -->
 <br />
 <input type = 'submit' name = 'submit' value = 'Register' />
 </form></body></html>");

    ?>

</body>

</html>