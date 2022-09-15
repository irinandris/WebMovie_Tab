<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- Fig. 26.19: database.php 
-->
<!-- Program to query a database and -->
<!-- send results to the client. -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Irin Andris 6314110016</title>
</head>

<body style="font-family: arial, sans-serif;background-color: #F0E68C">
    <?php
    error_reporting(0);
    extract($_POST);
    // build SELECT query
    $query = "SELECT " . $select . " FROM info";
 
    // connect to MySQL 
    if (!($exercise1 = mysqli_connect("localhost", "root","")))
        die("Could not connect to database");

    // open Products database if 
    if (!mysqli_select_db($exercise1, "students"))
        die("Could not open Products database");

    // query Products database if 
    if (!($result = mysqli_query($exercise1, $query))) {
        print("Could not execute query! <br />");
        die(mysqli_error($exercise1));
    }
    ?>

    <h3 style="color: blue"> Search Results</h3>
    <table border ="1" cellpadding="3" cellspacing="2" style="background-color: #ADD8E6">
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

        mysqli_close($exercise1);
        ?>
    </table>
    <br />Your search yielded <strong>

        <?php
        print("$counter")
        ?> results.<br /><br /></strong>
    <h5>Please email comments to
        <a href="mailto:deite1@deitel.com">
            Deitel and Associates, Inc. </a>
    </h5>
    <p><a href="index10.html">Back</a></p>
</body>

</html>