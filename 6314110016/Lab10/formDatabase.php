<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irin Andris 6314110016</title>
</head>

<body style="font-family: arial, sans-serif; background-color: #F0E68C">
    <?php

    extract($_POST);

    // build SELECT query
    $query = "SELECT * FROM contacts";

    // Connect to MySQL
    if (!($database = mysqli_connect(
        "localhost",
        "root",
        ""
    )))
        die("Could not connect to database");
    // open MailingList database
    if (!mysqli_select_db($database,"MailingList" ))
        die("Could not open MailingList database");

    // query MailingList database
    if (!($result = mysqli_query($database, $query))) {
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
    <p><a href="index10.html">Back</a></p>
</body>

</html>