<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <!-- Fig. 26.26: formDatabase.php -->
<!-- Program to query a database and -->
<!-- send results to the client. -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Irin Andris 6314110016</title>
</head>

<body style="font-family: arial, sans-serif" style="background-color: #F0E68C">
    <?php
    error_reporting(0);
    extract($_POST);

    // build SELECT query
    $query = "SELECT * FROM contacts";

    // Connect to MySQL
    if (!($database = mysqli_connect(
        "localhost",
        "httpd",
        ""
    )))
        die("Could not connect to database");
    // open MailingList database
    if (!mysqli_select_db($database, "MailingList"))
        die("Could not open MailingList database");

    // query MailingList database
    if (!($result = mysqli_query($database, $query,))) {
        print("Could not execute query! <br />");
        die(mysqli_error($database));
    }
    ?>

    <h3 style="color: blue">
        Mailing List Contacts</h3>

    <table border="1" cellpadding="3" cellspacing="2" style="background-color: #ADD8E6">

        <tr>
            <td>ID</td>
            <td>Last Name</td>
            <td>First Name</td>
            <td>E-mail Address</td>
            <td>Phone Number</td>
            <td>Book</td>
            <td>Operating System</td>

        </tr>
        <?php

        // fetch each record in result set
        for (
            $counter = 0;
            $row = mysqli_fetch_row($result);
            $counter++
        ) {

            // build table to display results
            print("<tr>");

            foreach ($row as $key => $value)
                print("<td>$value</td>");

            print("</tr>");
        }

        mysqli_close($database);
        ?>

    </table>

</body>

</html>